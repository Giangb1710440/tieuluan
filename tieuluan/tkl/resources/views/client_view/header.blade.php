<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
@if(Auth::check())
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> giang@gmail.com</li>
                                <li>Free ship cho đơn hàng từ 99k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>

                            </div>

                        </div>
                    </div>

                    <div class="col-ld-1 col-md-1">
                        <style>
                            .dropbtn {
                                margin-top: 6px;
                                width: 50%;
                                height: 50%;
                                border-radius: 90px;
                                background-color: #1b1e21;
                                color: white;
                                padding: 0px;
                                border: none;
                                cursor: pointer;
                            }

                            .dropbtn:hover, .dropbtn:focus {
                                background-color: #2bbb8b;
                            }

                            .dropdown {
                                position: relative;
                                display: inline-block;

                            }

                            .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #f1f1f1;
                                min-width: 200px;
                                overflow: auto;
                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                z-index: 1;
                            }

                            .dropdown-content a {
                                margin-top: 10px;
                                color: black;
                                padding: 14px 16px;
                                text-decoration: none;
                                display: block;
                            }

                            .dropdown a:hover {background-color: #7fad39;}

                            .show {display: block;}
                        </style>
                        <div class="dropdown">
                            <img  onclick="myFunction()" class="dropbtn" src="{{asset('public/server/assets/avatars/face-1.jpg')}}" alt="...">

                            <div id="myDropdown" class="dropdown-content">
                                <a href="#home"><i class="fas fa-user"></i> {{ucwords(Auth::user()->name_user)}}</a>
                                <a href="#about"><i class="fas fa-user"></i> Lịch sử mua</a>
                                <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </div>
                        <script>
                            /* When the user clicks on the button,
                            toggle between hiding and showing the dropdown content */
                            function myFunction() {
                                document.getElementById("myDropdown").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function(event) {
                                if (!event.target.matches('.dropbtn')) {
                                    var dropdowns = document.getElementsByClassName("dropdown-content");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{route('home')}}"><img src="{{asset('public/server/assets/avatars/GosCooperativehome.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('page_product')}}">Sản phẩm</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{route('page_detail_product')}}">Chi tiết sản phẩm</a></li>
                                    <li><a href="{{route('page_cart')}}">Giỏ hàng</a></li>
                                    <li><a href="{{route('page_checkout')}}">Thanh toán</a></li>
                                    <li><a href="./blog-details.html">Tin tức</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Tin tức</a></li>
                            <li><a href="./contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            {{--                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>--}}
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Tạm tính: <span>150.000 VNĐ</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    @if(Session::has('home'))
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Tất cả sản phẩm</span>
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
                                    {{--                                <div class="hero__search__categories">--}}
                                    {{--                                    All Categories--}}
                                    {{--                                    <span class="arrow_carrot-down"></span>--}}
                                    {{--                                </div>--}}
                                    <input type="text" placeholder="Bạn cần tìm gì?">
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+84 93.933.7416</h5>
                                    <span>Hỗ trợ 24/7</span>
                                </div>
                            </div>
                        </div>
                        <div class="hero__item set-bg" data-setbg="{{asset('public/client/img/hero/banner.jpg')}}">
                            <div class="hero__text">
                                <span>Trái cây tươi</span>
                                <h2>Rau quả <br />100% không thuốc trừ sâu</h2>
                                <p>Nhận và giao hàng miễn phí cho đơn từ 99k</p>
                                <a href="#" class="primary-btn">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="hero hero-normal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Tất cả sản phẩm</span>
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
                                    {{--                                <div class="hero__search__categories">--}}
                                    {{--                                    All Categories--}}
                                    {{--                                    <span class="arrow_carrot-down"></span>--}}
                                    {{--                                </div>--}}
                                    <input type="text" placeholder="Bạn cần tìm gì?">
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+84 93.933.7416</h5>
                                    <span>Hỡ trợ 24/7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif
@else
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> giang@gmail.com</li>
                                <li>Free ship cho đơn hàng từ 99k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="{{route('login')}}"><i class="fa fa-user"></i> Đăng nhập</a>
                            <a href="{{route('page_sign_up')}}"><i class="fa fa-user"></i> Đăng ký</a>
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
                        <a href="./index.html"><img src="{{asset('public/server/assets/avatars/GosCooperativehome.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('page_product')}}">Sản phẩm</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{route('page_detail_product')}}">Chi tiết sản phẩm</a></li>
                                    <li><a href="{{route('page_cart')}}">Giỏ hàng</a></li>
                                    <li><a href="{{route('page_checkout')}}">Thanh toán</a></li>
                                    <li><a href="./blog-details.html">Tin tức</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Tin tức</a></li>
                            <li><a href="./contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            {{--                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>--}}
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Tạm tính: <span>150.000 VNĐ</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    @if(Session::has('home'))
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Tất cả sản phẩm</span>
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
                                    {{--                                <div class="hero__search__categories">--}}
                                    {{--                                    All Categories--}}
                                    {{--                                    <span class="arrow_carrot-down"></span>--}}
                                    {{--                                </div>--}}
                                    <input type="text" placeholder="Bạn cần tìm gì?">
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+84 93.933.7416</h5>
                                    <span>Hỗ trợ 24/7</span>
                                </div>
                            </div>
                        </div>
                        <div class="hero__item set-bg" data-setbg="{{asset('public/client/img/hero/banner.jpg')}}">
                            <div class="hero__text">
                                <span>Trái cây tươi</span>
                                <h2>Rau quả <br />100% không thuốc trừ sâu</h2>
                                <p>Nhận và giao hàng miễn phí cho đơn từ 99k</p>
                                <a href="#" class="primary-btn">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="hero hero-normal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>Tất cả sản phẩm</span>
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
                                    {{--                                <div class="hero__search__categories">--}}
                                    {{--                                    All Categories--}}
                                    {{--                                    <span class="arrow_carrot-down"></span>--}}
                                    {{--                                </div>--}}
                                    <input type="text" placeholder="Bạn cần tìm gì?">
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                            <div class="hero__search__phone">
                                <div class="hero__search__phone__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="hero__search__phone__text">
                                    <h5>+84 93.933.7416</h5>
                                    <span>Hỡ trợ 24/7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif
@endif



