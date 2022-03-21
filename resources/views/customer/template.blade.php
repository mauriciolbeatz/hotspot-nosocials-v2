<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HotSpot Beenet El Salvador</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('customer/img/favicon.png')}}" rel="icon">
    <link href="{{asset('customer/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('customer/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('customer/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('customer/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('customer/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('customer/css/style.css')}}" rel="stylesheet">
    <style>
        .overlay-a {
            background: none;
        }
    </style>
    <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Registrate para navegar</h3>
        </div>

        <span class="close-box-collapse right-boxed bi bi-x"></span>
        <div class="box-collapse-wrap form">
            <div class="title-box-d">
                <center>
                    @foreach ($logo as $logos)
                    @if($logos->name == 'logo')
                    <img src="{{asset('storage/logo')}}/{{$logos->file_path}}" class="img-fluid" width="110px; " style="margin-left:-100px" alt="logo">
                    @endif
                    @endforeach
                </center>
            </div>

            <form class="form-a" method="POST" action="{{ route('addCustomer') }}">
                @csrf
                <div class="row"><br>
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <!--label class="pb-2" for="Type">Nombre</label-->
                            <input type="text" class="form-control form-control-lg form-control-a" name="name" id="name" placeholder="Ingrese su nombre">
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="form-group mt-3">
                            <!--label class="pb-2" for="Type">Telefono</label-->
                            <input type="text" class="form-control form-control-lg form-control-a" name="phone" id="phonr" placeholder="Telefono">

                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="form-group mt-3">
                            <!--label class="pb-2" for="city">Correo</label-->
                            <input type="email" class="form-control form-control-lg form-control-a" name="email" id="email" placeholder="Ingrese un correo valido">

                        </div>
                    </div>
                    <br>

                    <div class="col-md-12">
                        <center><button type="submit" class="btn btn-b" style="border-radius:25px">Crear Cuenta</button></center>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Property Search Section -->

    <!-- ======= Header/Navbar ======= -->
    @foreach($color as $colores)
    @if($colores->name == "navbarColor")
    <nav style="background-color: {{$colores->color}};" class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        @endif
        @endforeach
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <a class="navbar-brand text-brand" href="index.html">
                @foreach ($logo as $logos)
                @if($logos->name == 'logo')
                <img src="{{asset('storage/logo')}}/{{$logos->file_path}}" class="img-fluid" width="65em" height="65em" alt="logo">
                @endif
                @endforeach
            </a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">


                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" style="border-radius:25px;">
                <h6>Crear cuenta</h6>
            </button>

        </div>
    </nav>
    <!-- End Header/Navbar -->

    <!-- ======= Intro Section ======= -->
    @foreach($color as $colores)
    @if($colores->name == "bodyColor")
    <div style="background-color: {{$colores->color}};">
        @endif
        @endforeach
        <div class="intro intro-carousel swiper position-relative">

            <div class="swiper-wrapper">

                @foreach($image as $imagenes)
                @if($imagenes->name == "introcarousel1")
                <div class="swiper-slide carousel-item-a intro-item bg-image " style="background-image: url({{asset('storage/slider/')}}/{{$imagenes->file_path}}">
                    @endif
                    @endforeach
                    <div class="overlay overlay-a"></div>
                    <div class="intro-content display-table">

                    </div>
                </div>
                @foreach($image as $imagenes)
                @if($imagenes->name == "introcarousel2")
                <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{asset('storage/slider/')}}/{{$imagenes->file_path}}">
                    @endif
                    @endforeach
                    <div class="overlay overlay-a"></div>
                    <div class="intro-content display-table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($image as $imagenes)
                @if($imagenes->name == "introcarousel3")
                <div class="swiper-slide carousel-item-a intro-item bg-image " style="background-image: url({{asset('storage/slider/')}}/{{$imagenes->file_path}}">
                    @endif
                    @endforeach
                    <div class="overlay overlay-a"></div>

                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- End Intro Section -->

        <main id="main">



            <!-- ======= Latest Properties Section ======= -->
            <section class="section-property section-t8">
                <div class="container">


                    <div id="property-carousel" class="swiper">
                        <div class="swiper-wrapper">

                            <div class="carousel-item-b swiper-slide">
                                <div class="card-box-a card-shadow">
                                    <div class="img-box-a">
                                        @foreach($image as $imagenes)
                                        @if($imagenes->name == "secondcarousel1")
                                        <img style="width: 50em;" src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                                        @endif
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                            <!-- End carousel item -->

                            <div class="carousel-item-b swiper-slide">
                                <div class="card-box-a card-shadow">
                                    @foreach($image as $imagenes)
                                    @if($imagenes->name == "secondcarousel2")
                                    <img style="width: 50em;" src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                                    @endif
                                    @endforeach

                                </div>
                            </div>
                            <!-- End carousel item -->

                            <div class="carousel-item-b swiper-slide">
                                <div class="card-box-a card-shadow">
                                    <div class="img-box-a">
                                        @foreach($image as $imagenes)
                                        @if($imagenes->name == "secondcarousel3")
                                        <img style="width: 50em;" src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End carousel item -->


                            <!-- End carousel item -->
                        </div>
                    </div>
                    <div class="propery-carousel-pagination carousel-pagination"></div>

                </div>
            </section>
            <!-- End Latest Properties Section -->


            <!-- ======= Testimonials Section ======= -->


            <div id="testimonial-carousel" class="swiper">
                <div class="swiper-wrapper">

                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-img">
                                        @foreach($image as $imagenes)
                                        @if($imagenes->name == "longcarousel1")
                                        <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            @foreach($image as $imagenes)
                                            @if($imagenes->name == "longcarousel1")
                                            {{$imagenes->text}}
                                            @endif
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        @foreach($image as $imagenes)
                                        @if($imagenes->name == "longcarousel1")
                                        <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="testimonial-avatar">
                                        @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->

                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    @foreach($image as $imagenes)
                                    @if($imagenes->name == "longcarousel2")
                                    <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            @foreach($image as $imagenes)
                                            @if($imagenes->name == "longcarousel2")
                                            {{$imagenes->text}}
                                            @endif
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        @foreach($image as $imagenes)
                                        @if($imagenes->name == "longcarousel2")
                                        <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="testimonial-avatar">
                                        @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->

                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    @foreach($image as $imagenes)
                                    @if($imagenes->name == "longcarousel3")
                                    <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            @foreach($image as $imagenes)
                                            @if($imagenes->name == "longcarousel3")
                                            {{$imagenes->text}}
                                            @endif
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        @foreach($image as $imagenes)
                                        @if($imagenes->name == "longcarousel3")
                                        <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="testimonial-avatar">
                                        @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel item -->

                </div>
            </div>
            <div class="testimonial-carousel-pagination carousel-pagination"></div>

    </div>
    </section>
    <!-- End Testimonials Section -->


    <!-- ======= Latest News Section ======= -->

    @foreach($color as $colores)
    @if($colores->name == "bodyColor")
    <div style="background-color: {{$colores->color}};">
        @endif
        @endforeach



        <div id="news-carousel" class="swiper">
            <div class="swiper-wrapper">

                <div class="carousel-item-c swiper-slide">
                    <div class="card-box-b card-shadow news-box" width="225px">
                        <div class="img-box-b">
                            @foreach($image as $imagenes)
                            @if($imagenes->name == "footercarousel1")
                            <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                            @endif
                            @endforeach
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">House</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">House is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End carousel item -->

                <div class="carousel-item-c swiper-slide">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            @foreach($image as $imagenes)
                            @if($imagenes->name == "footercarousel2")
                            <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                            @endif
                            @endforeach
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Travel</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Travel is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End carousel item -->

                <div class="carousel-item-c swiper-slide">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            @foreach($image as $imagenes)
                            @if($imagenes->name == "footercarousel3")
                            <img src="{{asset('storage/slider/')}}/{{$imagenes->file_path}}" alt="" class="img-a img-fluid">
                            @endif
                            @endforeach
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Park</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Park is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End carousel item -->


                <!-- End carousel item -->

            </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
    </div>
    </section>
    <!-- End Latest News Section -->
    </div>


    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @foreach($color as $colores)
    @if($colores->name == "footerColor")
    <footer style="background-color: {{$colores->color}};">
        @endif
        @endforeach
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">B-Pro Innovaciones</span> All Rights Reserved.
                        </p>

                    </div>
                </div>
            </div>
    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('customer/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('customer/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('customer/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('customer//js/main.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>