<div class="sign_in_up_bg">
    <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">
            {{-- <div class="col-lg-3">
                <div class="main_logo25" id="logo">
                </div>
            </div> --}}

            <div class="col-lg-12 col-md-8 mt-3 mb-3">
                <div class="sign_form">
                    <h2>Selamat Datang di Berung Madure</h2>
                    <p>Masuk Ke Akun Anda!</p>
                    {{-- <button class="social_lnk_btn color_btn_fb">
                        <i class="uil uil-facebook-f"></i>Continue with Facebook
                    </button>
                    <button class="social_lnk_btn mt-15 color_btn_tw">
                        <i class="uil uil-twitter"></i>Continue with Twitter
                    </button>
                    <button class="social_lnk_btn mt-15 color_btn_go">
                        <i class="uil uil-google"></i>Continue with Google
                    </button> --}}
                    <form action="/login" method="POST">
                        @csrf
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh95">
                                <input class="prompt srch_explore" type="email" name="email" id="email"
                                    placeholder="Email" />
                                <i class="uil uil-envelope icon icon2"></i>
                            </div>
                        </div>
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh95">
                                <input class="prompt srch_explore" type="password" name="password" id="password"
                                    placeholder="Password" />
                                <i class="uil uil-key-skeleton-alt icon icon2"></i>
                            </div>
                        </div>
                        {{-- <div class="ui form mt-30 checkbox_sign">
                            <div class="inline field">
                                <div class="ui checkbox mncheck">
                                    <input type="checkbox" tabindex="0" class="hidden" />
                                    <label>ingatkan Saya </label>
                                </div>
                            </div>
                        </div> --}}
                        <button type="submit" class="login-btn">Masuk</button>
                    </form>
                    <p class="sgntrm145">
                        Klik untuk <a href="#">Lupa Password</a>.
                    </p>
                    <p class="mb-0 mt-30 hvsng145">
                        Belum punya akun? <a href="register">Daftar</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
