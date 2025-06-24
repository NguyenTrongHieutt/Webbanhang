<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TypeProduct;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){
        
         return view('admin_login');

    }
     public function show_dashboard(){
         return view('admin/dashboard');
    }


public function login(Request $request)
{
    // Đăng nhập admin dùng bcrypt
    if (Auth::guard('admin')->attempt([
        'admin_email' => $request->admin_email,
        'password' => $request->admin_password
    ])) {
        return redirect('/admin-dashboard');
    } else {
        return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }
}
// public function login(Request $request)
// {
//     $admin = \App\Models\Admin::where('admin_email', $request->admin_email)
//         ->where('admin_password', $request->admin_password)
//         ->first();

//     if ($admin) {
//         // Đăng nhập thủ công
//         Auth::guard('admin')->login($admin);
//         return redirect('/admin-dashboard');
//     } else {
//         return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
//     }
// }

public function logout()
{
    Auth::guard('admin')->logout();
    
    return redirect('/admin-login');
}
//Thêm type_product

public function store_type_product(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    ], [
        'name.required' => 'Vui lòng nhập tên loại sản phẩm.',
        'description.required' => 'Vui lòng nhập mô tả loại sản phẩm.',
    ]);

    $exists = TypeProduct::where('name', $request->name)->exists();
    if ($exists) {
        return redirect()->back()->with('error', 'Tên loại sản phẩm đã tồn tại!');
    }

    $type = new TypeProduct();
    $type->name = $request->name;
    $type->description = $request->description;
    $type->save();

    return redirect()->back()->with('success', 'Thêm loại sản phẩm thành công!');
}
// Hiển thị danh sách type product có giới hạn
public function search(Request $request) {
    $query = TypeProduct::query();
    if ($request->keyword) {
        $query->where('name', 'like', '%' . $request->keyword . '%');
    }
    $types = $query->orderBy('id', 'desc')->paginate($request->limit ?? 10);
    return response()->json([
        'data' => $types->items(),
        'current_page' => $types->currentPage(),
        'last_page' => $types->lastPage()
    ]);
}
// Edit type_product
public function edit_type_product($id)
{
    $type = TypeProduct::findOrFail($id);
    return view('admin.edit_category_product', compact('type'));
}


public function update_type_product(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    ], [
        'name.required' => 'Vui lòng nhập tên loại sản phẩm.',
        'description.required' => 'Vui lòng nhập mô tả loại sản phẩm.',
    ]);

    $type = TypeProduct::findOrFail($id);
    $type->name = $request->name;
    $type->description = $request->description;
    $type->save();

    // Lấy lại trạng thái phân trang/tìm kiếm
    $query = [];
    if ($request->filled('page')) $query['page'] = $request->page;
    if ($request->filled('keyword')) $query['keyword'] = $request->keyword;

    $url = '/type-product/all';
    if (!empty($query)) {
        $url .= '?' . http_build_query($query);
    }

    
return redirect()->back()->with('success', 'Cập nhật loại sản phẩm thành công!');
}
// Xóa type_product
public function destroy_type_product($id)
{
    $type = TypeProduct::findOrFail($id);

    // Kiểm tra có sản phẩm liên kết không (không dùng quan hệ model)
    $productCount = DB::table('product')->where('id_type_product', $id)->count();
    if ($productCount > 0) {
        return response()->json(['error' => 'Không thể xóa! Loại sản phẩm này đang có sản phẩm liên kết.'], 400);
    }

    $type->delete();
    return response()->json(['success' => true]);
}
// Lưu sản phẩm mới
public function store_product(Request $request)
{
    $request->validate([
        'name_product' => 'required|string|max:255',
        'id_type_product' => 'required|exists:type_product,id',
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|numeric|min:1',
        'unit_type' => 'required|string|max:50',
        'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
        'id_type_product.required' => 'Vui lòng chọn loại sản phẩm.',
        'id_type_product.exists' => 'Loại sản phẩm không tồn tại.',
        'image_url.required' => 'Vui lòng chọn ảnh sản phẩm.',
    ]);

    // Xử lý upload ảnh
    $imageName = null;
    if ($request->hasFile('image_url')) {
        $image = $request->file('image_url');
        $imageName = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('images/product'), $imageName);
    }

    Product::create([
        'name_product' => $request->name_product,
        'id_type_product' => $request->id_type_product,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'unit_type' => $request->unit_type,
        'image_url' => $imageName,
    ]);

    return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');
}

// Hiển thị form chỉnh sửa sản phẩm
    public function edit_product($id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();
        $types = TypeProduct::all();
        return view('admin.edit_product', compact('product', 'types'));
    }

    // Xử lý cập nhật sản phẩm
    
public function update_product(Request $request, $id)
{
    $product = Product::where('product_id', $id)->firstOrFail();

    $request->validate([
        'name_product' => 'required|string|max:255',
        'id_type_product' => 'required|exists:type_product,id',
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|numeric|min:0',
        'unit_type' => 'required|string|max:50',
        'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only(['name_product', 'id_type_product', 'price', 'quantity', 'unit_type']);

    if ($request->hasFile('image_url')) {
        // Xóa ảnh cũ nếu có
        if ($product->image_url && file_exists(public_path('images/product/' . $product->image_url))) {
            unlink(public_path('images/product/' . $product->image_url));
        }
        $image = $request->file('image_url');
        $imageName = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('images/product'), $imageName);
        $data['image_url'] = $imageName;
    }

    $product->update($data);

    return redirect()->route('all_product')->with('success', 'Cập nhật sản phẩm thành công!');
}
    // Xóa sản phẩm (check khóa ngoại với orders)
    public function destroy_product($id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();

        // Kiểm tra khóa ngoại với bảng orders
        $orderCount = DB::table('orders')->where('product_id', $id)->count();
        if ($orderCount > 0) {
            return redirect()->back()->with('error', 'Không thể xóa! Sản phẩm đã có trong đơn hàng.');
        }
 // Xóa ảnh nếu có
    if ($product->image_url && file_exists(public_path('images/product/' . $product->image_url))) {
        unlink(public_path('images/product/' . $product->image_url));
    }
        $product->delete();
        return redirect()->route('all_product')->with('success', 'Xóa sản phẩm thành công!');
    }
}

