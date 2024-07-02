<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ekimex OU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/ekimex/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/ekimex/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/ekimex/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/ekimex/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/ekimex/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/ekimex/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/ekimex/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/ekimex/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/ekimex/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/ekimex/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Bethany
    * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="header-container d-flex align-items-center justify-content-between">
            <div class="logo">
{{--                <h1 class="text-light"><a href="index.html"><span>Ekimex OU</span></a></h1>--}}
                <!-- Uncomment below if you prefer to use an image logo -->
                <a class="scrollto" href="#hero"><img src="{{asset('/ekimex/assets/img/Monochrome on transparent.png')}}" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
                    <li><a class="nav-link scrollto" href="#about">ABOUT US</a></li>
                    <li><a class="nav-link scrollto" href="#services">PRODUCTS</a></li>
                    <li><a class="scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div><!-- End Header Container -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
        <h1>Wholesale Wood Products</h1>
        <h2>Providing high-quality wood products for construction, manufacturing, and trading companies.</h2>
        <a href="#about" class="btn-get-started scrollto">Explore</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <h2>About us</h2>
                    <h3>We are a leading wholesale and retail trade company specializing in wood products.</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <p>
                        Tekstas apie įmonę (ilgesnis 2-3 sakiniai)
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> 1 Punktas apie įmonę</li>
                        <li><i class="ri-check-double-line"></i> 2 Punktas apie įmonę</li>
                        <li><i class="ri-check-double-line"></i> 3 Punktas apie įmonę</li>
                    </ul>
                    <p class="fst-italic">
                        Tekstas apie įmonę (Išvada/motyvacija)
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="content">
                        <h3>Why Choose Ekimex for your business?</h3>
                        <p>
                            Tekstas apie privalumus ir pan (ilgesnis 3-4 sakiniai)
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Įmonės vertybės 1</h4>
                                    <p>Sakinys apie įmonės vertybės (1-2 sakiniai)</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Įmonės vertybės 2</h4>
                                    <p>Sakinys apie įmonės vertybės (1-2 sakiniai)</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Įmonės vertybės 3</h4>
                                    <p>Sakinys apie įmonės vertybės (1-2 sakiniai)</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="text-center" data-aos="zoom-in">
                <h3>Motyvacinis tekstas</h3>
                <p>Šūkis/Lozungas</p>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title" data-aos="fade-right">
                        <h2>PRODUCTS</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Product 1 -->
                <div class="col-md-3 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <small>Reikalinga nuotrauka</small>
                        <h4>Birch plywood</h4>
                        <p>Reikalingas tekstas</p>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-3 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <small>Reikalinga nuotrauka</small>
                        <h4>Film Faced plywood</h4>
                        <p>Reikalingas tekstas</p>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-3 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <small>Reikalinga nuotrauka</small>
                        <h4>Film Faced Colored Plywood</h4>
                        <p>Reikalingas tekstas</p>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-md-3 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                        <small>Reikalinga nuotrauka</small>
                        <h4>Coniferous Plywood Pine/Spruce</h4>
                        <p>Reikalingas tekstas</p>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="col-md-3 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <small>Reikalinga nuotrauka</small>
                        <h4>Glued laminated timber</h4>
                        <p>Reikalingas tekstas</p>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="col-md-3 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <small>Reikalinga nuotrauka</small>
                        <h4>Cross laminated timber</h4>
                        <p>Reikalingas tekstas</p>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col-md-3 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <small>Reikalinga nuotrauka</small>
                        <h4>Three-layer panels (SWP)</h4>
                        <p>Reikalingas tekstas</p>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="col-md-3 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                        <small>Reikalinga nuotrauka</small>
                        <h4>Bed slats</h4>
                        <p>Reikalingas tekstas</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
{{--    <section id="portfolio" class="portfolio">--}}
{{--        <div class="container">--}}

