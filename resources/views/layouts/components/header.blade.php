 <!-- Header Start -->
 <header class="header clearfix">
     <button type="button" id="toggleMenu" class="toggle_menu">
         <i class='uil uil-bars'></i>
     </button>
     <button id="collapse_menu" class="collapse_menu">
         <i class="uil uil-bars collapse_menu--icon "></i>
         <span class="collapse_menu--label"></span>
     </button>
     <div class="main_logo" id="logo">
         <a href="/"><img src="{{ asset('assets') }}/images/berung.png" alt="" width="100px"></a>
         <a href="/"><img class="logo-inverse" src="{{ asset('assets') }}/images/berung.png" width="100%"></a>
     </div>
     <div class="search120">
         <div class="ui search">
             <div class="ui left icon input swdh10">
                 <input class="prompt srch10" type="text"
                     placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                 <i class='uil uil-search-alt icon icon1'></i>
             </div>
         </div>
     </div>
     <div class="header_right">
         <ul>
             {{-- <li>
                <a href="create_new_course.html" class="upload_btn" title="Create New Course">Create New Course</a>
            </li> --}}
             <li>
                 <a href="/keranjang" class="option_links" title="cart"><i class='uil uil-shopping-cart-alt'></i><span
                         class="noti_count">2</span></a>
             </li>
             <li class="dropdown-msg">
                 <a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true"
                     aria-expanded="false"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>
                 <div class="dropdown-menu dropdown_ms drop-down">
                     <a href="#" class="channel_my item">
                         <div class="profile_link">
                             <img src="{{ asset('assets') }}/images/left-imgs/img-6.jpg" alt="">
                             <div class="pd_content">
                                 <h6>Zoena Singh</h6>
                                 <p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
                                 <span class="nm_time">2 min ago</span>
                             </div>
                         </div>
                     </a>
                     <a href="#" class="channel_my item">
                         <div class="profile_link">
                             <img src="{{ asset('assets') }}/images/left-imgs/img-5.jpg" alt="">
                             <div class="pd_content">
                                 <h6>Joy Dua</h6>
                                 <p>Hello, I paid you video tutorial but did not play error 404.</p>
                                 <span class="nm_time">10 min ago</span>
                             </div>
                         </div>
                     </a>
                     <a href="#" class="channel_my item">
                         <div class="profile_link">
                             <img src="{{ asset('assets') }}/images/left-imgs/img-8.jpg" alt="">
                             <div class="pd_content">
                                 <h6>Jass</h6>
                                 <p>Thanks Sir, Such a nice video.</p>
                                 <span class="nm_time">25 min ago</span>
                             </div>
                         </div>
                     </a>
                     <a class="vbm_btn" href="instructor_messages.html">View All <i class='uil uil-arrow-right'></i></a>
                 </div>
             </li>
             <li class="dropdown-noti">
                 <a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true"
                     aria-expanded="false"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>
                 <div class="dropdown-menu dropdown_mn drop-down">
                     <a href="#" class="channel_my item">
                         <div class="profile_link">
                             <img src="{{ asset('assets') }}/images/left-imgs/img-1.jpg" alt="">
                             <div class="pd_content">
                                 <h6>Rock William</h6>
                                 <p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
                                 <span class="nm_time">2 min ago</span>
                             </div>
                         </div>
                     </a>
                     <a href="#" class="channel_my item">
                         <div class="profile_link">
                             <img src="{{ asset('assets') }}/images/left-imgs/img-2.jpg" alt="">
                             <div class="pd_content">
                                 <h6>Jassica Smith</h6>
                                 <p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
                                 <span class="nm_time">12 min ago</span>
                             </div>
                         </div>
                     </a>
                     <a href="#" class="channel_my item">
                         <div class="profile_link">
                             <img src="{{ asset('assets') }}/images/left-imgs/img-9.jpg" alt="">
                             <div class="pd_content">
                                 <p> Your Membership Approved <strong>Upload Video</strong>.</p>
                                 <span class="nm_time">20 min ago</span>
                             </div>
                         </div>
                     </a>
                     <a class="vbm_btn" href="instructor_notifications.html">View All <i
                             class='uil uil-arrow-right'></i></a>
                 </div>
             </li>
             <li class="profile-dropdown">
                 <a href="#" class="opts_account" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                     aria-expanded="false">

                     @if (Auth::check())
                         @if (auth()->user()->foto_profile == null)
                             <img src="{{ asset('') }}assets/images/no-profile.jpg " width="50"
                                 height="35" alt="">
                         @else
                             <img src="{{ asset('foto_profile/' . auth()->user()->foto_profile) }}" width="50"
                                 height="35" alt="">
                         @endif
                     @else
                         <img src="{{ asset('assets') }}/images/no-profile.jpg" alt="">
                     @endif
                 </a>
                 <div class="dropdown-menu dropdown_account drop-down dropdown-menu-end">
                     <div class="channel_my">
                         <div class="profile_link">

                             @if (Auth::check())
                                 @if (auth()->user()->foto_profile == null)
                                     <img src="{{ asset('') }}assets/images/no-profile.jpg " width="50"
                                         style="width: 50px; height: 45px; " height="35" alt="">
                                 @else
                                     <img src="{{ asset('foto_profile/' . auth()->user()->foto_profile) }}"
                                         style="width: 50px; height: 45px; " alt="">
                                 @endif
                             @else
                                 <img src="{{ asset('assets') }}/images/no-profile.jpg" alt="">
                             @endif



                             <div class="pd_content">
                                 <div class="rhte85">

                                     @if (Auth::check())
                                         <h6>{{ auth()->user()->username }}</h6>
                                     @else
                                         <h6>Guest</h6>
                                     @endif

                                     <div class="mef78" title="Verify">
                                         <i class='uil uil-check-circle'></i>
                                     </div>
                                 </div>

                                 @if (Auth::check())
                                     <span>{{ auth()->user()->email }}</span>
                                 @endif

                             </div>
                         </div>
                         <a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>
                     </div>
                     <div class="night_mode_switch__btn">
                         <a href="#" id="night-mode" class="btn-night-mode">
                             <i class="uil uil-moon"></i> Night mode
                             <span class="btn-night-mode-switch">
                                 <span class="uk-switch-button"></span>
                             </span>
                         </a>
                     </div>
                     <a href="instructor_dashboard.html" class="item channel_item">Cursus dashboard</a>
                     <a href="membership.html" class="item channel_item">Paid Memberships</a>
                     <a href="/settings" class="item channel_item">Setting</a>
                     <a href="help.html" class="item channel_item">Help</a>
                     <a href="feedback.html" class="item channel_item">Send Feedback</a>

                     @if (Auth::check())
                         <a href="/logout" class="item channel_item">Sign Out</a>
                     @else
                         <div class="item channel_item" style="cursor: pointer;" data-bs-toggle="modal"
                             data-bs-target="#modalLogin">
                             Login</div>
                     @endif

                 </div>
             </li>
         </ul>
     </div>
 </header>
 <!-- Header End -->
