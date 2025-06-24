<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food mini</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
     <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" type="text/css">
     <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css"> 
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
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
        <div class="{{asset('frontend/humberger__menu__widget')}}">
            <div class="header__top__right__language">
                <img src="{{asset('frontend/img/language.png')}}" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> logout</a>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
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
        <span class="username">{{ Auth::user()->name ?? 'Tài khoản' }}</span>
        <span class="arrow_carrot-down" style="margin-left:6px;"></span>
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
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
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
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li>
    <a href="{{ route('user.orders') }}">
        <i class="fa fa-shopping-bag"></i>
        
    </a>
</li>
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
    <section class="hero">
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
                    <div class="hero__item set-bg" data-setbg="{{asset('frontend/img/hero/banner.jpg')}}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
 
<!-- <section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-1.jpg') }}">
                        <h5><a href="#">Fresh Fruit</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-2.jpg') }}">
                        <h5><a href="#">Dried Fruit</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-3.jpg') }}">
                        <h5><a href="#">Vegetables</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-4.jpg') }}">
                        <h5><a href="#">Drink Fruits</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-5.jpg') }}">
                        <h5><a href="#">Drink Fruits</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Categories Section End -->
    

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Product</h2>
                </div>
                <!-- <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li>
                    </ul>
                </div> -->
            </div>
        </div>
        <!-- <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/feature-1.jpg') }}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Crab Pool Security</a></h6>
                        <h5>$30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/feature-2.jpg') }}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Crab Pool Security</a></h6>
                        <h5>$30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/feature-3.jpg') }}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Crab Pool Security</a></h6>
                        <h5>$30.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{ asset('frontend/img/featured/feature-4.jpg') }}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Crab Pool Security</a></h6>
                        <h5>$30.00</h5>
                    </div>
                </div>
            </div> -->
            <!-- Thêm các sản phẩm khác tương tự ở đây -->
             <div class="d-flex justify-content-center">
   <div class="d-flex justify-content-center">
    <div id="typeDropdown" class="mb-4" style="max-width:350px; width:100%;">
        <div class="input-group">
            <input type="text" id="typeSearch" class="form-control" placeholder="Tìm loại sản phẩm...">
            <button class="btn btn-outline-secondary" type="button" id="showTypesBtn">▼</button>
            <button class="btn btn-primary" type="button" id="searchTypeBtn">Tìm kiếm</button>
        </div>
        <ul id="typeList" class="list-group"></ul>
        <div id="paginationControls" style="display:none;">
            <button id="prevTypesBtn" class="btn btn-sm btn-light">◀</button>
            <span id="pageIndicator" class="mx-2"></span>
            <button id="nextTypesBtn" class="btn btn-sm btn-light">▶</button>
        </div>
    </div>
</div>
    </div>
        <h4 id="selectedTypeName" class="mb-3"></h4>
        <!-- <div id="productList" class="d-flex flex-wrap"></div> -->
         <div id="productList" class="row featured__filter"></div>
        <div id="productPagination" class="text-center mt-3" style="display: none;">
            <button id="prevProductsBtn" class="btn btn-sm btn-dark-outline">◀</button>
            <span id="productPageIndicator" class="mx-2 text-dark fw-bold"></span>
            <button id="nextProductsBtn" class="btn btn-sm btn-dark-outline">▶</button>
        </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Categories Section Begin -->
 
 <section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-1.jpg') }}">
                        <h5><a href="#">Fresh Fruit</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-2.jpg') }}">
                        <h5><a href="#">Dried Fruit</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-3.jpg') }}">
                        <h5><a href="#">Vegetables</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-4.jpg') }}">
                        <h5><a href="#">Drink Fruits</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cat-5.jpg') }}">
                        <h5><a href="#">Drink Fruits</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- Categories Section End -->

  <!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{ asset('frontend/img/banner/banner-2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

   <!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-1.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-2.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-3.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-1.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-2.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-3.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-1.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-2.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-3.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-1.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-2.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-3.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-1.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-2.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-3.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-1.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-2.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('frontend/img/latest-product/lp-3.jpg') }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->

<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ asset('frontend/img/blog/blog-1.jpg') }}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ asset('frontend/img/blog/blog-2.jpg') }}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{ asset('frontend/img/blog/blog-3.jpg') }}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

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
    <!-- Thêm CSS cho phần lọc sản phẩm -->
