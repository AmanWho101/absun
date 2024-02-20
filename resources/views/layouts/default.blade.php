<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            | Welcome to AB Sun General Consultancy
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/custom1.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>


<style>
    .manu-and-heder {
        font-size: 1rem !important;
        font-weight: 700 !important;

        color: #090088 !important;

    }

    .manu-heder {
        margin-top: 0.7rem !important;
        font-size: 18px;
        /* color: black !important; */

    }

    .manu-heder-font {
        font-size: 15px;

    }

    .nav-bar-space {
        /* top | right | bottom | left */
        padding: 0 16px 0 16px;

    }

    .nav-size {
        max-width: 1400px !important;
    }

    .nav-manu-space {

        padding: 8px 16px 8px 16px !important;

    }

    .top-header {
        color: #0acf9e !important;
    }



    .top-header {
        color: #090088 !important;
    }

    /* .absunlogo {

        height: 80px;
    } */



    @media screen and (min-width:320px) and (max-width:566px) {

        .absunlogo {

            height: 35px;
        }
    }


    @media screen and (min-width:568px) and (max-width:812px) {

        .absunlogo {

            height: 45px;
        }
    }


    @media screen and (min-width:768px) and (max-width:834px) {

        .absunlogo {

            height: 75px;
        }
    }

    @media screen and (min-width:1024px) and (max-width:1112px) {

        .absunlogo {

            height: 30px;
        }
    }


    @media screen and (min-width:1200px) {

        .absunlogo {

            height: 80px;
        }
    }
</style>