{{--            <div class="section-title" data-aos="fade-left">--}}
{{--                <h2>Portfolio</h2>--}}
{{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
{{--            </div>--}}

{{--            <div class="row" data-aos="fade-up" data-aos-delay="100">--}}
{{--                <div class="col-lg-12 d-flex justify-content-center">--}}
{{--                    <ul id="portfolio-flters">--}}
{{--                        <li data-filter="*" class="filter-active">All</li>--}}
{{--                        <li data-filter=".filter-app">App</li>--}}
{{--                        <li data-filter=".filter-card">Card</li>--}}
{{--                        <li data-filter=".filter-web">Web</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>App 1</h4>--}}
{{--                            <p>App</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 3</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>App 2</h4>--}}
{{--                            <p>App</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 2</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 2</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>App 3</h4>--}}
{{--                            <p>App</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 1</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Card 3</h4>--}}
{{--                            <p>Card</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--                    <div class="portfolio-wrap">--}}
{{--                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="portfolio-info">--}}
{{--                            <h4>Web 3</h4>--}}
{{--                            <p>Web</p>--}}
{{--                            <div class="portfolio-links">--}}
{{--                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Portfolio Section -->--}}

    <!-- ======= Testimonials Section ======= -->
{{--    <section id="testimonials" class="testimonials section-bg">--}}
{{--        <div class="container">--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="section-title" data-aos="fade-right">--}}
{{--                        <h2>Testimonials</h2>--}}
{{--                        <p>Magnam dolores commodi suscipit uisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">--}}

{{--                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">--}}
{{--                        <div class="swiper-wrapper">--}}

{{--                            <div class="swiper-slide">--}}
{{--                                <div class="testimonial-item">--}}
{{--                                    <p>--}}
{{--                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.--}}
{{--                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                    </p>--}}
{{--                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">--}}
{{--                                    <h3>Saul Goodman</h3>--}}
{{--                                    <h4>Ceo &amp; Founder</h4>--}}
{{--                                </div>--}}
{{--                            </div><!-- End testimonial item -->--}}

{{--                            <div class="swiper-slide">--}}
{{--                                <div class="testimonial-item">--}}
{{--                                    <p>--}}
{{--                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.--}}
{{--                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                    </p>--}}
{{--                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">--}}
{{--                                    <h3>Sara Wilsson</h3>--}}
{{--                                    <h4>Designer</h4>--}}
{{--                                </div>--}}
{{--                            </div><!-- End testimonial item -->--}}

{{--                            <div class="swiper-slide">--}}
{{--                                <div class="testimonial-item">--}}
{{--                                    <p>--}}
{{--                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.--}}
{{--                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                    </p>--}}
{{--                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">--}}
{{--                                    <h3>Jena Karlis</h3>--}}
{{--                                    <h4>Store Owner</h4>--}}
{{--                                </div>--}}
{{--                            </div><!-- End testimonial item -->--}}

{{--                            <div class="swiper-slide">--}}
{{--                                <div class="testimonial-item">--}}
{{--                                    <p>--}}
{{--                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.--}}
{{--                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                    </p>--}}
{{--                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">--}}
{{--                                    <h3>Matt Brandon</h3>--}}
{{--                                    <h4>Freelancer</h4>--}}
{{--                                </div>--}}
{{--                            </div><!-- End testimonial item -->--}}

{{--                            <div class="swiper-slide">--}}
{{--                                <div class="testimonial-item">--}}
{{--                                    <p>--}}
{{--                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.--}}
{{--                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                    </p>--}}
{{--                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">--}}
{{--                                    <h3>John Larson</h3>--}}
{{--                                    <h4>Entrepreneur</h4>--}}
{{--                                </div>--}}
{{--                            </div><!-- End testimonial item -->--}}

{{--                        </div>--}}
{{--                        <div class="swiper-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Testimonials Section -->--}}


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Tekstas apie kontaktus (ilgesnis 3-4 sakiniai)</p>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                    <div class="info mt-4">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Pilnas adresas</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="info">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@ekimex.com</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info w-100 mt-4">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 1234567890</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Ekimex OU</h3>
                    <p>
                        Adresas / gatve <br>
                        Miestas <br>
                        Šalis <br><br>
                        <strong>Phone:</strong> +1 1234567890<br>
                        <strong>Email:</strong> info@ekimex.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">HOME</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">ABOUT US</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">PRODUCTS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Ekimex OU</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            Jei turite socialinių tinklų, mes juos įtrauksime
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('/ekimex/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('/ekimex/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('/ekimex/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/ekimex/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('/ekimex/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/ekimex/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('/ekimex/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/ekimex/assets/js/main.js') }}"></script>

</body>

</html>
