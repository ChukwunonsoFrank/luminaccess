<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="thumbnail" content="assets/images/Kinetix Finance_page_thumbnail.webp">
    <meta name="description" content="Kinetix Finance – Finance & Consulting Site Template.">
    <meta name="keywords" content="Finance & Consulting Bootstrap Site Template">
    <meta name="author" content="XpressBuddy">

    <title>Kinetix Finance – Get Access To Top of the Line Banking Services.</title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="shortcut icon" href="{{ asset('assets/images/site_logo/favourite_icon_2.svg') }}">

    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Icon - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.min.css') }}">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/odometer.min.css') }}">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>


<body class="financial_consulting">

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

        <!-- Back To Top - Start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>
        <!-- Back To Top - End -->

        <!-- Site Header - Start
      ================================================== -->
        <header class="site_header header_layout_2">
            <div class="header_top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-sm-4 col-6 d-flex align-items-center">
                            <div class="site_logo">
                                <a class="site_link" href="{{ route('home') }}">
                                    <img src="assets/images/site_logo/site_logo_black_3.svg" alt="Site Logo Black">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-6 d-flex align-items-center justify-content-end">
                            <a class="btn bg-dark rounded-pill" href="{{ route('login') }}">
                                <span class="btn_icon">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <span class="btn_label">Login</span>
                            </a>
                            <a class="hotline_btn" href="tel:8005550199">
                                <span class="btn_icon">
                                    <img src="assets/images/icons/icon_calling_4.svg" alt="Icon Calling">
                                </span>
                                <span class="btn_label" data-text="Hotline: (800) 555‑0199">Hotline: (800)
                                    555‑0199</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom stricky">
                <div
                    class="container-fluid d-flex align-items-center justify-content-lg-between justify-content-center">
                    {{-- <nav class="main_menu navbar navbar-expand-lg">
                        <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                            <ul class="main_menu_list unordered_list justify-content-center">
                                <li class="dropdown active">
                                    <a class="nav-link" href="#" id="home_submenu" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Home
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="home_submenu">
                                        <li><a href="index.html">Investment Solution</a></li>
                                        <li><a href="index_online_banking.html">Online Banking</a></li>
                                        <li><a href="index_payment_solutions.html">Payment Solutions</a></li>
                                        <li><a href="index_insurance.html">Insurance</a></li>
                                        <li><a href="index_car_insurance.html">Car Insurance</a></li>
                                        <li class="active"><a href="index_financial_consulting.html">Financial
                                                Consulting</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="services_submenu" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="services_submenu">
                                        <li><a href="services.html">Our Services</a></li>
                                        <li><a href="service_details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="projects_submenu" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Projects
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="projects_submenu">
                                        <li><a href="projects.html">Our Projects</a></li>
                                        <li><a href="project_details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#" id="pages_submenu" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="pages_submenu">
                                        <li><a href="contact.html">Help Center</a></li>
                                        <li class="dropdown">
                                            <a class="nav-link" href="#" id="blog_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Blogs
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="blog_submenu">
                                                <li><a href="blog.html">Our Blogs</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link" href="#" id="career_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Career
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="career_submenu">
                                                <li><a href="career.html">Join Us</a></li>
                                                <li><a href="career_details.html">Job Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="error.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </div>
                    </nav> --}}
                    <ul class="btns_group p-0 m-0 unordered_list justify-content-center justify-content-lg-end">
                        {{-- <li>
                            <button class="mobile_menu_btn text-white rounded-pill" type="button"
                                data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="far fa-bars"></i>
                            </button>
                        </li> --}}
                        {{-- <li>
                            <a class="btn bg-dark rounded-pill" href="{{ route('login') }}">
                                <span class="btn_icon">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <span class="btn_label">Login</span>
                            </a>
                        </li> --}}
                        {{-- <li>
                            <button class="offcanvas_btn icon_block" type="button">
                                <i class="fa-regular fa-grid-2"></i>
                            </button>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </header>
        <!-- Site Header - End
      ================================================== -->

        <!-- Main Body - Start
      ================================================== -->
        <main class="page_content">

            {{ $slot }}

        </main>
        <!-- Main Body - End
      ================================================== -->

        <!-- Site Footer - Start
      ================================================== -->
        <footer class="site_footer footer_layout_4 section_decoration">

            <div class="footer_bottom bg-dark">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <p class="copyright_text mb-0">
                                Copyright © 2025 Kinetix Finance. All rights reserved.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <ul
                                class="social_icons_block fc_social_icons_block unordered_list justify-content-center justify-content-lg-end">
                                <li>
                                    <a aria-label="Twitter X" href="#!">
                                        <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.92704 6.35148L14.5111 0H13.1879L8.33921 5.5149L4.4666 0H0L5.85615 8.3395L0 15H1.32333L6.44364 9.17608L10.5334 15H15L8.92671 6.35148H8.92704ZM7.11456 8.41297L6.52121 7.58255L1.80014 0.974755H3.83269L7.64265 6.30746L8.236 7.13788L13.1885 14.0696H11.156L7.11456 8.41329V8.41297Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li><a aria-label="Facebook" href="#!"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a aria-label="Linkedin" href="#!"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a aria-label="Paper Plane" href="#!"><i
                                            class="fa-solid fa-paper-plane"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="decoration_item shape_nate_1">
                <img src="{{ asset('assets/images/shapes/shape_nate_3.svg') }}" alt="Shape Nate">
            </div>

            <div class="decoration_item shape_nate_2">
                <img src="{{ asset('assets/images/shapes/shape_nate_3.svg') }}" alt="Shape Nate">
            </div>
        </footer>
        <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Fraimwork - Jquery Include -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-dropdown-ml-hack.min.js') }}"></script>

    <!-- Carousel - Jquery Include -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- Animations - jquery include -->
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

    <!-- Counter - Jquery Include -->
    <script src="{{ asset('assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>

    <!-- Content Auto Sliding - jquery include -->
    <script src="{{ asset('assets/js/ticker.min.js') }}"></script>

    <!-- Custom - Jquery Include -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
