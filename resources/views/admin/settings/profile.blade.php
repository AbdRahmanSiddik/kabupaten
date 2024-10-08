@extends('layouts.template')


@section('content')
    <!-- Body Start -->
    <div class="_216b01">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="section3125 rpt145">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="_216b22">
                                    <span><i class="uil uil-cog"></i></span>Setting
                                </a>
                                <div class="dp_dt150">
                                    <div class="img148">
                                        @if (Auth::check())
                                            @if (auth()->user()->foto_profile == null)
                                                <img src="{{ asset('') }}assets/images/no-profile.jpg " width="50"
                                                    height="35" alt="">
                                            @else
                                                <img src="{{ asset('foto_profile/' . auth()->user()->foto_profile) }}"
                                                    alt="">
                                            @endif
                                        @else
                                            <img src="{{ asset('assets') }}/images/no-profile.jpg" alt="">
                                        @endif


                                    </div>
                                    <div class="prfledt1">
                                        <h2>{{ $Getdata->username }}</h2>
                                        <span>{{ $Getdata->email }}</span>
                                    </div>
                                </div>
                                <ul class="_ttl120">
                                    <li>
                                        <div class="_ttl121">
                                            <div class="_ttl122">
                                                Purchased
                                            </div>
                                            <div class="_ttl123">4</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="_ttl121">
                                            <div class="_ttl122">
                                                My Reviews
                                            </div>
                                            <div class="_ttl123">4</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="_ttl121">
                                            <div class="_ttl122">
                                                Subscriptions
                                            </div>
                                            <div class="_ttl123">
                                                15K
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="_ttl121">
                                            <div class="_ttl122">
                                                Cerfiticates
                                            </div>
                                            <div class="_ttl123">2</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <a href="setting.html" class="_216b12">
                                    <span><i class="uil uil-cog"></i></span>Setting
                                </a>
                                <div class="rgt-145">
                                    <ul class="tutor_social_links">
                                        <li>
                                            <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="tw"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="yu"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="_bty149">
                                    <li>
                                        <button class="studio-link-btn btn500"
                                            onclick="window.location.href = '/alamat/{{ auth()->user()->id }}';">
                                            Edit Alamat
                                        </button>
                                    </li>
                                    <li>
                                        <button class="msg125 btn500"
                                            onclick="window.location.href = '/profile/{{ $Getdata->token_users }}/edit';">
                                            Edit Profile
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_215b15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_tabs">
                        <nav>
                            <div class="nav nav-tabs tab_crse" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-about-tab" data-bs-toggle="tab"
                                    href="#nav-about" role="tab" aria-selected="true">About</a>
                                <a class="nav-item nav-link" id="nav-purchased-tab" data-bs-toggle="tab"
                                    href="#nav-purchased" role="tab" aria-selected="false">Purchased</a>
                                <a class="nav-item nav-link" id="nav-reviews-tab" data-bs-toggle="tab" href="#nav-reviews"
                                    role="tab" aria-selected="false">Discussion</a>
                                <a class="nav-item nav-link" id="nav-subscriptions-tab" data-bs-toggle="tab"
                                    href="#nav-subscriptions" role="tab" aria-selected="false">Subscriptions</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_215b17">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_tab_content">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                                <div class="_htg451">
                                    <div class="_htg452">
                                        <h3>About Me</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                            Vestibulum scelerisque nibh
                                            sed ligula blandit, quis
                                            faucibus lorem pellentesque.
                                            Suspendisse pulvinar dictum
                                            pellentesque. Vestibulum at
                                            sagittis lectus, sit amet
                                            aliquam turpis. In quis elit
                                            tempus, semper justo vitae,
                                            lacinia massa. Etiam
                                            sagittis quam quis fermentum
                                            lacinia. Curabitur blandit
                                            sapien et risus congue
                                            viverra. Mauris auctor risus
                                            sit amet cursus
                                            sollicitudin. Lorem ipsum
                                            dolor sit amet, consectetur
                                            adipiscing elit. Nulla
                                            feugiat sodales massa, in
                                            viverra dolor condimentum
                                            ut. In imperdiet, justo nec
                                            volutpat blandit, tellus
                                            justo tempor quam, sed
                                            pretium nibh nunc nec
                                            mauris. Mauris vel malesuada
                                            magna. Quisque iaculis
                                            molestie purus, non luctus
                                            mauris porta id. Maecenas
                                            imperdiet tincidunt mauris
                                            vestibulum vulputate. Aenean
                                            sollicitudin pretium nibh,
                                            et sagittis risus tincidunt
                                            ac. Phasellus scelerisque
                                            rhoncus massa, ac euismod
                                            massa pharetra non.
                                            Phasellus dignissim, urna in
                                            iaculis varius, turpis
                                            libero mollis velit, sit
                                            amet euismod arcu mi ac
                                            nibh. Praesent tincidunt
                                            eros at ligula pellentesque
                                            elementum. Fusce condimentum
                                            enim a tellus egestas, sit
                                            amet rutrum elit gravida.
                                            Pellentesque in porta
                                            sapien. Fusce tristique
                                            maximus ipsum et mollis. Sed
                                            at massa ac est dapibus
                                            vulputate at eu nibh.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-purchased" role="tabpanel">
                                <div class="_htg451">
                                    <div class="_htg452">
                                        <h3>Purchased Courses</h3>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="fcrse_1 mt-20">
                                                    <a href="course_detail_view.html" class="hf_img">
                                                        <img src="{{ asset('') }}assets/images/courses/img-1.jpg"
                                                            alt="" />
                                                        <div class="course-overlay">
                                                            <div class="badge_seller">
                                                                Bestseller
                                                            </div>
                                                            <div class="crse_reviews">
                                                                <i class="uil uil-star"></i>4.5
                                                            </div>
                                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                            <div class="crse_timer">
                                                                25 hours
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="hs_content">
                                                        <div class="eps_dots eps_dots10 more_dropdown">
                                                            <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                            <div class="dropdown-content">
                                                                <span><i class="uil uil-download-alt"></i>Download</span>
                                                                <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                            </div>
                                                        </div>
                                                        <div class="vdtodt">
                                                            <span class="vdt14">109k
                                                                views</span>
                                                            <span class="vdt14">15 days
                                                                ago</span>
                                                        </div>
                                                        <a href="course_detail_view.html"
                                                            class="crse14s title900">Complete
                                                            Python
                                                            Bootcamp: Go
                                                            from zero to
                                                            hero in
                                                            Python 3</a>
                                                        <a href="#" class="crse-cate">Web
                                                            Development
                                                            | Python</a>
                                                        <div class="purchased_badge">
                                                            Purchased
                                                        </div>
                                                        <div class="auth1lnkprce">
                                                            <p class="cr1fot">
                                                                By
                                                                <a href="#">John
                                                                    Doe</a>
                                                            </p>
                                                            <div class="prce142">
                                                                $10
                                                            </div>
                                                            <button class="shrt-cart-btn" title="cart">
                                                                <i class="uil uil-shopping-cart-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fcrse_1 mt-30">
                                                    <a href="course_detail_view.html" class="hf_img">
                                                        <img src="{{ asset('') }}assets/images/courses/img-2.jpg"
                                                            alt="" />
                                                        <div class="course-overlay">
                                                            <div class="badge_seller">
                                                                Bestseller
                                                            </div>
                                                            <div class="crse_reviews">
                                                                <i class="uil uil-star"></i>4.5
                                                            </div>
                                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                            <div class="crse_timer">
                                                                28 hours
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="hs_content">
                                                        <div class="eps_dots eps_dots10 more_dropdown">
                                                            <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                            <div class="dropdown-content">
                                                                <span><i class="uil uil-download-alt"></i>Download</span>
                                                                <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                            </div>
                                                        </div>
                                                        <div class="vdtodt">
                                                            <span class="vdt14">5M
                                                                views</span>
                                                            <span class="vdt14">15 days
                                                                ago</span>
                                                        </div>
                                                        <a href="course_detail_view.html" class="crse14s title900">The
                                                            Complete
                                                            JavaScript
                                                            Course 2020:
                                                            Build Real
                                                            Projects!</a>
                                                        <a href="#" class="crse-cate">Development
                                                            |
                                                            JavaScript</a>
                                                        <div class="purchased_badge">
                                                            Purchased
                                                        </div>
                                                        <div class="auth1lnkprce">
                                                            <p class="cr1fot">
                                                                By
                                                                <a href="#">Jassica
                                                                    William</a>
                                                            </p>
                                                            <div class="prce142">
                                                                $5
                                                            </div>
                                                            <button class="shrt-cart-btn" title="cart">
                                                                <i class="uil uil-shopping-cart-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fcrse_1 mt-30">
                                                    <a href="course_detail_view.html" class="hf_img">
                                                        <img src="{{ asset('') }}assets/images/courses/img-3.jpg"
                                                            alt="" />
                                                        <div class="course-overlay">
                                                            <div class="badge_seller">
                                                                Bestseller
                                                            </div>
                                                            <div class="crse_reviews">
                                                                <i class="uil uil-star"></i>4.5
                                                            </div>
                                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                            <div class="crse_timer">
                                                                12 hours
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="hs_content">
                                                        <div class="eps_dots eps_dots10 more_dropdown">
                                                            <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                            <div class="dropdown-content">
                                                                <span><i class="uil uil-download-alt"></i>Download</span>
                                                                <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                            </div>
                                                        </div>
                                                        <div class="vdtodt">
                                                            <span class="vdt14">1M
                                                                views</span>
                                                            <span class="vdt14">18 days
                                                                ago</span>
                                                        </div>
                                                        <a href="course_detail_view.html"
                                                            class="crse14s title900">Beginning
                                                            C++
                                                            Programming
                                                            - From
                                                            Beginner to
                                                            Beyond</a>
                                                        <a href="#" class="crse-cate">Development
                                                            | C++</a>
                                                        <div class="purchased_badge">
                                                            Purchased
                                                        </div>
                                                        <div class="auth1lnkprce">
                                                            <p class="cr1fot">
                                                                By
                                                                <a href="#">Joginder
                                                                    Singh</a>
                                                            </p>
                                                            <div class="prce142">
                                                                $13
                                                            </div>
                                                            <button class="shrt-cart-btn" title="cart">
                                                                <i class="uil uil-shopping-cart-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fcrse_1 mt-30">
                                                    <a href="course_detail_view.html" class="hf_img">
                                                        <img src="{{ asset('') }}assets/images/courses/img-4.jpg"
                                                            alt="" />
                                                        <div class="course-overlay">
                                                            <div class="badge_seller">
                                                                Bestseller
                                                            </div>
                                                            <div class="crse_reviews">
                                                                <i class="uil uil-star"></i>5.0
                                                            </div>
                                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                            <div class="crse_timer">
                                                                1 hours
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="hs_content">
                                                        <div class="eps_dots eps_dots10 more_dropdown">
                                                            <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                            <div class="dropdown-content">
                                                                <span><i class="uil uil-download-alt"></i>Download</span>
                                                                <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                            </div>
                                                        </div>
                                                        <div class="vdtodt">
                                                            <span class="vdt14">153k
                                                                views</span>
                                                            <span class="vdt14">3
                                                                months
                                                                ago</span>
                                                        </div>
                                                        <a href="course_detail_view.html" class="crse14s title900">The
                                                            Complete
                                                            Digital
                                                            Marketing
                                                            Course - 12
                                                            Courses in
                                                            1</a>
                                                        <a href="#" class="crse-cate">Digital
                                                            Marketing |
                                                            Marketing</a>
                                                        <div class="purchased_badge">
                                                            Purchased
                                                        </div>
                                                        <div class="auth1lnkprce">
                                                            <p class="cr1fot">
                                                                By
                                                                <a href="#">Poonam
                                                                    Verma</a>
                                                            </p>
                                                            <div class="prce142">
                                                                $12
                                                            </div>
                                                            <button class="shrt-cart-btn" title="cart">
                                                                <i class="uil uil-shopping-cart-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
                                <div class="student_reviews">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="review_right">
                                                <div class="review_right_heading">
                                                    <h3>Discussions</h3>
                                                </div>
                                            </div>
                                            <div class="cmmnt_1526">
                                                <div class="cmnt_group">
                                                    <div class="img160">
                                                        <img src="{{ asset('') }}assets/images/left-imgs/img-1.jpg"
                                                            alt="" />
                                                    </div>
                                                    <textarea class="_cmnt001" placeholder="Add a public comment"></textarea>
                                                </div>
                                                <button class="cmnt-btn" type="submit">
                                                    Comment
                                                </button>
                                            </div>
                                            <div class="review_all120">
                                                <div class="review_item">
                                                    <div class="review_usr_dt">
                                                        <img src="{{ asset('') }}assets/images/left-imgs/img-1.jpg"
                                                            alt="" />
                                                        <div class="rv1458">
                                                            <h4 class="tutor_name1">
                                                                John Doe
                                                            </h4>
                                                            <span class="time_145">2 hour
                                                                ago</span>
                                                        </div>
                                                        <div class="eps_dots more_dropdown">
                                                            <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                            <div class="dropdown-content">
                                                                <span><i class="uil uil-comment-alt-edit"></i>Edit</span>
                                                                <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="rvds10">
                                                        Nam gravida elit
                                                        a velit rutrum,
                                                        eget dapibus ex
                                                        elementum.
                                                        Interdum et
                                                        malesuada fames
                                                        ac ante ipsum
                                                        primis in
                                                        faucibus. Fusce
                                                        lacinia, nunc
                                                        sit amet
                                                        tincidunt
                                                        venenatis.
                                                    </p>
                                                    <div class="rpt101">
                                                        <a href="#" class="report155"><i
                                                                class="uil uil-thumbs-up"></i>
                                                            10</a>
                                                        <a href="#" class="report155"><i
                                                                class="uil uil-thumbs-down"></i>
                                                            1</a>
                                                        <a href="#" class="report155"><i
                                                                class="uil uil-heart"></i></a>
                                                        <a href="#" class="report155 ml-3">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review_reply">
                                                    <div class="review_item">
                                                        <div class="review_usr_dt">
                                                            <img src="{{ asset('') }}assets/images/left-imgs/img-3.jpg"
                                                                alt="" />
                                                            <div class="rv1458">
                                                                <h4 class="tutor_name1">
                                                                    Rock
                                                                    Doe
                                                                </h4>
                                                                <span class="time_145">1
                                                                    hour
                                                                    ago</span>
                                                            </div>
                                                            <div class="eps_dots more_dropdown">
                                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                                <div class="dropdown-content">
                                                                    <span><i class="uil uil-trash-alt"></i>Delete</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="rvds10">
                                                            Fusce
                                                            lacinia,
                                                            nunc sit
                                                            amet
                                                            tincidunt
                                                            venenatis.
                                                        </p>
                                                        <div class="rpt101">
                                                            <a href="#" class="report155"><i
                                                                    class="uil uil-thumbs-up"></i>
                                                                4</a>
                                                            <a href="#" class="report155"><i
                                                                    class="uil uil-thumbs-down"></i>
                                                                2</a>
                                                            <a href="#" class="report155"><i
                                                                    class="uil uil-heart"></i></a>
                                                            <a href="#" class="report155 ml-3">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-subscriptions" role="tabpanel">
                                <div class="_htg451">
                                    <div class="_htg452">
                                        <h3>Subscriptions</h3>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <div class="fcrse_1 mt-30">
                                                    <div class="tutor_img">
                                                        <a href="#"><img
                                                                src="{{ asset('') }}assets/images/left-imgs/img-1.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="tutor_content_dt">
                                                        <div class="tutor150">
                                                            <a href="#" class="tutor_name">John
                                                                Doe</a>
                                                            <div class="mef78" title="Verify">
                                                                <i class="uil uil-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="tutor_cate">
                                                            Wordpress
                                                            &amp; Plugin
                                                            Tutor
                                                        </div>
                                                        <ul class="tutor_social_links">
                                                            <li>
                                                                <button class="sbbc145">
                                                                    Subscribed
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="sbbc146">
                                                                    <i class="uil uil-bell"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <div class="tut1250">
                                                            <span class="vdt15">100K
                                                                Students</span>
                                                            <span class="vdt15">15
                                                                Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="fcrse_1 mt-30">
                                                    <div class="tutor_img">
                                                        <a href="#"><img
                                                                src="{{ asset('') }}assets/images/left-imgs/img-2.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="tutor_content_dt">
                                                        <div class="tutor150">
                                                            <a href="#" class="tutor_name">Kerstin
                                                                Cable</a>
                                                            <div class="mef78" title="Verify">
                                                                <i class="uil uil-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="tutor_cate">
                                                            Language
                                                            Learning
                                                            Coach,
                                                            Writer,
                                                            Online Tutor
                                                        </div>
                                                        <ul class="tutor_social_links">
                                                            <li>
                                                                <button class="sbbc145">
                                                                    Subscribed
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="sbbc146">
                                                                    <i class="uil uil-bell"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <div class="tut1250">
                                                            <span class="vdt15">14K
                                                                Students</span>
                                                            <span class="vdt15">11
                                                                Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="fcrse_1 mt-30">
                                                    <div class="tutor_img">
                                                        <a href="#"><img
                                                                src="{{ asset('') }}assets/images/left-imgs/img-3.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="tutor_content_dt">
                                                        <div class="tutor150">
                                                            <a href="#" class="tutor_name">Jose
                                                                Portilla</a>
                                                            <div class="mef78" title="Verify">
                                                                <i class="uil uil-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="tutor_cate">
                                                            Head of Data
                                                            Science,
                                                            Pierian Data
                                                            Inc.
                                                        </div>
                                                        <ul class="tutor_social_links">
                                                            <li>
                                                                <button class="sbbc145">
                                                                    Subscribed
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="sbbc146">
                                                                    <i class="uil uil-bell"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <div class="tut1250">
                                                            <span class="vdt15">1M
                                                                Students</span>
                                                            <span class="vdt15">25
                                                                Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4">
                                                <div class="fcrse_1 mt-30">
                                                    <div class="tutor_img">
                                                        <a href="#"><img
                                                                src="{{ asset('') }}assets/images/left-imgs/img-3.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="tutor_content_dt">
                                                        <div class="tutor150">
                                                            <a href="#" class="tutor_name">Jose
                                                                Portilla</a>
                                                            <div class="mef78" title="Verify">
                                                                <i class="uil uil-check-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="tutor_cate">
                                                            Head of Data
                                                            Science,
                                                            Pierian Data
                                                            Inc.
                                                        </div>
                                                        <ul class="tutor_social_links">
                                                            <li>
                                                                <button class="sbbc145">
                                                                    Subscribed
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="sbbc146">
                                                                    <i class="uil uil-bell"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <div class="tut1250">
                                                            <span class="vdt15">1M
                                                                Students</span>
                                                            <span class="vdt15">25
                                                                Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
