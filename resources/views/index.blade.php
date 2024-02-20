<style>
    /* hero section
 */

    :root {
        --blue: #14d0f0e6;
        --pink: rgba(255, 131, 195, 0.4);
        --white: rgba(255, 255, 255, 0.9);
    }

    /*  body {
        font: 100%;
    } */


    .background {
        background-image: url(https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D );
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #252746;
        background-position: center;
        width: 100vw;
        height: 80vh;
        position: absolute;
        z-index: 0;
        top: 0;
        left: 0;
    }


    .background-texture {
        /* background: linear-gradient(to top,
                rgba(126, 77, 217, 0.702),
                hsl(0, 0%, 100%)); */

        background: linear-gradient(90deg in hsl longer, rgb(255, 255, 255), #0900882e);

        background-size: cover;
        width: 100vw;
        height: 80vh;
        position: absolute;
        z-index: 0;
        top: 0;
        left: 0;



    }


    .header {
        width: 100%;
        height: 50px;
        height: 80vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 1;
    }

    .left-content {
        padding-left: 70px !important;
    }


    .stay-home {
        font-size: 1.6rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 0;
        font-weight: 500;
        color: #8b64b4;
    }


    .hedline {
        margin: 0 0 0.4rem 0;
        font-weight: 1000 !important;
        font-size: 80px !important;
        text-transform: uppercase;
        color: #3b365e;
    }

    .para {
        color: #000000cb;
        font-size: 1.2rem !important;
        width: 70ch;
        font-weight: 500;
    }

    /*     button {
        text-transform: uppercase !important;
        letter-spacing: 0.2rem;
        font-size: 1rem;
    } */

    .btnz {
        background: #007bff;
        padding: 27px 44px;
        text-transform: uppercase;
        /* font-family: "Roboto", sans-serif; */
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 14 px;
        border-radius: 0px;
        -moz-user-select: none;
        font-weight: 500;
        letter-spacing: 1px;
        line-height: 0;
        margin-bottom: 0;
        margin: 10px;
        cursor: pointer;
        transition: color 0.4s linear;
        position: relative;
        z-index: 1;
        border: 0;
        overflow: hidden;
        margin: 0;
    }

    /* line 279, C:/Users/HP/Desktop/264.Business_HTML/HTML/assets/scss/_common.scss */
    .btnz::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 101%;
        height: 101%;
        background: #fff;
        color: #000 !important;
        z-index: 1;
        transition: transform 0.5s;
        transition-timing-function: ease;
        transform-origin: 0 0;
        transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
        transform: scaleX(0);
        border-radius: 0;
    }

    /* line 298, C:/Users/HP/Desktop/264.Business_HTML/HTML/assets/scss/_common.scss */
    .btnz:hover::before {
        transform: scaleX(1);
        color: #000000 !important;
        z-index: -1;

    }


    .btnz:hover {
        color: #000;
        text-decoration: none;
    }

    .tab-content {

        background-color: #f2eded !important;
    }
</style>

@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Home
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/owl_carousel/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/index.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--end of page level css-->




@stop
<style>
    #toside {}
