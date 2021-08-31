<header class="header-v3" dir="rtl">
    <div class="container-menu-desktop trans-03">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop p-l-45">
                <a href="#" class="logo">
                    <img src="{{asset('web')}}/images/icons/logo2.png" width="50" alt="IMG-LOGO">
                </a>
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="{{$title == 'home' ? 'active-menu' : ''}}">
                            <a href="{{url('/')}}">الرئيسية</a>
                        </li>
                        <li class="{{$title == 'products' ? 'active-menu' : ''}}">
                            <a href="{{url('products')}}">المنتجات</a>
                        </li>
                        <li>
                            <a href="#">الاقسام</a>
                            <ul class="sub-menu">
                                @foreach (categories() as $item)
                                    <li><a href="{{url('CategoryProducts/'.$item->id)}}">{{$item->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{$title == 'offers' ? 'active-menu' : ''}}">
                            <a href="{{url('offer')}}">العروض</a>
                        </li>
                        <li  class="{{$title == 'about' ? 'active-menu' : ''}}">
                            <a href="{{url('about')}}">نبذة عنا</a>
                        </li>
                        <li>
                            <a href="#contact">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div class="wrap-icon-header flex-w flex-r-m h-full">
                    <div class="flex-c-m h-full p-lr-19 bor6">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="wrap-header-mobile" style="background-color: #222222;">
        <div class="logo-mobile">
            <a href="{{url('/')}}"><img src="{{asset('web')}}/images/icons/logo2.png" alt="IMG-LOGO"></a>
        </div>
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"><i class="zmdi zmdi-menu" style="font-size: 55px;color: #cda45e;"></i></span>
            </span>
        </div>
    </div>
    <div class="menu-mobile">

        <ul class="main-menu-m" style="    background-color: #222222;">
            <li>
                <a href="{{url('/')}}">الرئيسية</a>
            </li>
            <li>
                <a href="#" id="show_item">الاقسام</a>
                <ul class="sub-menu main_item">
                    @foreach (categories() as $item)
                        <li><a href="{{url('CategoryProducts/'.$item->id)}}">{{$item->title}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{url('products')}}">المنتجات</a>
            </li>
            <li>
                <a href="{{url('offer')}}">العروض</a>
            </li>
            <li>
                <a href="{{url('about')}}">نبذة عنا </a>
            </li>
            <li>
                <a href="#contact">تواصل معنا</a>
            </li>
        </ul>
    </div>
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <button class="flex-c-m btn-hide-modal-search trans-04">
            <i class="zmdi zmdi-close"></i>
        </button>
        <form class="container-search-header">
            <div class="wrap-search-header">
                <input class="plh0" type="text" name="search" placeholder="Search...">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </form>
    </div>
</header>
