<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirmtuition | Largest platform to find tutor & tuitions online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="icon" href="{{asset('public/frontend/asset/images/confirm.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('public/frontend/asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/asset/css/feather.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/asset/css/fontawesome/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/asset/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/asset/css/splide.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/asset/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/asset/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/asset/css/custom.css')}}">
    <script src="{{asset('public/frontend/asset/js/vendor/jquery.min.js')}}"></script>
</head>

<body>
    <!-- Preloader Start -->
    <!-- <div class="tu-preloader">
        <div class="tu-preloader_holder">
            <img src="{{asset('public/frontend/asset/images/confirm.jpg')}}" alt="laoder img">
            <div class="tu-loader"></div>
        </div>
    </div> -->
    <!-- Preloader End -->
    <!-- HEADER START -->
    <header class="tu-header">
        <nav class="navbar navbar-expand-xl tu-navbar">
            <div class="container">
                <strong>
                    <a class="navbar-brand p-0" href="{{url('/')}}"><img
                            src="{{asset('public/frontend/asset/images/confirm.jpg')}}" style="height:78px;"
                            alt="Logo"></a>
                </strong>
                <button class="tu-menu" aria-label="Main Menu" data-bs-target="#navbarSupportedContent"
                    data-bs-toggle="collapse">
                    <i class="icon icon-menu"></i>
                </button>
                <div class="collapse navbar-collapse tu-themenav" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">
                                Registration
                            </a>
                        </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="search-listing.html">
                                Available Tuitions
                            </a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile')}}">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
                @auth
                <!-- <ul class="nav-item tu-afterlogin">
                    <li class="menu-item-has-children">
                        <strong><a class="nav-link" href="javascript:void(0);"><img
                                    src="{{asset('public/frontend/asset/images/login.png')}}" alt="image-description">
                                <span class="profile-name">{{auth()->user()->name}}</span>
                            </a></strong>
                        <ul class="sub-menu">
                            <li>
                                <a href="profile-setting-a.html"><i class="icon icon-user"></i>Personal details</a>
                            </li>
                            <li>
                                <a href="profile-setting-b.html"><i class="icon icon-phone"></i>Contact details</a>
                            </li>
                            <li>
                                <a href="profile-setting-c.html"><i class="icon icon-book"></i>Education</a>
                            </li>
                            <li>
                                <a href="profile-setting-d.html"><i class="icon icon-book-open"></i>Subjects I can
                                    teach</a>
                            </li>
                        </ul>
                    </li>
                </ul> -->
                @endauth
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- FOOTER START -->
    <footer>
        <div class="tu-footerdark">
            <div class="container" style="padding-bottom: 60px;">
                <div class="row">
                    <div class="col-lg-7">
                        <strong class="tu-footerlogo">
                            <a href="index.html"><img src="{{asset('public/frontend/asset/images/confirm.jpg')}}"
                                    style="height:80px" alt="Logo"></a>
                        </strong>
                        <ul class="tu-socialmedia">
                            <li class="tu-facebookv3"><a href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="tu-youtubev3"><a href="https://youtube.com/?lang=en" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                            <li class="tu-linkedinv3"><a href="https://www.linkedin.com/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <h5 class="tu-footertitle">Feel free to share your question</h5>
                        <ul class="tu-footerlist tu-footericonlist">
                            <li><a href="tel:01795094777"><i class="icon icon-phone-call"></i><em>01795-094777</em></a></li>
                            <li><a href="mailto:confirmtm@gmail.com"><i
                                        class="icon icon-mail"></i><em>confirmtm@gmail.com</em></a></li>
                            <li><a href="tel:01795094777"><i class="fab fa-whatsapp"></i><em>01795-094777</em></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tu-footercopyright">
                <div class="container">
                    <div class="tu-footercopyright_content">
                        <p class="w-100 text-center">Copyright © 2023 Confirmtuition. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
    <!-- Custom Tooltip Render Here -->
    <div class="tu-tippysm">
        <span id="tu-verifed" class="d-none">
            <span class="tu-tippytooltip">
                <span>Verified</span>
            </span>
        </span>
    </div>
    <!-- Custom Tooltip Render Here -->

    <script src="{{asset('public/frontend/asset/js/vendor/popper-core.js')}}"></script>
    <script src="{{asset('public/frontend/asset/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/asset/js/vendor/appear.js')}}"></script>
    <script src="{{asset('public/frontend/asset/js/vendor/countTo.js')}}"></script>
    <script src="{{asset('public/frontend/asset/js/vendor/splide.min.js')}}"></script>
    <!-- <script src="{{asset('public/frontend/asset/js/vendor/select2.min.js')}}"></script> -->
    <script src="{{asset('public/frontend/asset/js/vendor/tippy.js')}}"></script>
    <script src="{{asset('public/frontend/asset/js/vendor/typed.min.js')}}"></script>
    <script src="{{asset('public/frontend/asset/js/main.js')}}"></script>
</body>

</html>