<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        
        return view('admin_login');

    }
     public function show_dashboard(){
          return view('userlayout');
     }


public function login(Request $request)
{
    // Đăng nhập user dùng bcrypt
    if (Auth::guard('user')->attempt([
        'user_email' => $request->admin_email,
        'password' => $request->admin_password
    ])) {
        return redirect('/user-dashboard');
    } else {
        return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }
}
public function logout()
{
    Auth::guard('user')->logout();
    
    return redirect('/');
}
public function register(Request $request)
{
    $request->validate([
    'name' => ['required', 'string', 'max:255'],
    'user_email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,user_email'],
    'password' => ['required', 'confirmed', Password::defaults()],
     [
    'user_email.unique' => 'Email này đã được sử dụng!',
]
]);

$user = User::create([
    'name' => $request->name,
    'user_email' => $request->user_email,
    'user_password' => Hash::make($request->password),
]);
    $user->save();

    return redirect('/admin-login')->with('success', 'Đăng ký thành công!');
}

// Đặt hàng

public function order(Request $request)
{
    try {
        $request->validate([
            'product_id' => 'required|exists:product,product_id',
            'quantity' => 'required|integer|min:1'
        ]);

        $user = Auth::guard('user')->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $product = \App\Models\Product::where('product_id', $request->product_id)->first();
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $order = \App\Models\Order::create([
            'user_id'     => $user->id,
            'product_id'  => $product->product_id,
            'price_order' => $product->price,
            'total'       => $request->quantity,
        ]);

        return response()->json(['success' => true, 'order_id' => $order->id]);
    } catch (\Exception $e) {
        // Ghi log lỗi để kiểm tra trong storage/logs/laravel.log
        Log::error('Order error: '.$e->getMessage());
        return response()->json([
            'error' => 'Order failed',
            'message' => $e->getMessage()
        ], 500);
    }
}
// Liệt kê đơn hàng của người dùng


public function listOrder(Request $request)
{
    $query = \App\Models\Order::with(['product.typeProduct']);

    // Nếu có cả tên và loại: tìm theo cả 2 điều kiện
    if ($request->filled('search') && $request->filled('id_type_product')) {
        $query->whereHas('product', function ($q) use ($request) {
            $q->where('name_product', 'like', '%' . $request->search . '%')
              ->where('id_type_product', $request->id_type_product);
        });
    }
    // Nếu chỉ có tên: tìm theo tên
    elseif ($request->filled('search')) {
        $query->whereHas('product', function ($q) use ($request) {
            $q->where('name_product', 'like', '%' . $request->search . '%');
        });
    }
    // Nếu chỉ có loại: tìm theo loại
    elseif ($request->filled('id_type_product')) {
        $query->whereHas('product', function ($q) use ($request) {
            $q->where('id_type_product', $request->id_type_product);
        });
    }
    // Nếu không có gì thì lấy tất cả

    $orders = $query->orderByDesc('created_at')->paginate(10);

    return view('user.listorder', compact('orders'));
}

public function deleteOrder($id)
{
    $order = \App\Models\Order::findOrFail($id);
    $order->delete();
    return response()->json(['success' => true]);
}

public function updateOrder(Request $request, $id)
{
    $order = \App\Models\Order::findOrFail($id);
    $order->total = $request->total;
    $order->save();
    return response()->json(['success' => true]);
}
}

