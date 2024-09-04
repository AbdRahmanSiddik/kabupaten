@extends('layouts.template')


@section('content')
    <div class="">
        <div class="_215b01">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section3125">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-5 col-md-6">
                                    <div class="preview_video">
                                        <a href="#" class="fcrse_img" data-bs-toggle="modal"
                                            data-bs-target="#videoModal">
                                            <img src="{{ asset('thumbnail_produk/' . $getsData->thumbnail) }}"
                                                alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <span class="_215b02">Preview this course</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="_215b10">
                                        <a href="#" class="_215b11">
                                            <span><i class="uil uil-heart"></i></span>Save
                                        </a>
                                        <a href="#" class="_215b12">
                                            <span><i class="uil uil-windsock"></i></span>Report abuse
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-6">
                                    <div class="_215b03">
                                        <h2>{{ $getsData->nama_produk }}</h2>
                                        <span class="_215b04">
                                            {{ $getsData->nama_kategori }}, {{ $getsData->nama_sub_kategori }}</span>
                                    </div>
                                    <div class="_215b05">
                                        <div class="crse_reviews mr-2">
                                            <i class="uil uil-star"></i>5.3.2
                                        </div>
                                        (81,665 ratings)
                                    </div>
                                    <div class="_215b05">

                                        @if ($getsData->atr->min('harga') == $getsData->atr->max('harga'))
                                            Rp {{ number_format($getsData->atr->max('harga')) }}
                                        @else
                                            Rp {{ number_format($getsData->atr->min('harga')) }} - Rp
                                            {{ number_format($getsData->atr->max('harga')) }}
                                        @endif

                                    </div>
                                    <div class="_215b06">
                                        {{-- <div class="_215b07">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 48 48">
                                                    <path fill="currentColor"
                                                        d="M11.25 8.5a4.75 4.75 0 0 0-4.75 4.75v15.5a4.75 4.75 0 0 0 4.75 4.75h3.25v7.838L25.603 33.5H36.75a4.75 4.75 0 0 0 4.75-4.75v-15.5a4.75 4.75 0 0 0-4.75-4.75zM4 13.25A7.25 7.25 0 0 1 11.25 6h25.5A7.25 7.25 0 0 1 44 13.25v15.5A7.25 7.25 0 0 1 36.75 36H26.397l-10.85 7.658C14.058 44.71 12 43.644 12 41.82V36h-.75A7.25 7.25 0 0 1 4 28.75z" />
                                                </svg></span>
                                            2
                                        </div>
                                        <div class="_215b07">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <g fill="none">
                                                        <path fill="currentColor"
                                                            d="m15 10l-.986-.164A1 1 0 0 0 15 11zM4 10V9a1 1 0 0 0-1 1zm16.522 2.392l.98.196zM6 21h11.36v-2H6zM18.56 9H15v2h3.56zm-2.573 1.164l.805-4.835L14.82 5l-.806 4.836zM14.82 3h-.214v2h.214zm-3.543 1.781L8.763 8.555l1.664 1.11l2.516-3.774zM7.93 9H4v2h3.93zM3 10v8h2v-8zm17.302 8.588l1.2-6l-1.96-.392l-1.2 6zM8.762 8.555A1 1 0 0 1 7.93 9v2a3 3 0 0 0 2.496-1.336zm8.03-3.226A2 2 0 0 0 14.82 3v2zM18.56 11a1 1 0 0 1 .981 1.196l1.961.392A3 3 0 0 0 18.561 9zm-1.2 10a3 3 0 0 0 2.942-2.412l-1.96-.392a1 1 0 0 1-.982.804zM14.606 3a4 4 0 0 0-3.328 1.781l1.664 1.11A2 2 0 0 1 14.606 5zM6 19a1 1 0 0 1-1-1H3a3 3 0 0 0 3 3z" />
                                                        <path stroke="currentColor" stroke-width="2" d="M8 10v10" />
                                                    </g>
                                                </svg></span>
                                            20
                                        </div> --}}

                                        {{-- <div class="_215b08">
                                            <span><i class='uil uil-closed-captioning'></i></span>
                                            <span>English, Dutch
                                                <span class="caption_tooltip">
                                                    12 more
                                                    <span class="caption-content">
                                                        <span>French</span>
                                                        <span>Hindi</span>
                                                        <span>German [Auto-generated]</span>
                                                        <span>Indonesian [Auto-generated]</span>
                                                        <span>Italian [Auto-generated]</span>
                                                        <span>Japanese [Auto-generated]</span>
                                                        <span>Korean</span>
                                                        <span>Polish</span>
                                                        <span>Portuguese [Auto-generated]</span>
                                                        <span>Spanish [Auto-generated]</span>
                                                        <span>Traditional Chinese</span>
                                                        <span>Turkish [Auto-generated]</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="_215b05">
                                        Last updated 1/2024
                                    </div> --}}


                                    <form action="/checkout/{{ $getsData->token_produk }}" method="POST">
                                        @csrf
                                        <div class="input-group my-2 " style="width: 15%; ">
                                            <span class="input-group-text  "
                                                style="cursor: pointer; background-color: #ed2a26; color: white; border: 1px solid #ed2a26; "
                                                id="decrement">-</span>
                                            <input type="text" class="form-control text-center " name="quantity"
                                                id="quantity" value="1" min="1">
                                            <span class="input-group-text "
                                                style="cursor: pointer; background-color: #ed2a26; color: white; border: 1px solid #ed2a26; "
                                                id="increment">+</span>
                                        </div>

                                        <script>
                                            $(document).ready(function() {
                                                $('#increment').click(function() {
                                                    var quantity = parseInt($('#quantity').val());
                                                    $('#quantity').val(quantity + 1);
                                                });

                                                $('#decrement').click(function() {
                                                    var quantity = parseInt($('#quantity').val());
                                                    if (quantity > 1) {
                                                        $('#quantity').val(quantity - 1);
                                                    }
                                                });
                                                // Set up AJAX headers to include CSRF token
                                                $.ajaxSetup({
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    }
                                                });

                                                $('#productForm').submit(function(e) {
                                                    e.preventDefault();

                                                    $.ajax({
                                                        url: "",
                                                        method: "POST",
                                                        data: $(this).serialize(),
                                                        success: function(response) {
                                                            alert(response.success);
                                                            $('#productList').append('<li>' + response.product.name +
                                                                ' - Quantity: ' + response.product.quantity + '</li>');
                                                            $('#productForm')[0].reset(); // Reset the form
                                                        },
                                                        error: function(response) {
                                                            alert('Something went wrong. Please try again.');
                                                            console.log(response.responseText);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                        <ul class="_215b31">

                                            @if (Auth::check())
                                                <li><button type="submit" class="btn_adcart">Tambah Keranjang</button></li>
                                            @else
                                                <li><button class="btn_adcart" data-bs-toggle="modal"
                                                        data-bs-target="#modalLogin">Add to Cart</button></li>
                                            @endif


                                            <li><button class="btn_buy" type="submit">Beli Sekarang</button></li>

                                        </ul>
                                        {{-- <div class="_215fgt1">
                                        30-Day Money-Back Guarantee
                                    </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_215b15 _byt1458">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user_dt5">
                            <div class="user_dt_left">
                                <div class="live_user_dt">
                                    <div class="user_img5">
                                        <a href="#"><img src="{{ asset('') }}assets/images/left-imgs/img-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="user_cntnt">
                                        <a href="#" class="_df7852">Ananda Maulana Wahyudi</a>
                                        <button class="subscribe-btn">+ Ikuti</button>
                                    </div>
                                </div>
                            </div>
                            <div class="user_dt_right">
                                <ul>
                                    <li>
                                        <a href="#" class="lkcm152"><i class="uil uil-eye"></i><span>1452</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="lkcm152"><i
                                                class="uil uil-thumbs-up"></i><span>100</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="lkcm152"><i
                                                class="uil uil-thumbs-down"></i><span>20</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="lkcm152"><i
                                                class="uil uil-share-alt"></i><span>9</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="course_tabs">
                            <nav>
                                <div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-about-tab" data-bs-toggle="tab"
                                        href="#nav-about" role="tab" aria-selected="true">About</a>
                                    {{-- <a class="nav-item nav-link" id="nav-courses-tab" data-bs-toggle="tab"
                                        href="#nav-courses" role="tab" aria-selected="false">Courses Content</a> --}}
                                    <a class="nav-item nav-link" id="nav-reviews-tab" data-bs-toggle="tab"
                                        href="#nav-reviews" role="tab" aria-selected="false">Reviews</a>
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
                                            <h3>Spesifikasi Produk</h3>
                                            <ul>
                                                <li><span class="_5f7g11">Kategoti : </span></li>
                                                <li><span class="_5f7g11">Stok :</span></li>
                                                <li><span class="_5f7g11">Merek :</span></li>
                                                <li><span class="_5f7g11">Masa Penyimpanan :</span></li>
                                                <li><span class="_5f7g11">Kondisi Penyimpanan :</span></li>
                                                <li><span class="_5f7g11">Rasa :</span></li>
                                                <li><span class="_5f7g11">No. Izin Edar (BPOM, PIRT) :</span></li>
                                                <li><span class="_5f7g11">No. Sertifikasi (Halal) :</span></li>
                                                <li><span class="_5f7g11">No.Sertifikat (SNI,K3L,UTTP) :</span></li>
                                                <li><span class="_5f7g11">Dikirim Dari :</span></li>
                                            </ul>
                                        </div>
                                        <div class="_htg452 mt-35">
                                            <h3>Deskripsi Produk
                                            </h3>
                                            <span class="_abc123">Just updated to include Bootstrap 4.1.3!</span>
                                            <p>Hi! Welcome to the Web Developer Bootcamp, the <strong>only course you need
                                                    to learn web development</strong>. There are a lot of options for online
                                                developer training, but this course is without a doubt the most
                                                comprehensive and effective on the market. Here's why:</p>
                                            <ul class="_abc124">
                                                <li><span class="_5f7g11">This is the only online course taught by a
                                                        professional bootcamp instructor.</span></li>
                                                <li><span class="_5f7g11">94% of my in-person bootcamp students go on to
                                                        get full-time developer jobs. Most of them are complete beginners
                                                        when I start working with them.</span></li>
                                                <li><span class="_5f7g11">The previous 2 bootcamp programs that I taught
                                                        cost $14,000 and $21,000. This course is just as comprehensive but
                                                        with brand new content for a fraction of the price.</span></li>
                                                <li><span class="_5f7g11">Everything I cover is up-to-date and relevant to
                                                        today's developer industry. No PHP or other dated technologies. This
                                                        course does not cut any corners.</span></li>
                                                <li><span class="_5f7g11">This is the only complete beginner full-stack
                                                        developer course that covers NodeJS.</span></li>
                                                <li><span class="_5f7g11">We build 13+ projects, including a gigantic
                                                        production application called YelpCamp. No other course walks you
                                                        through the creation of such a substantial application.</span></li>
                                                <li><span class="_5f7g11">The course is constantly updated with new
                                                        content, projects, and modules. Think of it as a subscription to a
                                                        never-ending supply of developer training.</span></li>
                                            </ul>
                                            <p>When you're learning to program you often have to sacrifice learning the
                                                exciting and current technologies in favor of the "beginner friendly"
                                                classes. With this course, you get the best of both worlds. This is a course
                                                designed for the complete beginner, yet it covers some of the most exciting
                                                and relevant topics in the industry.</p>
                                            <p>Throughout the course we cover tons of tools and technologies including:</p>
                                            <ul class="_abc124">
                                                <li><span class="_5f7g11"><strong>HTML5</strong></span></li>
                                                <li><span class="_5f7g11"><strong>CSS3</strong></span></li>
                                                <li><span class="_5f7g11"><strong>JavaScript</strong></span></li>
                                                <li><span class="_5f7g11"><strong>Bootstrap 4</strong></span></li>
                                                <li><span class="_5f7g11"><strong>SemanticUI</strong></span></li>
                                                <li><span class="_5f7g11"><strong>DOM Manipulation</strong></span></li>
                                                <li><span class="_5f7g11"><strong>jQuery</strong></span></li>
                                                <li><span class="_5f7g11"><strong>Unix(Command Line)
                                                            Commands</strong></span></li>
                                                <li><span class="_5f7g11"><strong>NodeJS</strong></span></li>
                                                <li><span class="_5f7g11"><strong>NPM</strong></span></li>
                                                <li><span class="_5f7g11"><strong>ExpressJS</strong></span></li>
                                                <li><span class="_5f7g11"><strong>REST</strong></span></li>
                                                <li><span class="_5f7g11"><strong>MongoDB</strong></span></li>
                                                <li><span class="_5f7g11"><strong>Database Associations</strong></span>
                                                </li>
                                                <li><span class="_5f7g11"><strong>Authentication</strong></span></li>
                                                <li><span class="_5f7g11"><strong>PassportJS</strong></span></li>
                                                <li><span class="_5f7g11"><strong>Authorization</strong></span></li>
                                            </ul>

                                            <p>This course is also unique in the way that it is structured and presented.
                                                Many online courses are just a long series of "watch as I code" videos. This
                                                course is different. I've incorporated everything I learned in my years of
                                                teaching to make this course not only more effective but more engaging. The
                                                course includes:</p>
                                            <ul class="_abc124">
                                                <li><span class="_5f7g11">Lectures</span></li>
                                                <li><span class="_5f7g11">Code-Alongs</span></li>
                                                <li><span class="_5f7g11">Projects</span></li>
                                                <li><span class="_5f7g11">Exercises</span></li>
                                                <li><span class="_5f7g11">Research Assignments</span></li>
                                                <li><span class="_5f7g11">Slides</span></li>
                                                <li><span class="_5f7g11">Downloads</span></li>
                                                <li><span class="_5f7g11">Readings</span></li>
                                            </ul>
                                            <p>If you have any questions, please don't hesitate to contact me. I got into
                                                this industry because I love working with people and helping students learn.
                                                Sign up today and see how fun, exciting, and rewarding web development can
                                                be!</p>
                                        </div>
                                        <div class="_htg452 mt-35">
                                            <h3>Who this course is for :</h3>
                                            <ul class="_abc124">
                                                <li><span class="_5f7g11">This course is for anyone who wants to learn
                                                        about web development, regardless of previous experience</span></li>
                                                <li><span class="_5f7g11">It's perfect for complete beginners with zero
                                                        experience</span></li>
                                                <li><span class="_5f7g11">It's also great for anyone who does have some
                                                        experience in a few of the technologies(like HTML and CSS) but not
                                                        all</span></li>
                                                <li><span class="_5f7g11">If you want to take ONE COURSE to learn
                                                        everything you need to know about web development, take this
                                                        course</span></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="nav-courses" role="tabpanel">
                                    <div class="crse_content">
                                        <h3>Course content</h3>
                                        <div class="_112456">
                                            <ul class="accordion-expand-holder">
                                                <li><span class="accordion-expand-all _d1452">Expand all</span></li>
                                                <li><span class="_fgr123"> 402 lectures</span></li>
                                                <li><span class="_fgr123">47:06:29</span></li>
                                            </ul>
                                        </div>
                                        <div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to this Course</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">8 lectures</span>
                                                    <span class="section-header-length">22:08</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">A Note On Asking For Help</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introducing Our TA</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Join the Online Community</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:51</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Why This Course?</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">07:48</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file-download-alt icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Syllabus Download</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">2 pages</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Syllabus Walkthrough</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">01:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Lecture Slides</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to Front End
                                                            Development</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">6 lectures</span>
                                                    <span class="section-header-length">27:26</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">01.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Setting Up Front-End Developer
                                                                Environment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Setting Up Front-End Developer Environment
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Introduction to the Web</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to the Web</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10.08</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Front End Holy Trinity</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">11:46</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to HTML</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">13 lectures</span>
                                                    <span class="section-header-length">58:55</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Basicsng Up Front-End Developer
                                                                Environment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:53</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Introduction to MDN</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to MDN</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:51</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Boilerplate and Comments</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Basic Tags</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists Assignment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists Assignment: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:59</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Divs and Spans</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Attributes</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Recreate Webpage Assignment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Recreate Webpage Assignment: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Intermediate HTML</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">13 lectures</span>
                                                    <span class="section-header-length">01.12:29</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Tables</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:03</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Tables Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:18</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to Forms</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Playing with Inputs</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:04</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Form Tag</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:36</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Labels</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Form Validations</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Dropdowns and Radio Buttons</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Form Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:23</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to CSS</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">15 lectures</span>
                                                    <span class="section-header-length">01.40:15</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02.28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Basics</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:25</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Our First Stylesheet</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:18</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about CSS Colors and Background and
                                                                Border (next 2 lectures)</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Colors</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:35</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Background and Border</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:58</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Selectors Basics Todo List</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Basics Todo List</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to Chrome Inspector</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">More Advanced Selectors</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Specificity and the Cascade
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Specificity and the Cascade</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Selectors Practice Exercise
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Practice Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Practice Exercise: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">16:48</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Intermediate CSS</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">16 lectures</span>
                                                    <span class="section-header-length">01.26:40</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Text and Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">More Text and Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Using Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:35</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to the Box Model</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:58</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Tic Tac Toe Board</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Tic Tac Toe Board: SOLUTION
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Image Gallery Code Along Pt. 1
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Image Gallery Code Along Pt. 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about changes to Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Image Gallery Code Along Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:46</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise Intro</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">03:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION Pt.
                                                                1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION Pt.
                                                                2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION Pt.
                                                                3</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:28</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Bootstrap</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">16 lectures</span>
                                                    <span class="section-header-length">01.59:54</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02.28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Bootstrap versions</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">What is Bootstrap?</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:02</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Adding Bootstrap to a Project</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Forms and Inputs</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Nav Bars</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">15:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about The Grid System</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Grid System</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Grid System Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Bootstrap Image Gallery Pt. 1
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap Image Gallery Pt. 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Font Awesome</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:16</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap Image Gallery Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:46</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Startup Landing Page Code Along
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Startup Landing Page Code Along
                                                                Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about making bootstrap responsive on
                                                                mobile devices</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:14</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Bootstrap 4!</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">11 lectures</span>
                                                    <span class="section-header-length">01.16:28
                                                    </span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">A History of Bootstrap 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Bootstrap 4 Documentation</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:24</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Changes from Bootstrap 3 to 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:52</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4 Code/Solutions Download</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Getting Started With Bootstrap 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4 Colors and Backgrounds</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:59</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Typography</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">New Fancy Spacing Utilities</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">12:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Responsive Breakpoints</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap4 Navbars</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The New Display Utility</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:26</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4: Flexbox and Layout</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:14</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Flexbox Utilities Part 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Navs and Flexbox</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:56</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Bootstrap 4 Grid</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:56</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">PATTERN PROJECT Part 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">12:06</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">PATTERN PROJECT Part 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Grid + Flexbox</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Museum of Candy Project Part 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:36</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Museum of Candy Project Part 2
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to JavaScript</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">12 lectures</span>
                                                    <span class="section-header-length">56:21</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04.41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The JavaScript Console</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Primitives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">13:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Primitives Exercises</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:21</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Variables</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Null and Undefined</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:33</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Useful Built-In Methods</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Writing JavaScript in a Separate File
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">JS Stalker Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">JS Stalker Exercise: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:45</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Age Calculator Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:10</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Age Calculator Exercise: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn1458" href="#">20 More Sections</a>
                                    </div>
                                </div> --}}
                                <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
                                    <div class="student_reviews">
                                        <div class="row">
                                            {{-- <div class="col-lg-5">
                                                <div class="reviews_left">
                                                    <h3>Student Feedback</h3>
                                                    <div class="total_rating">
                                                        <div class="_rate001">4.6</div>
                                                        <div class="rating-box">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star half-star"></span>
                                                        </div>
                                                        <div class="_rate002">Produk Rating</div>
                                                    </div>
                                                    <div class="_rate003">
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-70" role="progressbar"
                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                            </div>
                                                            <div class="_rate002">70%</div>
                                                        </div>
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-30" role="progressbar"
                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                            </div>
                                                            <div class="_rate002">40%</div>
                                                        </div>
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-5" role="progressbar"
                                                                    aria-valuenow="10" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                            </div>
                                                            <div class="_rate002">5%</div>
                                                        </div>
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-2" role="progressbar"
                                                                    aria-valuenow="2" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                            </div>
                                                            <div class="_rate002">1%</div>
                                                        </div>
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-1" role="progressbar"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                            </div>
                                                            <div class="_rate002">1%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12">
                                                <div class="review_right">
                                                    <div class="review_right_heading">
                                                        <h3>Reviews</h3>
                                                        <div class="review_search">
                                                            <input class="rv_srch" type="text"
                                                                placeholder="Search reviews...">
                                                            <button class="rvsrch_btn"><i
                                                                    class='uil uil-search'></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review_all120">
                                                    <div class="review_item">
                                                        <div class="review_usr_dt">
                                                            <img src="{{ asset('') }}assets/images/left-imgs/img-2.jpg"
                                                                alt="">
                                                            <div class="rv1458">
                                                                <h4 class="tutor_name1">Deliana Agustina</h4>
                                                                <span class="time_145">30 Juli 2024</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-box mt-20">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                        </div>
                                                        <p class="rvds10">Terimakaciiiiiiiii </p>
                                                        <div class="rpt100">
                                                            <span>Was this review helpful?</span>
                                                            <div class="radio--group-inline-container">
                                                                <div class="radio-item">
                                                                    <input id="radio-1" name="radio" type="radio">
                                                                    <label for="radio-1" class="radio-label">Yes</label>
                                                                </div>
                                                                <div class="radio-item">
                                                                    <input id="radio-2" name="radio" type="radio">
                                                                    <label for="radio-2" class="radio-label">No</label>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="report145">Report</a>
                                                        </div>
                                                    </div>
                                                    {{--
                                                    <div class="review_item">
                                                        <a href="#" class="more_reviews">See More Reviews</a>
                                                    </div> --}}
                                                </div>
                                                <div class="review_all120">
                                                    <div class="review_item">
                                                        <div class="review_usr_dt">
                                                            <img src="{{ asset('') }}assets/images/left-imgs/img-1.jpg"
                                                                alt="">
                                                            <div class="rv1458">
                                                                <h4 class="tutor_name1">Rahmat Syafri</h4>
                                                                <span class="time_145">30 Juli 2024</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-box mt-20">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star half-star"></span>
                                                        </div>
                                                        <p class="rvds10">Alhamdulillah.... Barang yang datang sesuai yang
                                                            saya pesan </p>
                                                        <div class="rpt100">
                                                            <span>Was this review helpful?</span>
                                                            <div class="radio--group-inline-container">
                                                                <div class="radio-item">
                                                                    <input id="radio-1" name="radio" type="radio">
                                                                    <label for="radio-1" class="radio-label">Yes</label>
                                                                </div>
                                                                <div class="radio-item">
                                                                    <input id="radio-2" name="radio" type="radio">
                                                                    <label for="radio-2" class="radio-label">No</label>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="report145">Report</a>
                                                        </div>
                                                    </div>

                                                    <div class="review_item">
                                                        <a href="#" class="more_reviews">See More Reviews</a>
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

    @include('auth.login')
@endsection
