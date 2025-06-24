<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\Auth\RegisteredUserController;
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);
#Danh muc san pham trang chu 

// Route::get('/danh-muc-san-pham/{category_id}', [CategoryProduct::class, 'show_category_home']);
// Route::get('/thuong-hieu-san-pham/{brand_id}', [BrandProduct::class, 'show_brand_home']);
// Route::get('/chi-tiet-san-pham/{product_id}', 
// [ProductController::class, 'details_product']);



// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/admin', [AdminController::class, 'index']);
// Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
// Route::get('/logout', [AdminController::class, 'logout']); 
// Route::get('/admin/dashboard', [AdminController::class, 'show_dashboard'])->name('admin.dashboard');
#category product 
// Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
// Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
// Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);
// Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);
// Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
// Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);
// Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
// Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);

#Brand product 
// Route::get('/add-brand-product', [BrandProduct::class, 'add_brand_product']);
// Route::get('/edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);
// Route::get('/delete-brand-product/{brand_product_id}', [BrandProduct::class, 'delete_brand_product']);
// Route::get('/all-brand-product', [BrandProduct::class, 'all_brand_product']);
// Route::get('/unactive-brand-product/{brand_product_id}', [BrandProduct::class, 'unactive_brand_product']);
// Route::get('/active-brand-product/{brand_product_id}', [BrandProduct::class, 'active_brand_product']);
// Route::post('/save-brand-product', [BrandProduct::class, 'save_brand_product']);
// Route::post('/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);




#Product 
// Route::get('/add-product', [ProductController::class, 'add_product']);
// Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
// Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
// Route::get('/all-product', [ProductController::class, 'all_product']);

// Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
// Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);

// Route::post('/save-product', [ProductController::class, 'save_product']);
// Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);






// cart
// Route::post('/save-cart', [CartController::class, 'save_cart']);
// Route::post('/update-cart-quantity', [CartController::class, 'update_cart_quantity']);
// Route::get('/show-cart', [CartController::class, 'show_cart']);
// Route::get('/delete-to-cart/{rowId}', [CartController::class, 'delete_to_cart']);

// checkout
// Route::get('/login-checkout', [CheckoutController::class, 'login_checkout']);
// Route::post('/add-customer', [CheckoutController::class, 'add_customer']);
// Route::get('/checkout', [CheckoutController::class, 'checkout']);
// Route::post('/save-checkout-customer', [CheckoutController::class, 'save_checkout_customer']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
//  })     ->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// <?php
// use App\Http\Controllers\AdminController;
// use Illuminate\Support\Facades\Route;

// Đăng ký user

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
 Route::post('/user_register', [UserController::class, 'register'])->name('user.register');
// Trang đăng nhập admin
Route::get('/admin-login', [AdminController::class, 'index'])->name('admin_login');
Route::get('/user-login', [UserController::class, 'index'])->name('login');
// Xử lý đăng nhập admin (POST) admin.login.post
Route::post('/admin-login', [AdminController::class, 'login'])->name('admin.login.post');
// Xử lkys đăng nhập user (post)
Route::post('/user-login', [UserController::class, 'login'])->name('user.login.post');
// Nhóm route dành cho admin đã đăng nhập (dùng guard admin)
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'show_dashboard'])->name('admin.dashboard');
    // Thêm các route quản trị khác ở đây nếu cần
    //Category Product
Route::get('/add-category-product', [CategoryProductController::class, 'add_category_product'])->name('add_category_product');
Route::get('/all-category-product', [CategoryProductController::class, 'all_category_product'])->name('all_category_product');
// Product for admin
Route::get('/add-product', [CategoryProductController::class, 'add_product'])->name('add_product');
Route::get('/all-product', [CategoryProductController::class, 'all_product'])->name('all_product');
// Save Type Product And list Type Product for admin
Route::get('/type-product/all', [TypeProductController::class, 'index'])->name('type_product.all');
Route::post('/type-product/store', [AdminController::class, 'store_type_product'])->name('type_product.store');
Route::get('/admin/type-products/search', [AdminController::class, 'search']);
// Edit Type Product for admin
Route::get('/type-product/edit/{id}', [AdminController::class, 'edit_type_product'])->name('type_product.edit');
Route::post('/type-product/update/{id}', [AdminController::class, 'update_type_product'])->name('type_product.update');
// Delete Type Product for admin
Route::delete('/type-product/destroy/{id}', [AdminController::class, 'destroy_type_product'])->name('type_product.destroy');
// Thêm sản phẩm
Route::post('/product/store', [AdminController::class, 'store_product'])->name('product.store');
// Nhóm Route chỉnh sửa , xóa sản phẩm cho admin
Route::get('/all-product', [ProductController::class, 'index'])->name('all_product');
Route::get('/product/edit/{id}', [AdminController::class, 'edit_product'])->name('product.edit');
Route::post('/product/update/{id}', [AdminController::class, 'update_product'])->name('product.update');
Route::delete('/product/destroy/{id}', [AdminController::class, 'destroy_product'])->name('product.destroy');
});
// nhóm route dành cho user đăng nhập
Route::middleware('auth:user')->group(function () {
    Route::get('/user-dashboard', [UserController::class, 'show_dashboard'])->name('user.dashboard');
    // Thêm các route quản trị khác ở đây nếu cần
    Route::get('/user/orders', [UserController::class, 'listOrder'])->name('user.orders');
    //Sửa và xóa đơn hàng
Route::put('/user/order/{id}', [UserController::class, 'updateOrder']);
Route::delete('/user/order/{id}', [UserController::class, 'deleteOrder']);
// Xử lý giỏ hàng
Route::post('/order', [UserController::class, 'order'])->name('user.order');
});
//User logout
Route::post('/user-logout', [UserController::class, 'logout'])->name('user.logout');
//Admin logut
Route::get('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout');



// require _DIR_.'/auth.php';
// Load sản phẩm và type sản phẩm
Route::get('/search-type-ui', [TypeProductController::class, 'searchUI']);
Route::get('/type-products/load', [TypeProductController::class, 'loadMore']);
Route::get('/type-products/find-by-name', [TypeProductController::class, 'findByName']);
Route::get('/products/load-by-type', [ProductController::class, 'loadByType']);



// Tìm loại sản phẩm theo tên
Route::get('/api/type-products/search', function(\Illuminate\Http\Request $request) {
    $q = $request->input('q');
    return \App\Models\TypeProduct::where('name', 'like', "%$q%")
        ->limit(20)
        ->get(['id', 'name']);
});






