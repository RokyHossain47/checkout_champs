@extends('layouts.frontend')
@section('content')
    <!-- banner bg main start -->
    <div class="banner_bg_main">
        <!-- header top section start -->
        <div class="container">
            <div class="header_section_top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom_menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="#featured_products">Featured Products</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top section start -->
        <!-- logo section start -->
        <div class="logo_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo"><a href="{{ url('/') }}"><img
                                    src="{{ asset('frontend/images/logo.png') }}"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo section end -->
        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <div class="containt_main">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="index.html">Home</a>
                        <a href="#featured_products">Featured Products</a>
                        @if (auth()->user())
                            <a href="{{ route('logout') }}">Logout</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                        @endif
                    </div>
                    <span class="toggle_icon" onclick="openNav()"><img
                            src="{{ asset('frontend/images/toggle-icon.png') }}"></span>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($categories as $category)
                                <a class="dropdown-item" href="#{{ strtolower($category->name) }}_main_slider">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main">
                        <!-- Another variation with a button -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search this blog">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button"
                                    style="background-color: #f26522; border-color:#f26522 ">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header_box">
                        <div class="lang_box ">
                            <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="{{ asset('frontend/images/flag-uk.png') }}" alt="flag" class="mr-2 "
                                    title="United Kingdom"> English
                                <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu ">
                                <a href="#" class="dropdown-item">
                                    <img src="{{ asset('frontend/images/flag-france.png') }}" class="mr-2" alt="flag">
                                    French
                                </a>
                            </div>
                        </div>
                        <div class="login_menu">
                            <ul>
                                <li><a href="#">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="padding_10">Cart</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding pb-5">
            <div class="container pb-5">
                <div id="my_slider" class="carousel slide pb-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- banner bg main end -->
    <!-- Dynamic Category Sections Start -->
    @foreach ($categories as $key => $category)
        <div class="fashion_section {{$key == 0 ? 'pt-5 mt-5' : ''}}">
            <div id="{{ strtolower($category->name) }}_main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <h1 class="fashion_taital">{{ $category->name }}</h1>
                            <div class="fashion_section_2">
                                <div class="row justify-content-center">
                                    @foreach ($category->products->take(3) as $product)
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="box_main">
                                                <h4 class="shirt_text">{{ $product->name }}</h4>
                                                <p class="price_text">Price <span
                                                        style="color: #262626;">{{ $product->price }}TK</span></p>
                                                <div class="tshirt_img">
                                                    <img src="{{ asset('storage/' . $product->image) }}"
                                                        alt="{{ $product->name }}" alt="{{ $product->name }}">
                                                </div>
                                                <div class="btn_main">
                                                    <div class="buy_bt"><a
                                                            href="{{ route('website.products.show', $product->id) }}">Buy
                                                            Now</a>
                                                    </div>
                                                    <div class="seemore_bt">
                                                        <a href="{{ route('website.products.show', $product->id) }}">See
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel-item blocks if you want to paginate products -->
                </div>
                <a class="carousel-control-prev" href="#{{ strtolower($category->name) }}_main_slider" role="button"
                    data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#{{ strtolower($category->name) }}_main_slider" role="button"
                    data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    @endforeach
    <!-- Dynamic Category Sections End -->

    <!-- Featured Products Section Start -->
     <div class="fashion_section">
            <div id="featured_products" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <h1 class="fashion_taital">Feature Products</h1>
                    <div class="fashion_section_2">
                        <div class="row justify-content-center">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">{{ $product->name }}</h4>
                                        <p class="price_text">Price <span
                                                style="color: #262626;">{{ $product->price }}TK</span></p>
                                        <div class="tshirt_img">
                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                alt="{{ $product->name }}" alt="{{ $product->name }}">
                                        </div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a
                                                    href="{{ route('website.products.show', $product->id) }}">Buy
                                                    Now</a>
                                            </div>
                                            <div class="seemore_bt">
                                                <a href="{{ route('website.products.show', $product->id) }}">See
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br>
    <br>
    <!-- Featured Products Section End -->
@endsection
