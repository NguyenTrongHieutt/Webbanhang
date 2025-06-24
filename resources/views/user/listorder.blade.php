
<!DOCTYPE html>
@php use Illuminate\Support\Facades\Auth; @endphp
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
<style>
    .table-responsive { overflow-x: auto; }
    </style>
  
</head>


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{asset('frontend/img/language.png')}}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                             <div class="header__top__right__auth user-dropdown" style="display:inline-block; margin-left: 16px; position:relative;">
    <a href="#" id="userDropdownToggle" style="color:#222; display:flex;align-items:center;">
        <img src="{{ asset('backend/images/2.png') }}" alt="avatar" style="width:28px;height:28px;border-radius:50%;margin-right:8px;">
<span class="username">{{ Auth::guard('user')->user()->name ?? 'Tài khoản' }}</span>        <span class="arrow_carrot-down" style="margin-left:6px;"></span>
    </a>
    <ul id="userDropdownMenu" style="display:none; position:absolute; right:0; top:100%; background:#fff; min-width:160px; box-shadow:0 2px 8px rgba(0,0,0,0.15); border-radius:6px; z-index:1000; padding:8px 0; margin:0;">
        <li style="list-style:none;"><a class="dropdown-item" href="#"><i class="fa fa-suitcase"></i> Profile</a></li>
        <li style="list-style:none;"><a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Settings</a></li>
        <li style="list-style:none; border-top:1px solid #eee; margin-top:4px; padding-top:4px;">
            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="dropdown-item" style="background:none;border:none;padding:0;margin:0;cursor:pointer;">
                    <i class="fa fa-key"></i> Log Out
                </button>
            </form>
        </li>
    </ul>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="/user-dashboard">Home</a></li>
                            <li class="active"><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> </a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('frontend/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

   <!-- Tìm kiếm -->
<!-- Tìm kiếm -->
<form method="GET" class="mb-3 d-flex align-items-center" id="searchForm">
    <input type="text" name="search" class="mr-2" placeholder="Tìm theo tên sản phẩm..." value="{{ request('search') }}">
    <select id="typeSelect" name="id_type_product" class="mr-2" style="width:200px">
        
    </select>
    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
</form>
<form id="orderListForm">
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th><input type="checkbox" id="checkAll"></th>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Loại</th>
            <th>Giá/1</th>
            <th>Số lượng</th>
            <th>Tổng giá</th>
            <th>Ngày đặt</th>
            <th>Hành động</th>
        </tr>
    </thead>
   <tbody>
@if($orders->count())
    @foreach($orders as $order)
        <tr data-id="{{ $order->id }}">
            <td><input type="checkbox" class="order-checkbox" name="order_ids[]" value="{{ $order->id }}"></td>
            <td>{{ $order->product->product_id ?? '' }}</td>
            <td>
                @if($order->product->image_url)
                    <img src="{{ asset('images/product/' . $order->product->image_url) }}" width="60">
                @else
                    <img src="{{ asset('frontend/img/no-image.png') }}" width="60">
                @endif
            </td>
            <td>{{ $order->product->name_product ?? '' }}</td>
            <td>{{ $order->product->typeProduct->name ?? '' }}</td>
            <td>
                ${{ number_format($order->price_order,2) }}
                / {{ $order->product->quantity ?? 1 }}{{ $order->product->unit_type ? ' '.$order->product->unit_type : '' }}
            </td>
            <td>
                <input type="number" min="1" value="{{ $order->total }}" class="form-control order-qty" style="width:70px;display:inline-block;">
                <button type="button" class="btn btn-sm btn-success update-qty-btn" title="Cập nhật"><i class="fa fa-save"></i></button>
            </td>
            <td>${{ number_format($order->price_order * $order->total,2) }}</td>
            <td>{{ $order->created_at }}</td>
            <td>
                <button type="button" class="btn btn-danger btn-sm delete-order-btn"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="10" class="text-center text-danger">Không có đơn hàng nào phù hợp!</td>
    </tr>
@endif
</tbody>
</table>
</div>
</form>
<!-- Phân trang -->
<div class="d-flex justify-content-center">
  {{ $orders->appends(request()->query())->links('pagination::bootstrap-4') }}
</div>
<!-- Nút thanh toán -->
<button class="btn btn-warning mt-3" type="button" disabled id="payBtn">Thanh toán</button>
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="{{asset('frontend/img/payment-item.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Script custom của bạn (phải đặt sau tất cả các thư viện trên) -->
 <script>
$(document).ready(function() {
    $('#userDropdownToggle').click(function(e) {
        e.preventDefault();
        $('#userDropdownMenu').toggle();
    });
    // Ẩn dropdown khi click ra ngoài
    $(document).click(function(e) {
        if (!$(e.target).closest('.user-dropdown').length) {
            $('#userDropdownMenu').hide();
        }
    });
});
</script>
<script>
$(function() {
// Khởi tạo select2 trước
    $('#typeSelect').select2({
       placeholder: 'Tất cả',
        allowClear: true,
        width: 'resolve',
        ajax: {
            url: '/api/type-products/search',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return { q: params.term };
            },
            processResults: function (data) {
                return { results: $.map(data, function(item) {
                    return { id: item.id, text: item.name || item.text };
                }) };
            }
        }
    });

    // Lấy id loại đã chọn từ request
    var selectedTypeId = "{{ request('id_type_product') }}";

    if(selectedTypeId) {
        // Gọi API để lấy tên loại sản phẩm theo id
        $.ajax({
            url: '/api/type-products/' + selectedTypeId,
            dataType: 'json',
            success: function(data) {
                var selectedTypeText = data.name || data.text || 'Đã chọn';
                // Thêm option vào select nếu chưa có
                if ($('#typeSelect option[value="'+selectedTypeId+'"]').length === 0) {
                    var newOption = new Option(selectedTypeText, selectedTypeId, true, true);
                    $('#typeSelect').append(newOption).trigger('change');
                } else {
                    $('#typeSelect').val(selectedTypeId).trigger('change');
                }
            }
        });
    } else {
        // Nếu là "Tất cả", chỉ cần set value là rỗng, Select2 sẽ tự hiển thị text "Tất cả"
        $('#typeSelect').val('').trigger('change');
    }
    // Check all
    $('#checkAll').on('change', function() {
        $('.order-checkbox').prop('checked', this.checked);
        $('#payBtn').prop('disabled', $('.order-checkbox:checked').length == 0);
    });
    $('.order-checkbox').on('change', function() {
        $('#payBtn').prop('disabled', $('.order-checkbox:checked').length == 0);
    });

    // Cập nhật số lượng
    $(document).on('click', '.update-qty-btn', function() {
        let row = $(this).closest('tr');
        let id = row.data('id');
        let qty = row.find('.order-qty').val();
        $.ajax({
            url: '/user/order/' + id,
            type: 'PUT',
            data: {_token: '{{ csrf_token() }}', total: qty},
            success: function() { location.reload(); }
        });
    });

    
     // Xóa order với modal
    let deleteRow = null;
    $(document).on('click', '.delete-order-btn', function() {
        deleteRow = $(this).closest('tr');
        $('#deleteOrderModal').modal('show');
    });
    $('#confirmDeleteOrderBtn').on('click', function() {
        if(deleteRow) {
            let id = deleteRow.data('id');
            $.ajax({
                url: '/user/order/' + id,
                type: 'DELETE',
                data: {_token: '{{ csrf_token() }}'},
                success: function() { 
                    deleteRow.remove();
                    $('#deleteOrderModal').modal('hide');
                }
            });
        }
    });

    // Thanh toán với modal
    $('#payBtn').click(function() {
        $('#payModal').modal('show');
    });
    $('#confirmPayBtn').on('click', function() {
        $('#payModal').modal('hide');
        alert('Chức năng thanh toán chỉ tượng trưng!');
    });
});
</script>
<!-- Modal xác nhận xóa -->
<div class="modal fade" id="deleteOrderModal" tabindex="-1" role="dialog" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteOrderModalLabel">Xác nhận xóa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn chắc chắn muốn xóa đơn hàng này?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteOrderBtn">Xóa</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal xác nhận thanh toán -->
<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="payModalLabel">Xác nhận thanh toán</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn chắc chắn muốn thanh toán các đơn hàng đã chọn?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-success" id="confirmPayBtn">Thanh toán</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>