<style>
    #typeDropdown {
        position: relative;
        width: 300px;
    }
    #typeList {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #ccc;
        z-index: 9999;
        max-height: 200px;
        overflow-y: auto;
        display: none;
    }
    #typeList li {
        padding: 8px 12px;
        cursor: pointer;
    }
    #typeList li:hover {
        background-color: #f8f9fa;
    }
    .product-box {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
        margin: 10px;
        width: 180px;
        display: inline-block;
        vertical-align: top;
        background-color: #fdfdfd;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    #paginationControls {
        display: none;
        margin-top: 5px;
        text-align: center;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let typePage = 0;
    const typeLimit = 8;
    let productPage = 0;
    const productLimit = 8;
    let currentTypeId = null;

    let typeKeyword = '';

function loadTypes() {
    $.get('/type-products/load', {
        offset: typePage * typeLimit,
        limit: typeLimit,
        keyword: typeKeyword
    }, function (data) {
        $('#typeList').empty();
        if (data.length > 0) {
            data.forEach(t => {
                $('#typeList').append(`<li class="list-group-item list-group-item-action" data-id="${t.id}">${t.name}</li>`);
            });
            $('#typeList').show();
            $('#paginationControls').show();
            $('#pageIndicator').text(`Trang ${typePage + 1}`);
            $('#prevTypesBtn').prop('disabled', typePage === 0);
            $('#nextTypesBtn').prop('disabled', data.length < typeLimit);
        } else {
            $('#typeList').hide();
            $('#paginationControls').hide();
        }
    });
}

    function loadProducts() {
        if (!currentTypeId) return;
        $.get('/products/load-by-type', {
            type_id: currentTypeId,
            offset: productPage * productLimit,
            limit: productLimit
        }, function (data) {
            $('#productList').empty();
            if (data.length > 0) {
                data.forEach(p => {
                    // $('#productList').append(`
                    //     <div class="product-box text-center">
                    //         <img src="${p.image_url ?? '#'}" alt="${p.name_product}" class="img-fluid mb-2" style="height:120px; object-fit:cover;">
                    //         <div><strong>${p.name_product}</strong></div>
                    //         <div>Giá: $${p.price}</div>
                    //         <div>Số lượng: ${p.quantity ?? 'N/A'} ${p.unit_type ?? ''}</div>
                    //     </div>
                    // `);
                    $('#productList').empty();
if (data.length > 0) {
    data.forEach(p => {
        $('#productList').append(`
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="/images/product/${p.image_url ?? ''}">
                        <ul class="featured__item__pic__hover">
                            <li>
                        <a href="#" class="add-to-cart-btn" data-id="${p.product_id}" data-name="${p.name_product}" data-price="${p.price}" data-img="/images/product/${p.image_url ?? ''}">
                      <i class="fa fa-shopping-cart"></i>
                      </a>
                    </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">${p.name_product}</a></h6>
                        <h5>$${p.price}</h5>
                        <div>Số lượng: ${p.quantity ?? 'N/A'} ${p.unit_type ?? ''}</div>
                    </div>
                </div>
            </div>
        `);
    });
    // Sau khi append xong, cập nhật background cho .set-bg
    $('.set-bg').each(function () {
        var bg = $(this).attr('data-setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });
} else {
    $('#productList').html('<p class="text-muted">Không có sản phẩm nào.</p>');
}
                   
                });
                $('#productPagination').show();
                $('#productPageIndicator').text(`Trang ${productPage + 1}`);
                $('#prevProductsBtn').prop('disabled', productPage === 0);
                $('#nextProductsBtn').prop('disabled', data.length < productLimit);
            } else {
                $('#productList').html('<p class="text-muted">Không có sản phẩm nào.</p>');
                $('#productPagination').hide();
            }
        });
    }
$('#searchTypeBtn').click(function () {
    const keyword = $('#typeSearch').val().trim();
    if (!keyword) return;
    $.get('/type-products/find-by-name', { name: keyword }, function (type) {
        if (type && type.id) {
            currentTypeId = type.id;
            $('#typeSearch').val(type.name);
            $('#typeList').hide();
            $('#paginationControls').hide();
            $('#selectedTypeName').text("Sản phẩm của loại: " + type.name);
            productPage = 0;
            loadProducts();
        } else {
            currentTypeId = null;
            $('#selectedTypeName').text("Không tìm thấy loại sản phẩm.");
            $('#productList').empty();
            $('#productPagination').hide();
        }
    });
});
    $(document).ready(function () {
    // Khi nhập text vào ô tìm loại, reset currentTypeId và gợi ý lại danh sách
    $('#typeSearch').on('input', function () {
        typeKeyword = $(this).val();
        currentTypeId = null;
        typePage = 0;
        loadTypes();
    });

    // Khi click nút ▼ vẫn hiển thị danh sách
    $('#showTypesBtn').click(function () {
        if ($('#typeList').is(':visible')) {
            $('#typeList').hide();
            $('#paginationControls').hide();
        } else {
            typePage = 0;
            typeKeyword = $('#typeSearch').val();
            loadTypes();
        }
    });

    // Khi chọn loại từ danh sách gợi ý
    $('#typeList').on('click', 'li', function () {
        const name = $(this).text();
        currentTypeId = $(this).data('id');
        $('#typeSearch').val(name);
        $('#typeList').hide();
        $('#paginationControls').hide();
        $('#selectedTypeName').text("Sản phẩm của loại: " + name);
        productPage = 0;
        loadProducts();
    });

    // Khi bấm nút "Tìm kiếm" bên cạnh ô nhập loại
    $('#searchTypeBtn').click(function () {
    const keyword = $('#typeSearch').val().trim();
    if (!keyword) return;
    $.get('/type-products/find-by-name', { name: keyword }, function (type) {
        if (type && type.id) {
            currentTypeId = type.id;
            $('#typeSearch').val(type.name);
            $('#typeList').hide();
            $('#paginationControls').hide();
            $('#selectedTypeName').text("Sản phẩm của loại: " + type.name);
            productPage = 0;
            loadProducts();
        } else {
            currentTypeId = null;
            $('#selectedTypeName').text("Không tìm thấy loại sản phẩm.");
            $('#productList').empty();
            $('#productPagination').hide();
        }
    });
});

    // Các sự kiện phân trang và sản phẩm giữ nguyên như cũ...
    $('#prevTypesBtn').click(function () {
        if (typePage > 0) {
            typePage--;
            loadTypes();
        }
    });

    $('#nextTypesBtn').click(function () {
        typePage++;
        loadTypes();
    });

    $('#prevProductsBtn').click(function () {
        if (productPage > 0) {
            productPage--;
            loadProducts();
        }
    });

    $('#nextProductsBtn').click(function () {
        productPage++;
        loadProducts();
    });

    $(document).click(function (e) {
        if (!$(e.target).closest('#typeDropdown').length) {
            $('#typeList').hide();
            $('#paginationControls').hide();
        }
    });
});
</script>
    <!-- Js Plugins -->

<script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
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

<!-- Modal đặt hàng -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="orderForm">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderModalLabel">Đặt hàng</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-2">
            <img id="orderProductImg" src="" alt="" style="width:80px;">
          </div>
          <div><b id="orderProductName"></b></div>
          <div>Đơn giá: $<span id="orderProductPrice"></span></div>
          <div class="form-group mt-2">
            <label>Số lượng</label>
            <input type="number" min="1" value="1" class="form-control" id="orderQuantity" required>
          </div>
          <div class="mt-2">Tổng tiền: $<span id="orderTotal"></span></div>
          <input type="hidden" id="orderProductId" name="product_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
          <button type="submit" class="btn btn-success">Xác nhận đặt hàng</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Modal thông báo kết quả đặt hàng -->
<div class="modal fade" id="orderResultModal" tabindex="-1" role="dialog" aria-labelledby="orderResultModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center" id="orderResultMessage" style="font-size: 1.1rem;">
        <!-- Nội dung sẽ được thay bằng JS -->
      </div>
      <div class="modal-footer p-2 justify-content-center">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<!-- Xử lý sự kiện đặt hàng -->
<script>
$(document).ready(function() {
    // Khi bấm nút giỏ hàng
    $(document).on('click', '.add-to-cart-btn', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let name = $(this).data('name');
        let price = $(this).data('price');
        let img = $(this).data('img');
        $('#orderProductId').val(id);
        $('#orderProductName').text(name);
        $('#orderProductPrice').text(price);
        $('#orderProductImg').attr('src', img);
        $('#orderQuantity').val(1);
        $('#orderTotal').text(price);
        $('#orderModal').modal('show');
    });

    // Tính lại tổng tiền khi đổi số lượng
    $('#orderQuantity').on('input', function() {
        let qty = parseInt($(this).val()) || 1;
        let price = parseFloat($('#orderProductPrice').text());
        $('#orderTotal').text((qty * price).toFixed(2));
    });

    // Gửi order
    $('#orderForm').submit(function(e) {
        e.preventDefault();
        let product_id = $('#orderProductId').val();
        let quantity = $('#orderQuantity').val();
        $.ajax({
            url: "{{ route('user.order') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                product_id: product_id,
                quantity: quantity
            },
            success: function(res) {
    $('#orderModal').modal('hide');
    $('#orderResultMessage').html('<span class="text-success"><i class="fa fa-check-circle"></i> Đặt hàng thành công!</span>');
    $('#orderResultModal').modal('show');
},
error: function(xhr) {
    $('#orderModal').modal('hide');
    let msg = 'Có lỗi xảy ra, vui lòng thử lại!';
    if (xhr.responseJSON && xhr.responseJSON.message) {
        msg = xhr.responseJSON.message;
    }
    $('#orderResultMessage').html('<span class="text-danger"><i class="fa fa-times-circle"></i> ' + msg + '</span>');
    $('#orderResultModal').modal('show');
}
        });
    });
});
</script>
</body>

</html>