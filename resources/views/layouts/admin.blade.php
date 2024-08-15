<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gambolthemes.net/html-items/cursus-new-demo/instructor_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 11:45:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Dashboard</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href='{{ asset('assets') }}/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="{{ asset('assets') }}/css/vertical-responsive-menu1.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/instructor-dashboard.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/instructor-responsive.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/night-mode.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Vendor Stylesheets -->
    <link href="{{ asset('assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/docs/docs/dist/css/bootstrap-select.min.css"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/semantic/semantic.min.css">

</head>

<body>
    @include('layouts.components.header')


    <!-- Left Sidebar Start -->
    <nav class="vertical_nav">
        <div class="left_section menu_left" id="js-menu">
            <div class="left_section">
                <ul>
                    <li class="menu--item">
                        <a href="instructor_dashboard.html" class="menu--link active" title="Dashboard">
                            <i class="uil uil-apps menu--icon"></i>
                            <span class="menu--label">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="/admin/produk" class="menu--link" title="Courses">
                            <i class='uil uil-book-alt menu--icon'></i>
                            <span class="menu--label">Produk Saya</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="instructor_analyics.html" class="menu--link" title="Analyics">
                            <i class='uil uil-analysis menu--icon'></i>
                            <span class="menu--label">Analisis</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="create_new_course.html" class="menu--link" title="Create Course">
                            <i class='uil uil-plus-circle menu--icon'></i>
                            <span class="menu--label">Jual Produk</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="instructor_messages.html" class="menu--link" title="Messages">
                            <i class='uil uil-comments menu--icon'></i>
                            <span class="menu--label">Chat</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="instructor_notifications.html" class="menu--link" title="Notifications">
                            <i class='uil uil-bell menu--icon'></i>
                            <span class="menu--label">Notifikasi</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="instructor_all_reviews.html" class="menu--link" title="Reviews">
                            <i class='uil uil-star menu--icon'></i>
                            <span class="menu--label">Review</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="instructor_earning.html" class="menu--link" title="Earning">
                            <i class='uil uil-dollar-sign menu--icon'></i>
                            <span class="menu--label">Pendapatan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="left_section pt-2">
                <ul>
                    <li class="menu--item">
                        <a href="setting.html" class="menu--link" title="Setting">
                            <i class='uil uil-cog menu--icon'></i>
                            <span class="menu--label">Setting</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="feedback.html" class="menu--link" title="Send Feedback">
                            <i class='uil uil-comment-alt-exclamation menu--icon'></i>
                            <span class="menu--label">Send Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Left Sidebar End -->
    <!-- Body Start -->
    <div class="wrapper">
        @yield('content')
        <footer class="footer mt-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item_f1">
                            <a href="terms_of_use.html">Copyright Policy</a>
                            <a href="terms_of_use.html">Terms</a>
                            <a href="terms_of_use.html">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="footer_bottm">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="fotb_left">
                                        <li>
                                            <a href="index.html">
                                                <div class="footer_logo">
                                                    <img src="{{ asset('assets') }}/images/" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <p>© 2024 <strong>Turbo-Main</strong>. All Rights Reserved.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="edu_social_links">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Body End -->

    <script src="{{ asset('assets') }}/js/vertical-responsive-menu.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/docs/docs/dist/js/bootstrap-select.js"></script>
    <script src="{{ asset('assets') }}/vendor/semantic/semantic.min.js"></script>
    <script src="{{ asset('assets') }}/js/custom1.js"></script>
    <script src="{{ asset('assets') }}/js/night-mode.js"></script>

</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus-new-demo/instructor_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 11:45:48 GMT -->

</html>