<body>
    <!-- Header Start -->
    <header>
        <!--Icon Section Start-->
        <div class="icon-section top-header ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-8 col-md-4 manu-heder">

                        <ul class="list-inline">
                            <li>
                                <a href="#"> <i class="livicon" data-name="facebook" data-size="18"
                                        data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#"> <i class="livicon" data-name="twitter" data-size="18"
                                        data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#"> <i class="livicon" data-name="google-plus" data-size="18"
                                        data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#"> <i class="livicon" data-name="linkedin" data-size="18"
                                        data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true"
                                        data-c="#fff" data-hc="#757b87"></i>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <div class="col-lg-8 col-4 col-md-8 text-right font-weight-bolder manu-heder">
                        <ul class="list-inline">
                            <li>

                                <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block">
                                    <a href="mailto:"
                                        class="text-dark font-weight-bolder manu-heder-font">absun@gmail.com</a></label>
                            </li>

                            <li>


                                <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block">

                                    <a href="tel:" class="text-dark font-weight-bolder manu-heder-font">(+251)
                                        27 26 02 12</a></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container indexpage  nav-size">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-bar-space ">

                <a class="navbar-brand nav-bar-space" href="{{ route('home') }}">

                    <img class="absunlogo" src="{{ asset('images/AB Sun horizontal.png') }}" alt="logo"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto  margin_right ">

                        <li class="nav-item {!! Request::is('/') ? 'active' : '' !!}">
                            <a href="{{ route('home') }}" class="nav-link manu-and-heder nav-manu-space top-header">
                                Home</a>
                        </li>


                        <li class="nav-item {!! Request::is('consultants') ? 'active' : '' !!}"><a href="{{ URL::to('consultants') }}"
                                class="nav-link  manu-and-heder nav-manu-space ">consultants</a>
                        </li>


                        {{--

                        <li class=" nav-item dropdown  {!! Request::is('typography') || Request::is('advanced_features') || Request::is('grid') ? 'active' : '' !!}">
                            <a href="#" aria-expanded="false" class="nav-link">Features</a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ URL::to('typography') }}" class="dropdown-item">Typography</a>
                                </li>
                                <li><a href="{{ URL::to('advanced_features') }}" class="dropdown-item">Advanced
                                        Features</a>
                                </li>
                                <li><a href="{{ URL::to('grid') }}" class="dropdown-item">Grid System</a>
                                </li>
                            </ul>
                        </li>

                        <li class=" nav-item dropdown {!! Request::is('about_us') || Request::is('timeline') || Request::is('faq') || Request::is('blank_page')
                            ? 'active'
                            : '' !!}">
                            <a href="#" class="nav-link"> Pages</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ URL::to('about_us') }}" class="dropdown-item">About Us</a>
                                </li>
                                <li><a href="{{ URL::to('timeline') }}" class="dropdown-item">Timeline</a></li>
                                <li><a href="{{ URL::to('price') }}" class="dropdown-item">Price</a>
                                </li>
                                <li><a href="{{ URL::to('404') }}" class="dropdown-item">404 Error</a>
                                </li>
                                <li><a href="{{ URL::to('500') }}" class="dropdown-item">500 Error</a>
                                </li>
                                <li><a href="{{ URL::to('faq') }}" class="dropdown-item">FAQ</a>
                                </li>
                        </li>

                    </ul>
                    </li>

                    <li class="nav-item dropdown {!! Request::is('products') ||
                    Request::is('single_product') ||
                    Request::is('compareproducts') ||
                    Request::is('category')
                        ? 'active'
                        : '' !!}">
                        <a href="#" class="nav-link"> Shop</a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('products') }}" class="dropdown-item">Products</a>
                            </li>
                            <li><a href="{{ URL::to('single_product') }}" class="dropdown-item">Single
                                    Product</a>
                            </li>
                            <li><a href="{{ URL::to('compareproducts') }}" class="dropdown-item">Compare
                                    Products</a>
                            </li>
                            <li><a href="{{ URL::to('category') }}" class="dropdown-item">Categories</a></li>
                        </ul>

                    </li>

                    <li class="nav-item dropdown {!! Request::is('portfolio') || Request::is('portfolioitem') ? 'active' : '' !!}">
                        <a href="#" class="nav-link"> Portfolio</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('portfolio') }}">Portfolio</a>
                            </li>
                            <li><a href="{{ URL::to('portfolioitem') }}">Portfolio Item</a>
                            </li>
                        </ul>
                    </li> --}}

                        {{-- @if (Sentinel::check())
                            <li class=" nav-item dropdown {!! Request::is('user_emails/inbox') || Request::is('user_emails/compose') || Request::is('user_emails/sent')
                                ? 'active'
                                : '' !!}">
                                <a href="#" aria-expanded="false" class="nav-link"> Emails</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ URL::to('user_emails/compose') }}" class="dropdown-item">Compose</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('user_emails/inbox') }}" class="dropdown-item">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('user_emails/sent') }}" class="dropdown-item">Sent</a>
                                    </li>
                                </ul>
                            </li>
                        @endif --}}


                        <li class="nav-item {!! Request::is('news*') ? 'active' : '' !!}"><a href="{{ URL::to('news') }}"
                                class="nav-link  manu-and-heder nav-manu-space ">News</a>
                        </li>

                        <li class="nav-item {!! Request::is('blog') || Request::is('blogitem/*') ? 'active' : '' !!}"><a href="{{ URL::to('blog') }}"
                                class="nav-link  manu-and-heder nav-manu-space ">
                                Blog</a>
                        </li>

                        <li class="nav-item {!! Request::is('contact') ? 'active' : '' !!}"><a href="{{ URL::to('contact') }}"
                                class="nav-link  manu-and-heder nav-manu-space ">Contact</a>
                        </li>

                        {{-- based on anyone login or not display menu items --}}
                        @if (Sentinel::guest())
                            <li class="nav-item"><a href="{{ URL::to('admin/login') }}"
                                    class="nav-link btn btn-outline-primary me-2  manu-and-heder nav-manu-space ">Login</a>
                            </li>
                            {{-- @if (!Request::is('/')) --}}
                            <li class="nav-item  {!! Request::is('register') ? 'active ' : '' !!}"><a href="{{ URL::to('register') }}"
                                    class="nav-link  manu-and-heder nav-manu-space rounded {!! Request::is('register') ? 'btn btn-secondary' : 'btn btn-primary text-light ' !!} ">Register</a>

                                {{-- style="color: white !important;" --}}
                            </li>
                            {{-- @endif --}}
                        @else
                            <li class="nav-item {{ Request::is('my-account') ? 'active' : '' }}"><a
                                    href="{{ URL::to('admin/login') }}" class="nav-link">My
                                    Account</a>
                            </li>
                            <li class="nav-item"><a href="{{ URL::to('logout') }}" class="nav-link">Logout</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </nav>
            <!-- Nav bar End -->
        </div>
    </header>

    <!-- //Header End -->

    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')

    <!-- Footer Section Start -->
    <footer>

        <div class="container">
            <div class="footer-text">
                <ul class="nav justify-content-center border-bottom pb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
            </div>
        </div>

        <div class=" col-12 copyright">
            <div class="container ">
                <p class="text-center">Copyright &copy; AB SUN 2023</p>
            </div>
        </div>

    </footer>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"
        data-original-title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff"
            data-hc="white"></i>
    </a>



    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/lib.js') }}"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
    <script>
        $(".navbar-toggler-icon").click(function() {
            $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
        })

        $(function() {
            $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
        })
    </script>
</body>

</html>
