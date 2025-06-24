<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProduct; // Đảm bảo bạn đã import đúng model TypeProduct

class TypeProductController extends Controller
{
    // Hiển thị danh sách type product có giới hạn
    public function index()
    {
          $types = TypeProduct::orderBy('id', 'desc')->paginate(10);
    return view('admin.all_category_product', compact('types'));
    }

    // // Hiển thị trang thêm mới (tùy chọn)
    // public function create()
    // {
    //     return view('type_products.create');
    // }

   
   
// Hiển thị trang tìm kiếm với giới hạn danh sách
public function searchUI()
{
    return view('search');
}
//     public function showSearch()
// {
//     $types = TypeProduct::limit(10)->get(); // Giới hạn danh sách
//     return view('search', compact('types'));
// }

    public function loadMore(Request $request)
{
    $offset = $request->input('offset', 0);
    $limit = $request->input('limit', 5);

    $types = TypeProduct::offset($offset)->limit($limit)->get();

    return response()->json($types);
}
public function findByName(Request $request)
{
    $name = $request->input('name');
    if (!$name) {
        return response()->json(['error' => 'Missing name'], 400);
    }

    $type = TypeProduct::whereRaw('LOWER(name) = ?', [mb_strtolower($name)])->first();

    if ($type) {
        return response()->json($type);
    } else {
        return response()->json(null);
    }
}
public function indexforadmin()
{
    $types = TypeProduct::orderBy('id', 'desc')->paginate(10);
    return view('admin.all_category_product', compact('types'));
}
}

