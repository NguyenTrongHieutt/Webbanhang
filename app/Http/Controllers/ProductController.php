<?php
namespace App\Http\Controllers;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   // Hiển thị danh sách sản phẩm với tìm kiếm và lọc loại
    public function index(Request $request)
    {
        $query = Product::query();

        // Tìm kiếm theo tên
        if ($request->filled('keyword')) {
            $query->where('name_product', 'like', '%' . $request->keyword . '%');
        }

        // Lọc theo loại
        if ($request->filled('type_id')) {
            $query->where('id_type_product', $request->type_id);
        }

        $products = $query->orderBy('product_id', 'desc')->paginate(10);
        $types = TypeProduct::all();

        return view('admin.all_product', compact('products', 'types'));
    }
    // Load product theo type_id (AJAX)
    public function loadByType(Request $request)
    {
        $typeId = $request->input('type_id');
        $offset = $request->input('offset', 0);
        $limit = 8;

        $products = Product::where('id_type_product', $typeId)
            ->offset($offset)
            ->limit($limit)
            ->get();

        return response()->json($products);
    }
    
}
