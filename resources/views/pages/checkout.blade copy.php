@extends('layouts.template')

@section('content')
    <div class="mb4d25">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="membership_chk_bg">
                        <div class="fcrse_1">
                            <a href="course_detail_view.html" class="hf_img">
                                {{-- <img class="cart_img" src="{{ asset('') }}assets/images/courses/img-2.jpg" alt=""> --}}

                                <img src="{{ asset('thumbnail_produk/' . $produkDetail->thumbnail) }}" alt="">
                            </a>
                            <div class="hs_content">
                                <div class="eps_dots eps_dots10 more_dropdown">
                                    <a href="#"><i class='uil uil-times'></i></a>
                                </div>
                                <a href="course_detail_view.html"
                                    class="crse14s title900 pt-2">{{ $produkDetail->nama_produk }}</a>
                                <a href="#" class="crse-cate"> {{ $produkDetail->nama_kategori }},
                                    {{ $produkDetail->nama_sub_kategori }}</a>
                                <div class="auth1lnkprce">
                                    <p class="cr1fot">By <a href="#">John Doe</a></p>
                                    <div class="prce142">
                                        @if ($produkDetail->atr->min('harga') == $produkDetail->atr->max('harga'))
                                            Rp {{ number_format($produkDetail->atr->max('harga')) }} x {{ $kuantitas }}
                                        @else
                                            Rp {{ number_format($produkDetail->atr->min('harga')) }} - Rp
                                            {{ number_format($produkDetail->atr->max('harga')) }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="membership_chk_bg">

                        <div class="checkout_title">
                            <h4>Billing Details</h4>
                            <img src="{{ asset('') }}assets/images/line.svg" alt="">
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="address1">
                                    <div class="panel-title">
                                        <a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion"
                                            href="#collapseaddress1" aria-expanded="false" aria-controls="collapseaddress1">
                                            Edit Address
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseaddress1" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="address1">
                                    <div class="panel-body basic_form">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>First Name*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="name"
                                                                value="Joginder" id="id_name" required=""
                                                                maxlength="64" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Last Name*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text" name="surname"
                                                                value="Singh" id="id_surname" required="" maxlength="64"
                                                                placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Academy Name*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="academyname" value="Gambolthemes" id="id_academy"
                                                                required="" maxlength="64" placeholder="Academy Name">
                                                        </div>
                                                        <div class="help-block">If you want your invoices addressed to a
                                                            academy. Leave blank to use your full name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mt-30 lbel25">
                                                        <label>Country*</label>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Address1*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="addressname"
                                                                value="#1234 Street No. 45, Ward No. 60, Phase 3"
                                                                id="id_address1" required="" maxlength="300"
                                                                placeholder="Address Line 1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Address2*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="addressname2"
                                                                value="Shahid Karnail Singh Nagar, Near Pakhowal Road"
                                                                id="id_address2" required="" maxlength="300"
                                                                placeholder="Address Line 2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>City*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="city" value="Ludhiana" id="id_city"
                                                                required="" maxlength="64" placeholder="City">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>State / Province / Region*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="state" value="Punjab" id="id_state"
                                                                required="" maxlength="64"
                                                                placeholder="State / Province / Region">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Zip/Postal Code*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="zip" value="141013" id="id_zip"
                                                                required="" maxlength="64"
                                                                placeholder="Zip / Postal Code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Phone Number*</label>
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="phone" value="+91123456789" id="id_phone"
                                                                required="" maxlength="12" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button class="save_address_btn" type="submit">Save
                                                        Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="address_text">
                            ABD RACHMAN SIDDIK <br>
                            JL. GAPURA BANGKAL<br> RT-001 / RW-002<br>
                            Road.<br>
                            Ludhiana, Punjab, 141013<br>
                            Indonesia
                        </div>
                    </div>

                </div>

                <input type="hidden" name="json" id="json_callback">
                <div class="col-lg-4">
                    <div class="membership_chk_bg rght1528">
                        <div class="checkout_title">
                            <h4>Order Summary</h4>
                            <img src="{{ asset('') }}assets/images/line.svg" alt="">
                        </div>
                        <div class="order_dt_section">
                            <div class="order_title">
                                <h4>{{ $produkDetail->nama_produk }}</h4>
                                <div class="order_price">
                                    @if ($produkDetail->atr->min('harga') == $produkDetail->atr->max('harga'))
                                        Rp {{ number_format($produkDetail->atr->max('harga') * $kuantitas) }}
                                    @else
                                        Rp {{ number_format($produkDetail->atr->min('harga')) }} - Rp
                                        {{ number_format($produkDetail->atr->max('harga') * $kuantitas) }}
                                    @endif
                                </div>
                            </div>
                            <div class="order_title">
                                <h6>Ongkir</h6>
                                <div class="order_price">Rp5.000</div>
                            </div>
                            <div class="order_title">
                                <h2>Total</h2>
                                <div class="order_price5">Rp {{ $produkDetail->harga * $kuantitas + 5000 }}</div>
                            </div>

                            {{-- <form id="payment-form" method="POST" action="{{ route('checkout.process') }}">
                                @csrf
                                <input type="text" id="name" name="name">
                                <input type="text" id="email" name="email">
                                <input type="text" id="phone" name="phone">
                                <input type="number" id="amount" name="amount">
                                <button type="button" id="pay-button" class="btn scr_text">Bayar Sekarang</button>
                        </div>
                    </div>
                </div>


                </form> --}}

                            <form id="payment-form" method="POST" action="{{ route('checkout.process') }}">
                                @csrf
                                <input type="hidden" name="json" id="json_callback">

                                <!-- Customer Details -->
                                <div>
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div>
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div>
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" name="phone" required>
                                </div>

                                <!-- Order Details -->
                                <div>
                                    <label for="amount">Amount:</label>
                                    <input type="number" id="amount" name="amount" required>
                                </div>

                                <button type="submit" id="pay-button">Pay Now</button>
                            </form>
                        </div>
                    </div>
                </div>




                <script type="text/javascript">
                    document.getElementById('pay-button').onclick = function(event) {
                        event.preventDefault();
                        var name = document.getElementById('name').value;
                        var email = document.getElementById('email').value;
                        var phone = document.getElementById('phone').value;
                        var amount = document.getElementById('amount').value;

                        // Send data to your server to create transaction
                        fetch("{{ route('checkout.token') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                },
                                body: JSON.stringify({
                                    name: name,
                                    email: email,
                                    phone: phone,
                                    amount: amount,
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                snap.pay(data.snap_token, {
                                    onSuccess: function(result) {
                                        sendResponseToForm(result);
                                    },
                                    onPending: function(result) {
                                        sendResponseToForm(result);
                                    },
                                    onError: function(result) {
                                        sendResponseToForm(result);
                                    },
                                    onClose: function() {
                                        alert('You closed the popup without finishing the payment');
                                    }
                                });
                            });
                    };

                    function sendResponseToForm(result) {
                        document.getElementById('json_callback').value = JSON.stringify(result);
                        document.getElementById('payment-form').submit();
                    }
                </script>
            @endsection