</style>
{{-- slider --}}
@section('top')
    <!--Carousel Start -->
    <div id="owl-demo">
        <div class="item">
            <div class="background"></div>
            <div class="background-texture"></div>
            <header class="header">
                <div class="left-content">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7 col-md-8 col-sm-6">
                                <div class="hero__caption">

                                    <p class="stay-home">We are AB Sun! Let's work together!!</p>
                                    <h1 class="   hedline">We help to grow your business.</h1>
                                    <p class="para">
                                        AB Sun General Consultant is a leader in providing consulting worldwide in a
                                        multidisciplinary. We have extensive expertise in helping your institutions and
                                        industry to achieve compliance as per national regulations.
                                    </p>

                                    <a href="{{ URL::to('register') }}" class="btnz">Register Now</a>

                                    {{-- <button type="button" class="btnz ">consultants</button> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

        </div>

    </div>
    <!--<script src="main.js"></script>-->





    {{--     <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item img-fluid">

            <img src="{{ asset('images/slide_1.jpg') }}" alt="slider-image" />

        </div>

        <div class="item img-fluid">

            <img src="{{ asset('images/slide_2.jpg') }}" alt="slider-image">

        </div>

        <div class="item img-fluid">
            <img src="{{ asset('images/slide_4.png') }}" alt="slider-image">
        </div>

    </div> --}}

    <!-- //Carousel End -->

@stop

{{-- content --}}
@section('content')

    {{--   <div class="container">
          <section class="purchas-main">
            <div class="container bg-border wow pulse" data-wow-duration="2.5s">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-12 col-lg-8">
                        <h1 class="purchae-hed mt-3">Excellent admin template for laravel</h1>
                    </div>
                    <div class="col-md-5 col-sm-12 col-12 col-lg-4"><a href="#"
                            class="btn purchase-styl float-lg-right">Purchase
                            now</a></div>
                </div>
            </div>
        </section> --}}




    {{--  <div class="container">

        <!-- Service Section Start-->
        <div class="row">
            <!-- Responsive Section Start -->
            <div class="col-12 text-center my-3">
                <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Our Services</span></h3>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 wow bounceInLeft" data-wow-duration="3.5s">
                <div class="box">
                    <div class="box-icon">
                        <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#01bc8c"
                            data-hc="#01bc8c"></i>
                    </div>
                    <div class="info">
                        <h3 class="success text-center">Responsive</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam
                            aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi
                            dolorem
                            architecto perferendis quas aperiam debitis dolor soluta!</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Responsive Section End -->


            <!-- Easy to Use Section Start -->
            <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.4s">
                <!-- Box Start -->
                <div class="box">
                    <div class="box-icon box-icon1">
                        <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true" data-c="#418bca"
                            data-hc="#418bca"></i>
                    </div>
                    <div class="info">
                        <h3 class="primary text-center">Easy to Use</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam
                            aspernatur
                            corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                            architecto perferendis quas aperiam debitis dolor soluta!.</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Easy to Use Section End -->

            <!-- Clean Design Section Start -->
            <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.8s">
                <div class="box">
                    <div class="box-icon box-icon2">
                        <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14"
                            data-hc="#f89a14"></i>
                    </div>
                    <div class="info">
                        <h3 class="warning text-center">Clean Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam
                            aspernatur
                            corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                            architecto perferendis quas aperiam debitis dolor soluta!</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Clean Design Section End -->

            <!-- 20+ Page Section Start -->
            <div class="col-sm-6 col-md-6 col-lg-3 col-12  wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.2s">
                <div class="box">
                    <div class="box-icon box-icon3">
                        <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true" data-c="#FFD43C"
                            data-hc="#FFD43C"></i>
                    </div>
                    <div class="info">
                        <h3 class="yellow text-center">20+ Pages</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam
                            aspernatur
                            corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem
                            architecto perferendis quas aperiam debitis dolor soluta!</p>
                        <div class="text-right primary"><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //20+ Page Section End -->
        </div>
        <!-- //Services Section End -->
    </div> --}}



    <section class="">

        <div class="container my-3">

            <!-- Service Section Start-->
            <div class="row">
                <!-- Responsive Section Start -->
                <div class="col-12 text-center my-3">
                    <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">About Us</span></h3>
                </div>



                {{--     about section start --}}


                <div class="col-md-12  col-lg-6 col-12 wow bounceInLeft" data-wow-duration="3s"
                    style="visibility: visible; animation-duration: 1.5s; animation-name: bounceInLeft;">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div id="owl-demo">
                                <div class="" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">

                                        <div class="row ">

                                            <div class="owl-item" style="width: 540px; ">
                                                <div class="item ">

                                                    <img src="{{ asset('images/img_b3.jpg') }}" alt="slider-image"
                                                        class="border border-warning img-fluid rounded" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Slider Section End -->

                <!-- Project Description Section Start -->
                <div class="col-md-12 col-lg-6 col-12 wow bounceInRight" data-wow-duration="3s"
                    style="visibility: visible;

                 animation-duration: 1.5s;

                animation-name: bounceInRight;">

                    <h3>Our vision for growth </h3>
                    <p class="text-justify  lead" style="font-weight: 400">
                        “At AB Sun Consulting, we are engaged in continuous occupational and institute
                        growth. Also, invest in long-term relationships with clients and partners. Long-term loyalty is an
                        extremely important value in our profession.
                        As a multidisciplinary team, we support our patrons to grow within the nation and across national
                        borders. We always focus on quality service and are constantly available to consultants and clients.
                        We
                        want to grow together with our consultants and clients.”

                    </p>

                </div>

                {{--     about section ends --}}

            </div>
            <!-- //Services Section End -->
        </div>

    </section>

    <!-- Vision Mission Core Values  Section Start -->


    <section class="feature-main">

        <div class="container marketing">


            <div class="row">




                <!-- What we are Start -->

                <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInLeft" data-wow-duration="3s"
                    style="visibility: visible; animation-duration: 3s;">
                    <div class="text-left">
                        <div class="mt-2">
                            <h4 class="border-warning"><span class="heading_border bg-warning">Vision</span></h4>
                        </div>
                    </div>
                    <img src="http://127.0.0.1:8000/images/image_12.jpg" alt="image_12" class="img-fluid">
                    <p>
                        To become the prime international consultant to support the clients and community to improve
                        businesses and lifestyle.
                    </p>

                </div>
                <!-- //What we are End -->

                <!-- About Us Start -->
                <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInRight" data-wow-duration="3s"
                    style="visibility: visible; animation-duration: 3s;">

                    <div class="text-left">
                        <div class="mt-2">
                            <h4 class="border-success"><span class="heading_border bg-success">Mission</span></h4>
                        </div>
                    </div>


                    <img src="http://127.0.0.1:8000/images/image_11.jpg" alt="image_11" class="img-fluid">
                    <p>
                        To assist our clients and community to design and implement customized practical solutions in
                        improving the performance of their businesses and life style within
                    </p>
                </div>
                <!-- //About Us End -->


                <div class="col-lg-12 col-md-6 col-sm-12 col-12 wow slideInLeft" data-wow-duration="1.5s"
                    style="visibility: visible;
                    animation-duration: 1.5s;">

                    <!-- Tabbable-Panel Start -->
                    <div class="text-left">
                        <div class="mt-2">
                            <h4 class="border-success"><span class="heading_border bg-dark ">Core Values</span></h4>
                        </div>
                    </div>
                    <p>
                        Our core values are what we live, breathe and reflect in all our daily activities and the way we
                        choose to grow and manage our business in alignment with our vision and mission.
                    </p>



                    <!-- Service Section Start-->
                    <div class="row">
                        <!-- Responsive Section Start -->

                        {{--  <div class="col-12 text-center my-3">
                            <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Our
                                    Services</span></h3>
                        </div> --}}


                        <div class="col-sm-6 col-md-6 col-lg-4 wow bounceInLeft" data-wow-duration="3.5s">
                            <div class="box">
                                <div class="box-icon">
                                    <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true"
                                        data-c="#01bc8c" data-hc="#01bc8c"></i>
                                </div>
                                <div class="info">
                                    <h3 class="success text-center">Integrity</h3>
                                    <p>Acting with honesty and integrity without compromising code of professional and work
                                        ethics</p>

                                </div>
                            </div>
                        </div>
                        <!-- //Responsive Section End -->

                        <div class="col-sm-6 col-md-6 col-lg-4 wow bounceInLeft" data-wow-duration="3.5s">
                            <div class="box">
                                <div class="box-icon">
                                    <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true"
                                        data-c="#01bc8c" data-hc="#01bc8c"></i>
                                </div>
                                <div class="info">
                                    <h3 class="success text-center">Passion</h3>
                                    <p>Committing our hearts and minds to give our best at all times and to create impactful
                                        added value</p>

                                </div>
                            </div>
                        </div>

                        <!-- Easy to Use Section Start -->
                        <div class="col-sm-6 col-md-6  col-lg-4 col-12 wow bounceInDown" data-wow-duration="3s"
                            data-wow-delay="0.4s">
                            <!-- Box Start -->
                            <div class="box">
                                <div class="box-icon box-icon1">
                                    <i class="livicon icon1" data-name="gears" data-size="55" data-loop="true"
                                        data-c="#418bca" data-hc="#418bca"></i>
                                </div>
                                <div class="info">
                                    <h3 class="primary text-center">Fun</h3>
                                    <p>Enjoying the learning and development experiences as a team.</p>

                                </div>
                            </div>
                        </div>
                        <!-- //Easy to Use Section End -->

                        <!-- Clean Design Section Start -->
                        <div class="col-sm-6 col-md-6  col-lg-6 col-12 wow bounceInUp" data-wow-duration="3s"
                            data-wow-delay="0.8s">
                            <div class="box">
                                <div class="box-icon box-icon2">
                                    <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true"
                                        data-c="#f89a14" data-hc="#f89a14"></i>
                                </div>
                                <div class="info">
                                    <h3 class="warning text-center">Collaboration</h3>
                                    <p>Giving due respect to self and others and maintaining the environment of teamwork and
                                        positive relationships</p>

                                </div>
                            </div>
                        </div>
                        <!-- //Clean Design Section End -->

                        <!-- 20+ Page Section Start -->
                        <div class="col-sm-6 col-md-6 col-lg-6 col-12  wow bounceInRight" data-wow-duration="5s"
                            data-wow-delay="1.2s">
                            <div class="box">
                                <div class="box-icon box-icon3">
                                    <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true"
                                        data-c="#FFD43C" data-hc="#FFD43C"></i>
                                </div>
                                <div class="info">
                                    <h3 class="yellow text-center">Practicality</h3>
                                    <p>Adopting an innovative and practical approach in our design of customized solutions
                                        to ensure that these are easy to manage and implement</p>

                                </div>
                            </div>
                        </div>
                        <!-- //20+ Page Section End -->
                    </div>
                    <!-- //Services Section End -->
                    <!-- Tabbable_panel End -->
                </div>

            </div>

        </div>
    </section>


    <!-- Vision Mission Core Values Section End -->



    <!-- Layout Section Start -->


    <section class=" ">
        <div class="container">
            <div class="text-center col-12 wow flash my-3" data-wow-duration="3s">
                <h3 class="border-success"><span class="heading_border bg-success">Consultants</span></h3>
                <h4 class=" text-center pb-4 pt-2">Why AB SUN Consulting?</h4>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-12 col-lg-8 wow zoomIn" data-wow-duration="2s">
                    <div class="layout-image">
                        <img src="{{ asset('images/layout.png') }}" alt="layout" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-12 wow lightSpeedIn" data-wow-duration="2s">
                    <ul class="list-unstyled  text-right layout-styl">
                        <li class="">
                            <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                                data-hc="#01bc8c"></i> Consultancy Rocks
                        </li>
                        <li>
                            <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                                data-hc="#01bc8c"></i> User friendly
                        </li>
                        <li>
                            <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                                data-hc="#01bc8c"></i> Develop Your Talents
                        </li>
                        <li>
                            <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                                data-hc="#01bc8c"></i> We Invest In Your Well-Being
                        </li>
                        <li>
                            <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                                data-hc="#01bc8c"></i> We Are a Great Place to Work
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- //Layout Section Start -->



    <!-- Accordions Section End -->

    {{-- <div class="container">

        <div class="row">
            <!-- Accordions Start -->
            <div class="text-center col-12 wow flash my-3" data-wow-duration="3s">
                <h3 class="border-success"><span class="heading_border bg-success">Accordions</span></h3>
                <label class=" text-center"> Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.</label>
            </div>
            <!-- Accordions End -->
            <div class="col-md-6 col-sm-12  col-lg-6 col-12 wow slideInLeft" data-wow-duration="1.5s">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel1 index">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="nav-item ">
                                <a href="#tab_default_1" data-toggle="tab" class="nav-link active">
                                    Web </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab_default_2" data-toggle="tab" class="nav-link">
                                    Html 5 </a>
                            </li>
                            <li class="clear_both nav-item">
                                <a href="#tab_default_3" data-toggle="tab" class="nav-link">
                                    CSS 3 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab_default_4" data-toggle="tab" class="nav-link">
                                    Bootstrap </a>
                            </li>
                        </ul>
                        <hr class="horizontalline">
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="media">
                                    <div class="media-left tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-fluid"
                                                src="{{ asset('images/authors/img1.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Metrics business-to-business beta bootstrapping virality graphical user interface
                                    infrastructure conversion launch party long tail. Strategy virality validation
                                    bandwidth
                                    creative low hanging fruit long tail startup gen-z business plan technology.
                                    Strategy
                                    termsheet venture stealth non-disclosure agreement accelerator research &
                                    development
                                    scrum project product management freemium infographic business plan.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-fluid"
                                                src="{{ asset('images/authors/img2.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Branding iteration conversion market sales advisor holy grail entrepreneur backing.
                                    Gen-z non-disclosure agreement holy grail business-to-consumer disruptive deployment
                                    marketing channels seed money seed round ramen pivot social proof. Venture creative
                                    metrics focus A/B testing crowdfunding. IPhone scrum project user experience
                                    freemium
                                    interaction design long tail stealth ownership hackathon crowdfunding investor.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-fluid"
                                                src="{{ asset('images/authors/img3.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Beta analytics startup direct mailing leverage learning curve
                                    www.discoverartisans.com
                                    business-to-consumer. IPad metrics channels pivot deployment business plan android
                                    burn
                                    rate hackathon vesting period research & development launch party user experience.
                                    Seed
                                    round freemium value proposition learning curve series A financing funding research
                                    &
                                    development crowdsource.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-fluid"
                                                src="{{ asset('images/authors/img4.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Paradigm shift twitter pitch research & development venture. Startup partnership
                                    www.discoverartisans.com supply chain crowdsource hackathon metrics paradigm shift
                                    interaction design influencer holy grail first mover advantage ramen validation.
                                    User
                                    experience founders burn rate learning curve infographic leverage gen-z supply chain
                                    first mover advantage.
                                </p>
                            </div>
                        </div>
                        <!-- Tab-content End -->
                    </div>
                    <!-- //Tabbablw-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 wow slideInRight" data-wow-duration="3s">
                <div id="accordion">
                    <div class="card mb-2">
                        <div class="card-header p-0" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-minus success"></i>
                                    <span class="success">Why Choose Us</span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header p-0" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-plus success"></i>
                                    <span class="success">Why Choose Us</span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                    ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header p-0" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-plus success"></i>
                                    <span class="success">Why Choose Us</span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it
                                    squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica,
                                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                    synth
                                    nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- //Accordions Section End -->


    <!-- Our Team Start -->
    <div class="container">
        <div class="row text-center">
            <div class="col-12 my-3">
                <h3 class="border-danger "><span class="heading_border bg-danger">Our Team</span></h3>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6 col-sm-6 col-12 col-lg-3 profile wow fadeInLeft" data-wow-duration="3s"
                data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('images/img_3.jpg') }}" alt="team-image" class="img-fluid">
                    <div class="caption">
                        <b>John Doe</b>
                        <p class="text-center">Founder & Partner</p>
                        <div class="divide">
                            <a href="#" class="divider">
                                <i class="livicon" data-name="facebook" data-size="22" data-loop="true"
                                    data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                    data-hc="#55acee"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="google-plus" data-size="22" data-loop="true"
                                    data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="linkedin" data-size="22" data-loop="true"
                                    data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInUp" data-wow-duration="3s"
                data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('images/img_5.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Francina Steinberg</b>
                        <p class="text-center"> CEO </p>
                        <div class="divide">
                            <a href="#" class="divider">
                                <i class="livicon" data-name="facebook" data-size="22" data-loop="true"
                                    data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                    data-hc="#55acee"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="google-plus" data-size="22" data-loop="true"
                                    data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="linkedin" data-size="22" data-loop="true"
                                    data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInDown" data-wow-duration="3s"
                data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('images/img_4.jpg') }}" alt="team-image" class="img-fluid">
                    <div class="caption">
                        <b>Audrey Sheldon</b>
                        <p class="text-center"> Executive Manager </p>
                        <div class="divide">
                            <a href="#" class="divider">
                                <i class="livicon" data-name="facebook" data-size="22" data-loop="true"
                                    data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                    data-hc="#55acee"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="google-plus" data-size="22" data-loop="true"
                                    data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="linkedin" data-size="22" data-loop="true"
                                    data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInRight" data-wow-duration="3s"
                data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('images/img_6.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Sam Bellows</b>
                        <p class="text-center"> Manager </p>
                        <div class="divide">
                            <a href="#" class="divider">
                                <i class="livicon" data-name="facebook" data-size="22" data-loop="true"
                                    data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee"
                                    data-hc="#55acee"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="google-plus" data-size="22" data-loop="true"
                                    data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#">
                                <i class="livicon" data-name="linkedin" data-size="22" data-loop="true"
                                    data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- //Our Team End -->
        <!-- What we are section Start -->

        {{--  <div class="row">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInLeft" data-wow-duration="3s">
                <div class="text-left">
                    <div class="mt-2">
                        <h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>
                    </div>
                </div>
                <img src="{{ asset('images/image_12.jpg') }}" alt="image_12" class="img-fluid">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-right primary my-2"><a href="#">Read more</a>
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6 col-lg-6 col-12 wow zoomInRight" data-wow-duration="3s">
                <div class="text-left">
                    <div class="mt-2">
                        <h4 class="border-success"><span class="heading_border bg-success">About Us</span></h4>
                    </div>
                </div>
                <img src="{{ asset('images/image_11.jpg') }}" alt="image_11" class="img-fluid">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-right primary my-2"><a href="#">Read more</a>
            </div>
            <!-- //About Us End -->
        </div> --}}

        <!-- //What we are section End -->
        <!-- Testimonial Start -->
        <div class="row">
            <!-- Testimonial Section -->
            <div class=" col-12 text-center mt-3">
                <h3 class="border-primary"><span class="heading_border bg-primary">Testimonials</span></h3>
            </div>
            <div class="col-md-4  col-lg-4 col-12 wow bounceInLeft" data-wow-duration="3s">
                <div class="author">
                    <img src="{{ asset('images/authors/avatar3.jpg') }}" alt="avatar3"
                        class="img-fluid rounded-circle float-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4  col-12 col-lg-4 wow bounceIn" data-wow-duration="3s">
                <div class="author">
                    <img src="{{ asset('images/authors/avatar2.jpg') }}" alt="avatar2"
                        class="img-fluid rounded-circle float-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4  col-lg-4 col-12 wow bounceInRight" data-wow-duration="3s">
                <div class="author">
                    <img src="{{ asset('images/authors/avatar4.jpg') }}" alt="avatar4"
                        class="img-fluid rounded-circle float-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <!-- Testimonial Section End -->
        </div>
        <!-- Testimonial End -->
        <!-- Features Start -->


        {{--         <div class="row features">
            <!--<div class="text-center">-->
            <div class=" col-12 text-center my-3">
                <h3 class="border-warning"><span class="heading_border bg-warning">Features</span></h3>
            </div>
            <!--</div>-->
            <div class="col-md-4 col-sm-4 col-lg-4 col-12 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
                <div>
                    <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true"
                            data-c="#25a3d8" data-hc="#25a3d8"></i></a>
                    <h4>Responsive Design</h4>
                </div>
                <div>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true"
                            data-c="#ef8424 " data-hc="#ef8424 "></i>
                    </a>
                    <h4>Html 5</h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-4  col-12 wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.5s">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true"
                            data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </a>
                    <h4>Unique Design</h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true"
                            data-c="#1360b3 " data-hc="#1360b3 "></i>
                    </a>
                    <h4>Css</h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 col-12 wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true"
                            data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </a>
                    <h4>Clean Design</h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true"
                            data-c="#91d659 " data-hc="#91d659 "></i>
                    </a>
                    <h4>Bootstrap</h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
        </div> --}}


        <!-- //Features End -->
        <!-- Our Skills Start -->

        <div class=" col-12 text-center my-3 marbtm10">
            <h3 class="border-danger"><span class="heading_border bg-danger">Recent News</span></h3>
        </div>
    </div>
    <!--</div>-->

    <div class="sliders">
        <!-- Our skill Section start -->
        <div class="container">

            <div class="row post-items ekit-blog-posts-content">

                <div class="col-md-3 col-sm-6 col-lg-4 col-12  wow zoomIn">

                    <div class="card box-shadow" style="width: 20rem;">
                        <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18cb3d8fac2%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18cb3d8fac2%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1937484741211%22%20y%3D%2296.24000034332275%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                            data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">

                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="">Germany Basks in 4th World Cup After 24-Year Wait</a>
                            </h5>

                            <div class="mb-1 text-muted">Nov 12</div>

                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more..</a>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-lg-4 col-12 wow zoomIn">

                    <div class="card box-shadow" style="width: 20rem;">
                        <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18cb3d8fac2%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18cb3d8fac2%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1937484741211%22%20y%3D%2296.24000034332275%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                            data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">

                        <div class="card-body">


                            <h5 class="card-title">
                                <a href="">Germany Basks in 4th World Cup After 24-Year Wait</a>
                            </h5>

                            <div class="mb-1 text-muted">Nov 12</div>

                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more..</a>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-lg-4 col-12 wow zoomIn ">

                    <div class="card box-shadow" style="width: 20rem;">
                        <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                            src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18cb3d8fac2%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18cb3d8fac2%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1937484741211%22%20y%3D%2296.24000034332275%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                            data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">

                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="">Germany Basks in 4th World Cup After 24-Year Wait</a>
                            </h5>

                            <div class="mb-1 text-muted">Nov 12</div>

                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more..</a>

                        </div>

                    </div>
                </div>

            </div>
            <!-- Our skills Section End -->
        </div>
        <!-- //Our Skills End -->
    </div>
    <!-- //Container End -->


































@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/frontend/index.js') }}"></script>
    <!--page level js ends-->
    {{-- cdn --}}

    {{--     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script> --}}


@stop
