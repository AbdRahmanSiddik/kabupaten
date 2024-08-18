@extends('layouts.template')


@section('content')
    <!-- Body Start -->
    <div class="sa4d25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="st_title"><i class='uil uil-cog'></i> Setting</h2>
                    <div class="setting_tabs">
                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-account-tab" data-bs-toggle="pill"
                                    href="#pills-account" role="tab" aria-selected="true">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-notification-tab" data-bs-toggle="pill"
                                    href="#pills-notification" role="tab" aria-selected="false">Notification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-privacy-tab" data-bs-toggle="pill" href="#pills-privacy"
                                    role="tab" aria-selected="false">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-bllingpayment-tab" data-bs-toggle="pill"
                                    href="#pills-bllingpayment" role="tab" aria-selected="false">Billing and
                                    Payouts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-api-tab" data-bs-toggle="pill" href="#pills-api"
                                    role="tab" aria-selected="false">API Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-closeaccount-tab" data-bs-toggle="pill"
                                    href="#pills-closeaccount" role="tab" aria-selected="false">Close Account</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                            aria-labelledby="pills-account-tab">

                            <form action="/profile/{{ $Getdata->token_users }}/edit" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="account_setting">
                                    <h4>Your Cursus Account</h4>
                                    <p>This is your public presence on Cursus. You need a account to upload your paid
                                        courses, comment on courses, purchased by students, or earning.</p>
                                    <div class="basic_profile">
                                        <div class="basic_ptitle">
                                            <h4>Basic Profile</h4>
                                            <p>Add information about yourself</p>
                                        </div>
                                        <div class="basic_form">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="ui search focus mt-30">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        name="name" value="{{ $Getdata->name }}"
                                                                        placeholder="Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="ui search focus mt-30">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        name="username" value="{{ $Getdata->username }}"
                                                                        placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="ui search focus mt-30">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        name="alamat_users"
                                                                        value="{{ $Getdata->alamat_users }}"
                                                                        placeholder="Alamat">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="ui search focus mt-30">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="text"
                                                                        name="no_telepon" value="{{ $Getdata->no_telepon }}"
                                                                        placeholder="No Telepon">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="ui search focus mt-30">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class="prompt srch_explore" type="email"
                                                                        name="email" value="{{ $Getdata->email }}"
                                                                        placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="ui search focus mt-30">
                                                                <div class="ui left icon input swdh11 swdh19">
                                                                    <input class=" srch_explore" type="file"
                                                                        name="foto_profile"
                                                                        value="{{ $Getdata->foto_profile }}">
                                                                </div>
                                                            </div>
                                                            <!-- Preview Gambar -->
                                                            <div class="mt-3">
                                                                <img id="imagePreview"
                                                                    src="{{ asset('foto_profile/' . $Getdata->foto_profile) }}"
                                                                    alt="Profile Picture"
                                                                    style="max-width: 100%; height: auto;">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="divider-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="basic_profile1">
                                    <div class="basic_ptitle">
                                        <h4>Profile Links</h4>
                                    </div>
                                    <div class="basic_form">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="ui search focus mt-30">
                                                            <div class="ui left icon labeled input swdh11 swdh31">
                                                                <div class="ui label lb12">
                                                                    https://
                                                                </div>
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="site" value="gambolthemes.net"
                                                                    id="id_site" required="" maxlength="64"
                                                                    placeholder="yoursite.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="ui search focus mt-30">
                                                            <div class="ui left icon labeled input swdh11 swdh31">
                                                                <div class="ui label lb12">
                                                                    http://facebook.com/
                                                                </div>
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="facebooklink" id="id_facebook" required=""
                                                                    maxlength="64" placeholder="Facebook Profile">
                                                            </div>
                                                            <div class="help-block">Add your Facebook username (e.g.
                                                                johndoe).</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="ui search focus mt-30">
                                                            <div class="ui left icon labeled input swdh11 swdh31">
                                                                <div class="ui label lb12">
                                                                    http://twitter.com/
                                                                </div>
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="twitterlink" id="id_twitter" required=""
                                                                    maxlength="64" placeholder="Twitter Profile">
                                                            </div>
                                                            <div class="help-block">Add your Twitter username (e.g.
                                                                johndoe).</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="ui search focus mt-30">
                                                            <div class="ui left icon labeled input swdh11 swdh31">
                                                                <div class="ui label lb12">
                                                                    http://www.linkedin.com/
                                                                </div>
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="linkedinlink" id="id_linkedin" required=""
                                                                    maxlength="64" placeholder="Linkedin Profile">
                                                            </div>
                                                            <div class="help-block">Input your LinkedIn resource id
                                                                (e.g. in/johndoe).</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="ui search focus mt-30">
                                                            <div class="ui left icon labeled input swdh11 swdh31">
                                                                <div class="ui label lb12">
                                                                    http://www.youtube.com/
                                                                </div>
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="youtubelink" id="id_youtube" required=""
                                                                    maxlength="64" placeholder="Youtube Profile">
                                                            </div>
                                                            <div class="help-block">Input your Youtube username (e.g.
                                                                johndoe).</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                    <button class="save_btn" type="submit">Save Changes</button>
                                </div>

                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-notification" role="tabpanel"
                            aria-labelledby="pills-notification-tab">
                            <div class="account_setting">
                                <h4>Notifications - Choose when and how to be notified</h4>
                                <p>Select push and email notifications you'd like to receive</p>
                                <div class="basic_profile">
                                    <div class="basic_form">
                                        <div class="nstting_content">
                                            <div class="basic_ptitle">
                                                <h4>Choose when and how to be notified</h4>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss1" checked>
                                                <label>Subscriptions</label>
                                                <p class="ml5">Notify me about activity from the profiles I'm
                                                    subscribed to</p>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss2">
                                                <label>Recommended Courses</label>
                                                <p class="ml5">Notify me of courses I might like based on what I
                                                    watch</p>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss3">
                                                <label>Activity on my comments</label>
                                                <p class="ml5">Notify me about activity on my comments on others’
                                                    courses</p>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss4" checked>
                                                <label>Replies to my comments</label>
                                                <p class="ml5">Notify me about replies to my comments</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-1 mb-50"></div>
                                <div class="basic_profile">
                                    <div class="basic_form">
                                        <div class="nstting_content">
                                            <div class="basic_ptitle">
                                                <h4>Email notifications</h4>
                                                <p>Your emails are sent to gambol943@gmail.com. To unsubscribe from an
                                                    email, click the "Unsubscribe" link at the bottom of it. <a
                                                        href="#">Learn more</a> about emails from Edututs+.</p>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss5" checked>
                                                <label>Send me emails about my Cursus activity and updates I
                                                    requested</label>
                                                <p class="ml5">If this setting is turned off, Cursus may still send
                                                    you messages regarding your account, required service announcements,
                                                    legal notifications, and privacy matters</p>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss6">
                                                <label>Promotions, course recommendations, and helpful resources from
                                                    Cursus.</label>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss7">
                                                <label>Announcements from instructors whose course(s) I’m enrolled
                                                    in.</label>
                                                <p class="ml5">To adjust this preference by course, leave this box
                                                    checked and go to the course dashboard and click on "Options" to opt
                                                    in or out of specific announcements.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="save_btn" type="submit">Save Changes</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-privacy" role="tabpanel"
                            aria-labelledby="pills-privacy-tab">
                            <div class="account_setting">
                                <h4>Privacy</h4>
                                <p>Modify your privacy settings here.</p>
                                <div class="basic_profile">
                                    <div class="basic_form">
                                        <div class="nstting_content">
                                            <div class="basic_ptitle">
                                                <h4>Profile page settings</h4>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss8" checked>
                                                <label>Show your profile on search engines</label>
                                            </div>
                                            <div class="ui toggle checkbox _1457s2">
                                                <input type="checkbox" name="stream_ss9">
                                                <label>Show courses you're taking on your profile page</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="save_btn" type="submit">Save Changes</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-bllingpayment" role="tabpanel"
                            aria-labelledby="pills-bllingpayment-tab">
                            <div class="account_setting">
                                <h4>Billing and Payouts</h4>
                                <p>Want to charge for a course? Provide your payment info and opt in for our promotional
                                    programs</p>
                                <div class="basic_form">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="basic_ptitle mt-30">
                                                <h4>Billing Address</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="name" value="Joginder" id="id[name1]"
                                                                required="" maxlength="64" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="surname" value="Singh" id="id[surname1]"
                                                                required="" maxlength="64" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="academyname" value="Gambolthemes" id="id_academy"
                                                                required="" maxlength="64" placeholder="Academy Name">
                                                        </div>
                                                        <div class="help-block">If you want your invoices addressed to
                                                            a academy. Leave blank to use your full name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mt-30">
                                                        <select class="selectpicker" title="Select Country"
                                                            data-size="7">
                                                            <option value="1">Afghanistan</option>
                                                            <option value="2">Albania</option>
                                                            <option value="3">Algeria</option>
                                                            <option value="4">American Samoa</option>
                                                            <option value="5">Andorra</option>
                                                            <option value="6">Angola</option>
                                                            <option value="7">Anguilla</option>
                                                            <option value="8">Antarctica</option>
                                                            <option value="9">Antigua and Barbuda</option>
                                                            <option value="10">Argentina</option>
                                                            <option value="11">Armenia</option>
                                                            <option value="12">Aruba</option>
                                                            <option value="13">Australia</option>
                                                            <option value="14">Austria</option>
                                                            <option value="15">Azerbaijan</option>
                                                            <option value="16">Bahamas</option>
                                                            <option value="17">Bahrain</option>
                                                            <option value="18">Bangladesh</option>
                                                            <option value="19">Barbados</option>
                                                            <option value="20">Belarus</option>
                                                            <option value="21">Belgium</option>
                                                            <option value="22">Belize</option>
                                                            <option value="23">Benin</option>
                                                            <option value="24">Bermuda</option>
                                                            <option value="25">Bhutan</option>
                                                            <option value="26">Bolivia</option>
                                                            <option value="27">Bosnia and Herzegovina</option>
                                                            <option value="28">Botswana</option>
                                                            <option value="29">Bouvet Island</option>
                                                            <option value="30">Brazil</option>
                                                            <option value="31">British Indian Ocean Territory
                                                            </option>
                                                            <option value="32">Brunei Darussalam</option>
                                                            <option value="33">Bulgaria</option>
                                                            <option value="34">Burkina Faso</option>
                                                            <option value="35">Burundi</option>
                                                            <option value="36">Cambodia</option>
                                                            <option value="37">Cameroon</option>
                                                            <option value="38">Canada</option>
                                                            <option value="39">Cape Verde</option>
                                                            <option value="40">Cayman Islands</option>
                                                            <option value="41">Central African Republic</option>
                                                            <option value="42">Chad</option>
                                                            <option value="43">Chile</option>
                                                            <option value="44">China</option>
                                                            <option value="45">Christmas Island</option>
                                                            <option value="46">Cocos (Keeling) Islands</option>
                                                            <option value="47">Colombia</option>
                                                            <option value="48">Comoros</option>
                                                            <option value="49">Congo</option>
                                                            <option value="50">Cook Islands</option>
                                                            <option value="51">Costa Rica</option>
                                                            <option value="52">Croatia (Hrvatska)</option>
                                                            <option value="53">Cuba</option>
                                                            <option value="54">Cyprus</option>
                                                            <option value="55">Czech Republic</option>
                                                            <option value="56">Denmark</option>
                                                            <option value="57">Djibouti</option>
                                                            <option value="58">Dominica</option>
                                                            <option value="59">Dominican Republic</option>
                                                            <option value="60">East Timor</option>
                                                            <option value="61">Ecuador</option>
                                                            <option value="62">Egypt</option>
                                                            <option value="63">El Salvador</option>
                                                            <option value="64">Equatorial Guinea</option>
                                                            <option value="65">Eritrea</option>
                                                            <option value="66">Estonia</option>
                                                            <option value="67">Ethiopia</option>
                                                            <option value="68">Falkland Islands (Malvinas)</option>
                                                            <option value="69">Faroe Islands</option>
                                                            <option value="70">Fiji</option>
                                                            <option value="71">Finland</option>
                                                            <option value="72">France</option>
                                                            <option value="73">France, Metropolitan</option>
                                                            <option value="74">French Guiana</option>
                                                            <option value="75">French Polynesia</option>
                                                            <option value="76">French Southern Territories</option>
                                                            <option value="77">Gabon</option>
                                                            <option value="78">Gambia</option>
                                                            <option value="79">Georgia</option>
                                                            <option value="80">Germany</option>
                                                            <option value="81">Ghana</option>
                                                            <option value="82">Gibraltar</option>
                                                            <option value="83">Guernsey</option>
                                                            <option value="84">Greece</option>
                                                            <option value="85">Greenland</option>
                                                            <option value="86">Grenada</option>
                                                            <option value="87">Guadeloupe</option>
                                                            <option value="88">Guam</option>
                                                            <option value="89">Guatemala</option>
                                                            <option value="90">Guinea</option>
                                                            <option value="91">Guinea-Bissau</option>
                                                            <option value="92">Guyana</option>
                                                            <option value="93">Haiti</option>
                                                            <option value="94">Heard and Mc Donald Islands</option>
                                                            <option value="95">Honduras</option>
                                                            <option value="96">Hong Kong</option>
                                                            <option value="97">Hungary</option>
                                                            <option value="98">Iceland</option>
                                                            <option selected="" value="99">India</option>
                                                            <option value="100">Isle of Man</option>
                                                            <option value="101">Indonesia</option>
                                                            <option value="102">Iran (Islamic Republic of)</option>
                                                            <option value="103">Iraq</option>
                                                            <option value="104">Ireland</option>
                                                            <option value="105">Israel</option>
                                                            <option value="106">Italy</option>
                                                            <option value="107">Ivory Coast</option>
                                                            <option value="108">Jersey</option>
                                                            <option value="109">Jamaica</option>
                                                            <option value="110">Japan</option>
                                                            <option value="111">Jordan</option>
                                                            <option value="112">Kazakhstan</option>
                                                            <option value="113">Kenya</option>
                                                            <option value="114">Kiribati</option>
                                                            <option value="115">Korea, Democratic People's Republic
                                                                of</option>
                                                            <option value="116">Korea, Republic of</option>
                                                            <option value="117">Kosovo</option>
                                                            <option value="118">Kuwait</option>
                                                            <option value="119">Kyrgyzstan</option>
                                                            <option value="120">Lao People's Democratic Republic
                                                            </option>
                                                            <option value="121">Latvia</option>
                                                            <option value="122">Lebanon</option>
                                                            <option value="123">Lesotho</option>
                                                            <option value="124">Liberia</option>
                                                            <option value="125">Libyan Arab Jamahiriya</option>
                                                            <option value="126">Liechtenstein</option>
                                                            <option value="127">Lithuania</option>
                                                            <option value="128">Luxembourg</option>
                                                            <option value="129">Macau</option>
                                                            <option value="130">Macedonia</option>
                                                            <option value="131">Madagascar</option>
                                                            <option value="132">Malawi</option>
                                                            <option value="133">Malaysia</option>
                                                            <option value="134">Maldives</option>
                                                            <option value="135">Mali</option>
                                                            <option value="136">Malta</option>
                                                            <option value="137">Marshall Islands</option>
                                                            <option value="138">Martinique</option>
                                                            <option value="139">Mauritania</option>
                                                            <option value="140">Mauritius</option>
                                                            <option value="141">Mayotte</option>
                                                            <option value="142">Mexico</option>
                                                            <option value="143">Micronesia, Federated States of
                                                            </option>
                                                            <option value="144">Moldova, Republic of</option>
                                                            <option value="145">Monaco</option>
                                                            <option value="146">Mongolia</option>
                                                            <option value="147">Montenegro</option>
                                                            <option value="148">Montserrat</option>
                                                            <option value="149">Morocco</option>
                                                            <option value="150">Mozambique</option>
                                                            <option value="151">Myanmar</option>
                                                            <option value="152">Namibia</option>
                                                            <option value="153">Nauru</option>
                                                            <option value="154">Nepal</option>
                                                            <option value="155">Netherlands</option>
                                                            <option value="156">Netherlands Antilles</option>
                                                            <option value="157">New Caledonia</option>
                                                            <option value="158">New Zealand</option>
                                                            <option value="159">Nicaragua</option>
                                                            <option value="160">Niger</option>
                                                            <option value="161">Nigeria</option>
                                                            <option value="162">Niue</option>
                                                            <option value="163">Norfolk Island</option>
                                                            <option value="164">Northern Mariana Islands</option>
                                                            <option value="165">Norway</option>
                                                            <option value="166">Oman</option>
                                                            <option value="167">Pakistan</option>
                                                            <option value="168">Palau</option>
                                                            <option value="169">Palestine</option>
                                                            <option value="170">Panama</option>
                                                            <option value="171">Papua New Guinea</option>
                                                            <option value="172">Paraguay</option>
                                                            <option value="173">Peru</option>
                                                            <option value="174">Philippines</option>
                                                            <option value="175">Pitcairn</option>
                                                            <option value="176">Poland</option>
                                                            <option value="177">Portugal</option>
                                                            <option value="178">Puerto Rico</option>
                                                            <option value="179">Qatar</option>
                                                            <option value="180">Reunion</option>
                                                            <option value="181">Romania</option>
                                                            <option value="182">Russian Federation</option>
                                                            <option value="183">Rwanda</option>
                                                            <option value="184">Saint Kitts and Nevis</option>
                                                            <option value="185">Saint Lucia</option>
                                                            <option value="186">Saint Vincent and the Grenadines
                                                            </option>
                                                            <option value="187">Samoa</option>
                                                            <option value="188">San Marino</option>
                                                            <option value="189">Sao Tome and Principe</option>
                                                            <option value="190">Saudi Arabia</option>
                                                            <option value="191">Senegal</option>
                                                            <option value="192">Serbia</option>
                                                            <option value="193">Seychelles</option>
                                                            <option value="194">Sierra Leone</option>
                                                            <option value="195">Singapore</option>
                                                            <option value="196">Slovakia</option>
                                                            <option value="197">Slovenia</option>
                                                            <option value="198">Solomon Islands</option>
                                                            <option value="199">Somalia</option>
                                                            <option value="200">South Africa</option>
                                                            <option value="201">South Georgia South Sandwich Islands
                                                            </option>
                                                            <option value="202">Spain</option>
                                                            <option value="203">Sri Lanka</option>
                                                            <option value="204">St. Helena</option>
                                                            <option value="205">St. Pierre and Miquelon</option>
                                                            <option value="206">Sudan</option>
                                                            <option value="207">Suriname</option>
                                                            <option value="208">Svalbard and Jan Mayen Islands
                                                            </option>
                                                            <option value="209">Swaziland</option>
                                                            <option value="210">Sweden</option>
                                                            <option value="211">Switzerland</option>
                                                            <option value="212">Syrian Arab Republic</option>
                                                            <option value="213">Taiwan</option>
                                                            <option value="214">Tajikistan</option>
                                                            <option value="215">Tanzania, United Republic of
                                                            </option>
                                                            <option value="216">Thailand</option>
                                                            <option value="217">Togo</option>
                                                            <option value="218">Tokelau</option>
                                                            <option value="219">Tonga</option>
                                                            <option value="220">Trinidad and Tobago</option>
                                                            <option value="221">Tunisia</option>
                                                            <option value="222">Turkey</option>
                                                            <option value="223">Turkmenistan</option>
                                                            <option value="224">Turks and Caicos Islands</option>
                                                            <option value="225">Tuvalu</option>
                                                            <option value="226">Uganda</option>
                                                            <option value="227">Ukraine</option>
                                                            <option value="228">United Arab Emirates</option>
                                                            <option value="229">United Kingdom</option>
                                                            <option value="230">United States</option>
                                                            <option value="231">United States minor outlying islands
                                                            </option>
                                                            <option value="232">Uruguay</option>
                                                            <option value="233">Uzbekistan</option>
                                                            <option value="234">Vanuatu</option>
                                                            <option value="235">Vatican City State</option>
                                                            <option value="236">Venezuela</option>
                                                            <option value="237">Vietnam</option>
                                                            <option value="238">Virgin Islands (British)</option>
                                                            <option value="239">Virgin Islands (U.S.)</option>
                                                            <option value="240">Wallis and Futuna Islands</option>
                                                            <option value="241">Western Sahara</option>
                                                            <option value="242">Yemen</option>
                                                            <option value="243">Zaire</option>
                                                            <option value="244">Zambia</option>
                                                            <option value="245">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="addressname"
                                                                value="#1234, Sks Nagar, Near MBD Mall, 141001 Ludhiana, Punjab, India"
                                                                id="id_address1" required="" maxlength="64"
                                                                placeholder="Address Line 1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="addressname2" id="id_address2" required=""
                                                                maxlength="64" placeholder="Address Line 2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="city" value="Ludhiana" id="id_city"
                                                                required="" maxlength="64" placeholder="City">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="state" value="Punjab" id="id_state"
                                                                required="" maxlength="64"
                                                                placeholder="State / Province / Region">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="zip" value="141001" id="id_zip"
                                                                required="" maxlength="64"
                                                                placeholder="Zip / Postal Code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="ui search focus mt-30">
                                                        <div class="ui left icon input swdh11 swdh19">
                                                            <input class="prompt srch_explore" type="text"
                                                                name="phone" value="+911234567890" id="id_phone"
                                                                required="" maxlength="12" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-1 mb-50"></div>
                                <div class="basic_form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="basic_ptitle">
                                                <h4>Exclusive Sales</h4>
                                                <p>Sell more of your exclusive products of this type (equal to the
                                                    amount on the left) to get % cut from further exclusive sales.</p>
                                            </div>
                                            <div class="billing-percentages">
                                                <div class="billing-percentages-progress-bar">
                                                    <ul class="billing-percentages-progress-bar__labels">
                                                        <li>
                                                            <div
                                                                class="billing-percentages-progress-bar__label billing-percentages-progress-bar__label_zero-level">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$0</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">50%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$2,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">53%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$8,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">55%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$18,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">58%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$40,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">62%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$75,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">70%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$100,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">80%</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="basic_form mt-50">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="basic_ptitle">
                                                <h4>Non-Exclusive Sales</h4>
                                                <p>Sell more of your non-exclusive products of this type (equal to the
                                                    amount on the left) to get 70% cut from every non-exclusive sales.
                                                </p>
                                            </div>
                                            <div class="billing-percentages">
                                                <div class="billing-percentages-progress-bar">
                                                    <ul class="billing-percentages-progress-bar__labels">
                                                        <li>
                                                            <div
                                                                class="billing-percentages-progress-bar__label billing-percentages-progress-bar__label_zero-level">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$0</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">30%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$2,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">30%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$8,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">30%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$18,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">30%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$40,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">30%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$75,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">30%</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="billing-percentages-progress-bar__label">
                                                                <span class="billing-percentages-progress-bar__profit t5">
                                                                    <strong class="format-currency ">$100,000</strong>
                                                                </span>
                                                                <span
                                                                    class="billing-percentages-progress-bar__percent t5">30%</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-1 mb-50"></div>
                                <div class="basic_form mt-50">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="basic_ptitle">
                                                <h4>Withrawal Method</h4>
                                            </div>
                                            <div class="rpt100 mt-30">
                                                <ul class="radio--group-inline-container_1">
                                                    <li>
                                                        <div class="radio-item_1">
                                                            <input id="paypal1" value="payal" name="paymentmethod"
                                                                type="radio" data-minimum="50.0">
                                                            <label for="paypal1" class="radio-label_1">Paypal</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-item_1">
                                                            <input id="payoneer1" value="payoneer" name="paymentmethod"
                                                                type="radio" data-minimum="50.0">
                                                            <label for="payoneer1" class="radio-label_1">Payoneer</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-item_1">
                                                            <input id="swift1" value="swift" name="paymentmethod"
                                                                type="radio" data-minimum="500.0">
                                                            <label for="swift1" class="radio-label_1">Swift</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group return-departure-dts" data-method="payal">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="pymnt_title">
                                                            <h4>Your PayPal Account</h4>
                                                            <span>Minimum - $50.00</span>
                                                            <p>Get paid by credit or debit card, PayPal transfer or even
                                                                via bank account in just a few clicks. All you need is
                                                                your email address or mobile number. <a href="#">More
                                                                    about PayPal</a> | <a href="#">Create an
                                                                    account</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="ui search focus mt-30">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="email"
                                                                    name="emailaddress" value="" id="id_email"
                                                                    required="" maxlength="64"
                                                                    placeholder="Email address">
                                                            </div>
                                                        </div>
                                                        <div class="ui search focus mt-20">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="email"
                                                                    name="cemailaddress" value="" id="id_emailc"
                                                                    required="" maxlength="64"
                                                                    placeholder="Confirm email address">
                                                            </div>
                                                        </div>
                                                        <button class="save_payout_btn" type="submit">Set Payout
                                                            Account</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group return-departure-dts" data-method="payoneer">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="pymnt_title">
                                                            <h4>Your Payoneer Account</h4>
                                                            <span>Minimum - $50.00</span>
                                                            <p>Payoneer Prepaid MasterCard® or Global Bank Transfer
                                                                (Payoneer) offers an easy, convenient and cost effective
                                                                way to get paid. <a href="#">More about Payoneer
                                                                </a> | <a href="#">Payoneer FAQs</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="ui search focus mt-30">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="email"
                                                                    name="emailaddress1" value="" id="id_email1"
                                                                    required="" maxlength="64"
                                                                    placeholder="Email address">
                                                            </div>
                                                        </div>
                                                        <div class="ui search focus mt-20">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="email"
                                                                    name="cemailaddress1" value="" id="id_emailc1"
                                                                    required="" maxlength="64"
                                                                    placeholder="Confirm email address">
                                                            </div>
                                                        </div>
                                                        <button class="save_payout_btn" type="submit">Set Payout
                                                            Account</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group return-departure-dts" data-method="swift">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="pymnt_title">
                                                            <h4>Your SWIFT Account</h4>
                                                            <span>Minimum - $500.00</span>
                                                            <p>SWIFT (International Transfer) get paid directly into
                                                                your bank account. Connected with over 9000 banking
                                                                organisations, security institutions and customers in
                                                                more than 200 countries <a href="#">More about
                                                                    SWIFT</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="ui search focus mt-30">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="fullname" value="" id="id_fullname"
                                                                    required="" maxlength="64"
                                                                    placeholder="Full Name">
                                                            </div>
                                                        </div>
                                                        <div class="ui search focus mt-15">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="uraddress" value="" id="id_address4"
                                                                    required="" maxlength="64"
                                                                    placeholder="Your Address">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ui fluid search selection dropdown focus mt-15 cntry152">
                                                            <input type="hidden" name="country"
                                                                class="prompt srch_explore">
                                                            <i class="dropdown icon"></i>
                                                            <div class="default text">Select Country</div>
                                                            <div class="menu">
                                                                <div class="item" data-value="af"><i
                                                                        class="af flag"></i>Afghanistan</div>
                                                                <div class="item" data-value="ax"><i
                                                                        class="ax flag"></i>Aland Islands</div>
                                                                <div class="item" data-value="al"><i
                                                                        class="al flag"></i>Albania</div>
                                                                <div class="item" data-value="dz"><i
                                                                        class="dz flag"></i>Algeria</div>
                                                                <div class="item" data-value="as"><i
                                                                        class="as flag"></i>American Samoa</div>
                                                                <div class="item" data-value="ad"><i
                                                                        class="ad flag"></i>Andorra</div>
                                                                <div class="item" data-value="ao"><i
                                                                        class="ao flag"></i>Angola</div>
                                                                <div class="item" data-value="ai"><i
                                                                        class="ai flag"></i>Anguilla</div>
                                                                <div class="item" data-value="ag"><i
                                                                        class="ag flag"></i>Antigua</div>
                                                                <div class="item" data-value="ar"><i
                                                                        class="ar flag"></i>Argentina</div>
                                                                <div class="item" data-value="am"><i
                                                                        class="am flag"></i>Armenia</div>
                                                                <div class="item" data-value="aw"><i
                                                                        class="aw flag"></i>Aruba</div>
                                                                <div class="item" data-value="au"><i
                                                                        class="au flag"></i>Australia</div>
                                                                <div class="item" data-value="at"><i
                                                                        class="at flag"></i>Austria</div>
                                                                <div class="item" data-value="az"><i
                                                                        class="az flag"></i>Azerbaijan</div>
                                                                <div class="item" data-value="bs"><i
                                                                        class="bs flag"></i>Bahamas</div>
                                                                <div class="item" data-value="bh"><i
                                                                        class="bh flag"></i>Bahrain</div>
                                                                <div class="item" data-value="bd"><i
                                                                        class="bd flag"></i>Bangladesh</div>
                                                                <div class="item" data-value="bb"><i
                                                                        class="bb flag"></i>Barbados</div>
                                                                <div class="item" data-value="by"><i
                                                                        class="by flag"></i>Belarus</div>
                                                                <div class="item" data-value="be"><i
                                                                        class="be flag"></i>Belgium</div>
                                                                <div class="item" data-value="bz"><i
                                                                        class="bz flag"></i>Belize</div>
                                                                <div class="item" data-value="bj"><i
                                                                        class="bj flag"></i>Benin</div>
                                                                <div class="item" data-value="bm"><i
                                                                        class="bm flag"></i>Bermuda</div>
                                                                <div class="item" data-value="bt"><i
                                                                        class="bt flag"></i>Bhutan</div>
                                                                <div class="item" data-value="bo"><i
                                                                        class="bo flag"></i>Bolivia</div>
                                                                <div class="item" data-value="ba"><i
                                                                        class="ba flag"></i>Bosnia</div>
                                                                <div class="item" data-value="bw"><i
                                                                        class="bw flag"></i>Botswana</div>
                                                                <div class="item" data-value="bv"><i
                                                                        class="bv flag"></i>Bouvet Island</div>
                                                                <div class="item" data-value="br"><i
                                                                        class="br flag"></i>Brazil</div>
                                                                <div class="item" data-value="vg"><i
                                                                        class="vg flag"></i>British Virgin Islands
                                                                </div>
                                                                <div class="item" data-value="bn"><i
                                                                        class="bn flag"></i>Brunei</div>
                                                                <div class="item" data-value="bg"><i
                                                                        class="bg flag"></i>Bulgaria</div>
                                                                <div class="item" data-value="bf"><i
                                                                        class="bf flag"></i>Burkina Faso</div>
                                                                <div class="item" data-value="mm"><i
                                                                        class="mm flag"></i>Burma</div>
                                                                <div class="item" data-value="bi"><i
                                                                        class="bi flag"></i>Burundi</div>
                                                                <div class="item" data-value="tc"><i
                                                                        class="tc flag"></i>Caicos Islands</div>
                                                                <div class="item" data-value="kh"><i
                                                                        class="kh flag"></i>Cambodia</div>
                                                                <div class="item" data-value="cm"><i
                                                                        class="cm flag"></i>Cameroon</div>
                                                                <div class="item" data-value="ca"><i
                                                                        class="ca flag"></i>Canada</div>
                                                                <div class="item" data-value="cv"><i
                                                                        class="cv flag"></i>Cape Verde</div>
                                                                <div class="item" data-value="ky"><i
                                                                        class="ky flag"></i>Cayman Islands</div>
                                                                <div class="item" data-value="cf"><i
                                                                        class="cf flag"></i>Central African Republic
                                                                </div>
                                                                <div class="item" data-value="td"><i
                                                                        class="td flag"></i>Chad</div>
                                                                <div class="item" data-value="cl"><i
                                                                        class="cl flag"></i>Chile</div>
                                                                <div class="item" data-value="cn"><i
                                                                        class="cn flag"></i>China</div>
                                                                <div class="item" data-value="cx"><i
                                                                        class="cx flag"></i>Christmas Island</div>
                                                                <div class="item" data-value="cc"><i
                                                                        class="cc flag"></i>Cocos Islands</div>
                                                                <div class="item" data-value="co"><i
                                                                        class="co flag"></i>Colombia</div>
                                                                <div class="item" data-value="km"><i
                                                                        class="km flag"></i>Comoros</div>
                                                                <div class="item" data-value="cg"><i
                                                                        class="cg flag"></i>Congo Brazzaville</div>
                                                                <div class="item" data-value="cd"><i
                                                                        class="cd flag"></i>Congo</div>
                                                                <div class="item" data-value="ck"><i
                                                                        class="ck flag"></i>Cook Islands</div>
                                                                <div class="item" data-value="cr"><i
                                                                        class="cr flag"></i>Costa Rica</div>
                                                                <div class="item" data-value="ci"><i
                                                                        class="ci flag"></i>Cote Divoire</div>
                                                                <div class="item" data-value="hr"><i
                                                                        class="hr flag"></i>Croatia</div>
                                                                <div class="item" data-value="cu"><i
                                                                        class="cu flag"></i>Cuba</div>
                                                                <div class="item" data-value="cy"><i
                                                                        class="cy flag"></i>Cyprus</div>
                                                                <div class="item" data-value="cz"><i
                                                                        class="cz flag"></i>Czech Republic</div>
                                                                <div class="item" data-value="dk"><i
                                                                        class="dk flag"></i>Denmark</div>
                                                                <div class="item" data-value="dj"><i
                                                                        class="dj flag"></i>Djibouti</div>
                                                                <div class="item" data-value="dm"><i
                                                                        class="dm flag"></i>Dominica</div>
                                                                <div class="item" data-value="do"><i
                                                                        class="do flag"></i>Dominican Republic</div>
                                                                <div class="item" data-value="ec"><i
                                                                        class="ec flag"></i>Ecuador</div>
                                                                <div class="item" data-value="eg"><i
                                                                        class="eg flag"></i>Egypt</div>
                                                                <div class="item" data-value="sv"><i
                                                                        class="sv flag"></i>El Salvador</div>
                                                                <div class="item" data-value="gb"><i
                                                                        class="gb flag"></i>England</div>
                                                                <div class="item" data-value="gq"><i
                                                                        class="gq flag"></i>Equatorial Guinea</div>
                                                                <div class="item" data-value="er"><i
                                                                        class="er flag"></i>Eritrea</div>
                                                                <div class="item" data-value="ee"><i
                                                                        class="ee flag"></i>Estonia</div>
                                                                <div class="item" data-value="et"><i
                                                                        class="et flag"></i>Ethiopia</div>
                                                                <div class="item" data-value="eu"><i
                                                                        class="eu flag"></i>European Union</div>
                                                                <div class="item" data-value="fk"><i
                                                                        class="fk flag"></i>Falkland Islands</div>
                                                                <div class="item" data-value="fo"><i
                                                                        class="fo flag"></i>Faroe Islands</div>
                                                                <div class="item" data-value="fj"><i
                                                                        class="fj flag"></i>Fiji</div>
                                                                <div class="item" data-value="fi"><i
                                                                        class="fi flag"></i>Finland</div>
                                                                <div class="item" data-value="fr"><i
                                                                        class="fr flag"></i>France</div>
                                                                <div class="item" data-value="gf"><i
                                                                        class="gf flag"></i>French Guiana</div>
                                                                <div class="item" data-value="pf"><i
                                                                        class="pf flag"></i>French Polynesia</div>
                                                                <div class="item" data-value="tf"><i
                                                                        class="tf flag"></i>French Territories</div>
                                                                <div class="item" data-value="ga"><i
                                                                        class="ga flag"></i>Gabon</div>
                                                                <div class="item" data-value="gm"><i
                                                                        class="gm flag"></i>Gambia</div>
                                                                <div class="item" data-value="ge"><i
                                                                        class="ge flag"></i>Georgia</div>
                                                                <div class="item" data-value="de"><i
                                                                        class="de flag"></i>Germany</div>
                                                                <div class="item" data-value="gh"><i
                                                                        class="gh flag"></i>Ghana</div>
                                                                <div class="item" data-value="gi"><i
                                                                        class="gi flag"></i>Gibraltar</div>
                                                                <div class="item" data-value="gr"><i
                                                                        class="gr flag"></i>Greece</div>
                                                                <div class="item" data-value="gl"><i
                                                                        class="gl flag"></i>Greenland</div>
                                                                <div class="item" data-value="gd"><i
                                                                        class="gd flag"></i>Grenada</div>
                                                                <div class="item" data-value="gp"><i
                                                                        class="gp flag"></i>Guadeloupe</div>
                                                                <div class="item" data-value="gu"><i
                                                                        class="gu flag"></i>Guam</div>
                                                                <div class="item" data-value="gt"><i
                                                                        class="gt flag"></i>Guatemala</div>
                                                                <div class="item" data-value="gw"><i
                                                                        class="gw flag"></i>Guinea-Bissau</div>
                                                                <div class="item" data-value="gn"><i
                                                                        class="gn flag"></i>Guinea</div>
                                                                <div class="item" data-value="gy"><i
                                                                        class="gy flag"></i>Guyana</div>
                                                                <div class="item" data-value="ht"><i
                                                                        class="ht flag"></i>Haiti</div>
                                                                <div class="item" data-value="hm"><i
                                                                        class="hm flag"></i>Heard Island</div>
                                                                <div class="item" data-value="hn"><i
                                                                        class="hn flag"></i>Honduras</div>
                                                                <div class="item" data-value="hk"><i
                                                                        class="hk flag"></i>Hong Kong</div>
                                                                <div class="item" data-value="hu"><i
                                                                        class="hu flag"></i>Hungary</div>
                                                                <div class="item" data-value="is"><i
                                                                        class="is flag"></i>Iceland</div>
                                                                <div class="item" data-value="in"><i
                                                                        class="in flag"></i>India</div>
                                                                <div class="item" data-value="io"><i
                                                                        class="io flag"></i>Indian Ocean Territory
                                                                </div>
                                                                <div class="item" data-value="id"><i
                                                                        class="id flag"></i>Indonesia</div>
                                                                <div class="item" data-value="ir"><i
                                                                        class="ir flag"></i>Iran</div>
                                                                <div class="item" data-value="iq"><i
                                                                        class="iq flag"></i>Iraq</div>
                                                                <div class="item" data-value="ie"><i
                                                                        class="ie flag"></i>Ireland</div>
                                                                <div class="item" data-value="il"><i
                                                                        class="il flag"></i>Israel</div>
                                                                <div class="item" data-value="it"><i
                                                                        class="it flag"></i>Italy</div>
                                                                <div class="item" data-value="jm"><i
                                                                        class="jm flag"></i>Jamaica</div>
                                                                <div class="item" data-value="jp"><i
                                                                        class="jp flag"></i>Japan</div>
                                                                <div class="item" data-value="jo"><i
                                                                        class="jo flag"></i>Jordan</div>
                                                                <div class="item" data-value="kz"><i
                                                                        class="kz flag"></i>Kazakhstan</div>
                                                                <div class="item" data-value="ke"><i
                                                                        class="ke flag"></i>Kenya</div>
                                                                <div class="item" data-value="ki"><i
                                                                        class="ki flag"></i>Kiribati</div>
                                                                <div class="item" data-value="kw"><i
                                                                        class="kw flag"></i>Kuwait</div>
                                                                <div class="item" data-value="kg"><i
                                                                        class="kg flag"></i>Kyrgyzstan</div>
                                                                <div class="item" data-value="la"><i
                                                                        class="la flag"></i>Laos</div>
                                                                <div class="item" data-value="lv"><i
                                                                        class="lv flag"></i>Latvia</div>
                                                                <div class="item" data-value="lb"><i
                                                                        class="lb flag"></i>Lebanon</div>
                                                                <div class="item" data-value="ls"><i
                                                                        class="ls flag"></i>Lesotho</div>
                                                                <div class="item" data-value="lr"><i
                                                                        class="lr flag"></i>Liberia</div>
                                                                <div class="item" data-value="ly"><i
                                                                        class="ly flag"></i>Libya</div>
                                                                <div class="item" data-value="li"><i
                                                                        class="li flag"></i>Liechtenstein</div>
                                                                <div class="item" data-value="lt"><i
                                                                        class="lt flag"></i>Lithuania</div>
                                                                <div class="item" data-value="lu"><i
                                                                        class="lu flag"></i>Luxembourg</div>
                                                                <div class="item" data-value="mo"><i
                                                                        class="mo flag"></i>Macau</div>
                                                                <div class="item" data-value="mk"><i
                                                                        class="mk flag"></i>Macedonia</div>
                                                                <div class="item" data-value="mg"><i
                                                                        class="mg flag"></i>Madagascar</div>
                                                                <div class="item" data-value="mw"><i
                                                                        class="mw flag"></i>Malawi</div>
                                                                <div class="item" data-value="my"><i
                                                                        class="my flag"></i>Malaysia</div>
                                                                <div class="item" data-value="mv"><i
                                                                        class="mv flag"></i>Maldives</div>
                                                                <div class="item" data-value="ml"><i
                                                                        class="ml flag"></i>Mali</div>
                                                                <div class="item" data-value="mt"><i
                                                                        class="mt flag"></i>Malta</div>
                                                                <div class="item" data-value="mh"><i
                                                                        class="mh flag"></i>Marshall Islands</div>
                                                                <div class="item" data-value="mq"><i
                                                                        class="mq flag"></i>Martinique</div>
                                                                <div class="item" data-value="mr"><i
                                                                        class="mr flag"></i>Mauritania</div>
                                                                <div class="item" data-value="mu"><i
                                                                        class="mu flag"></i>Mauritius</div>
                                                                <div class="item" data-value="yt"><i
                                                                        class="yt flag"></i>Mayotte</div>
                                                                <div class="item" data-value="mx"><i
                                                                        class="mx flag"></i>Mexico</div>
                                                                <div class="item" data-value="fm"><i
                                                                        class="fm flag"></i>Micronesia</div>
                                                                <div class="item" data-value="md"><i
                                                                        class="md flag"></i>Moldova</div>
                                                                <div class="item" data-value="mc"><i
                                                                        class="mc flag"></i>Monaco</div>
                                                                <div class="item" data-value="mn"><i
                                                                        class="mn flag"></i>Mongolia</div>
                                                                <div class="item" data-value="me"><i
                                                                        class="me flag"></i>Montenegro</div>
                                                                <div class="item" data-value="ms"><i
                                                                        class="ms flag"></i>Montserrat</div>
                                                                <div class="item" data-value="ma"><i
                                                                        class="ma flag"></i>Morocco</div>
                                                                <div class="item" data-value="mz"><i
                                                                        class="mz flag"></i>Mozambique</div>
                                                                <div class="item" data-value="na"><i
                                                                        class="na flag"></i>Namibia</div>
                                                                <div class="item" data-value="nr"><i
                                                                        class="nr flag"></i>Nauru</div>
                                                                <div class="item" data-value="np"><i
                                                                        class="np flag"></i>Nepal</div>
                                                                <div class="item" data-value="an"><i
                                                                        class="an flag"></i>Netherlands Antilles</div>
                                                                <div class="item" data-value="nl"><i
                                                                        class="nl flag"></i>Netherlands</div>
                                                                <div class="item" data-value="nc"><i
                                                                        class="nc flag"></i>New Caledonia</div>
                                                                <div class="item" data-value="pg"><i
                                                                        class="pg flag"></i>New Guinea</div>
                                                                <div class="item" data-value="nz"><i
                                                                        class="nz flag"></i>New Zealand</div>
                                                                <div class="item" data-value="ni"><i
                                                                        class="ni flag"></i>Nicaragua</div>
                                                                <div class="item" data-value="ne"><i
                                                                        class="ne flag"></i>Niger</div>
                                                                <div class="item" data-value="ng"><i
                                                                        class="ng flag"></i>Nigeria</div>
                                                                <div class="item" data-value="nu"><i
                                                                        class="nu flag"></i>Niue</div>
                                                                <div class="item" data-value="nf"><i
                                                                        class="nf flag"></i>Norfolk Island</div>
                                                                <div class="item" data-value="kp"><i
                                                                        class="kp flag"></i>North Korea</div>
                                                                <div class="item" data-value="mp"><i
                                                                        class="mp flag"></i>Northern Mariana Islands
                                                                </div>
                                                                <div class="item" data-value="no"><i
                                                                        class="no flag"></i>Norway</div>
                                                                <div class="item" data-value="om"><i
                                                                        class="om flag"></i>Oman</div>
                                                                <div class="item" data-value="pk"><i
                                                                        class="pk flag"></i>Pakistan</div>
                                                                <div class="item" data-value="pw"><i
                                                                        class="pw flag"></i>Palau</div>
                                                                <div class="item" data-value="ps"><i
                                                                        class="ps flag"></i>Palestine</div>
                                                                <div class="item" data-value="pa"><i
                                                                        class="pa flag"></i>Panama</div>
                                                                <div class="item" data-value="py"><i
                                                                        class="py flag"></i>Paraguay</div>
                                                                <div class="item" data-value="pe"><i
                                                                        class="pe flag"></i>Peru</div>
                                                                <div class="item" data-value="ph"><i
                                                                        class="ph flag"></i>Philippines</div>
                                                                <div class="item" data-value="pn"><i
                                                                        class="pn flag"></i>Pitcairn Islands</div>
                                                                <div class="item" data-value="pl"><i
                                                                        class="pl flag"></i>Poland</div>
                                                                <div class="item" data-value="pt"><i
                                                                        class="pt flag"></i>Portugal</div>
                                                                <div class="item" data-value="pr"><i
                                                                        class="pr flag"></i>Puerto Rico</div>
                                                                <div class="item" data-value="qa"><i
                                                                        class="qa flag"></i>Qatar</div>
                                                                <div class="item" data-value="re"><i
                                                                        class="re flag"></i>Reunion</div>
                                                                <div class="item" data-value="ro"><i
                                                                        class="ro flag"></i>Romania</div>
                                                                <div class="item" data-value="ru"><i
                                                                        class="ru flag"></i>Russia</div>
                                                                <div class="item" data-value="rw"><i
                                                                        class="rw flag"></i>Rwanda</div>
                                                                <div class="item" data-value="sh"><i
                                                                        class="sh flag"></i>Saint Helena</div>
                                                                <div class="item" data-value="kn"><i
                                                                        class="kn flag"></i>Saint Kitts and Nevis
                                                                </div>
                                                                <div class="item" data-value="lc"><i
                                                                        class="lc flag"></i>Saint Lucia</div>
                                                                <div class="item" data-value="pm"><i
                                                                        class="pm flag"></i>Saint Pierre</div>
                                                                <div class="item" data-value="vc"><i
                                                                        class="vc flag"></i>Saint Vincent</div>
                                                                <div class="item" data-value="ws"><i
                                                                        class="ws flag"></i>Samoa</div>
                                                                <div class="item" data-value="sm"><i
                                                                        class="sm flag"></i>San Marino</div>
                                                                <div class="item" data-value="gs"><i
                                                                        class="gs flag"></i>Sandwich Islands</div>
                                                                <div class="item" data-value="st"><i
                                                                        class="st flag"></i>Sao Tome</div>
                                                                <div class="item" data-value="sa"><i
                                                                        class="sa flag"></i>Saudi Arabia</div>
                                                                <div class="item" data-value="sn"><i
                                                                        class="sn flag"></i>Senegal</div>
                                                                <div class="item" data-value="cs"><i
                                                                        class="cs flag"></i>Serbia</div>
                                                                <div class="item" data-value="rs"><i
                                                                        class="rs flag"></i>Serbia</div>
                                                                <div class="item" data-value="sc"><i
                                                                        class="sc flag"></i>Seychelles</div>
                                                                <div class="item" data-value="sl"><i
                                                                        class="sl flag"></i>Sierra Leone</div>
                                                                <div class="item" data-value="sg"><i
                                                                        class="sg flag"></i>Singapore</div>
                                                                <div class="item" data-value="sk"><i
                                                                        class="sk flag"></i>Slovakia</div>
                                                                <div class="item" data-value="si"><i
                                                                        class="si flag"></i>Slovenia</div>
                                                                <div class="item" data-value="sb"><i
                                                                        class="sb flag"></i>Solomon Islands</div>
                                                                <div class="item" data-value="so"><i
                                                                        class="so flag"></i>Somalia</div>
                                                                <div class="item" data-value="za"><i
                                                                        class="za flag"></i>South Africa</div>
                                                                <div class="item" data-value="kr"><i
                                                                        class="kr flag"></i>South Korea</div>
                                                                <div class="item" data-value="es"><i
                                                                        class="es flag"></i>Spain</div>
                                                                <div class="item" data-value="lk"><i
                                                                        class="lk flag"></i>Sri Lanka</div>
                                                                <div class="item" data-value="sd"><i
                                                                        class="sd flag"></i>Sudan</div>
                                                                <div class="item" data-value="sr"><i
                                                                        class="sr flag"></i>Suriname</div>
                                                                <div class="item" data-value="sj"><i
                                                                        class="sj flag"></i>Svalbard</div>
                                                                <div class="item" data-value="sz"><i
                                                                        class="sz flag"></i>Swaziland</div>
                                                                <div class="item" data-value="se"><i
                                                                        class="se flag"></i>Sweden</div>
                                                                <div class="item" data-value="ch"><i
                                                                        class="ch flag"></i>Switzerland</div>
                                                                <div class="item" data-value="sy"><i
                                                                        class="sy flag"></i>Syria</div>
                                                                <div class="item" data-value="tw"><i
                                                                        class="tw flag"></i>Taiwan</div>
                                                                <div class="item" data-value="tj"><i
                                                                        class="tj flag"></i>Tajikistan</div>
                                                                <div class="item" data-value="tz"><i
                                                                        class="tz flag"></i>Tanzania</div>
                                                                <div class="item" data-value="th"><i
                                                                        class="th flag"></i>Thailand</div>
                                                                <div class="item" data-value="tl"><i
                                                                        class="tl flag"></i>Timorleste</div>
                                                                <div class="item" data-value="tg"><i
                                                                        class="tg flag"></i>Togo</div>
                                                                <div class="item" data-value="tk"><i
                                                                        class="tk flag"></i>Tokelau</div>
                                                                <div class="item" data-value="to"><i
                                                                        class="to flag"></i>Tonga</div>
                                                                <div class="item" data-value="tt"><i
                                                                        class="tt flag"></i>Trinidad</div>
                                                                <div class="item" data-value="tn"><i
                                                                        class="tn flag"></i>Tunisia</div>
                                                                <div class="item" data-value="tr"><i
                                                                        class="tr flag"></i>Turkey</div>
                                                                <div class="item" data-value="tm"><i
                                                                        class="tm flag"></i>Turkmenistan</div>
                                                                <div class="item" data-value="tv"><i
                                                                        class="tv flag"></i>Tuvalu</div>
                                                                <div class="item" data-value="ug"><i
                                                                        class="ug flag"></i>Uganda</div>
                                                                <div class="item" data-value="ua"><i
                                                                        class="ua flag"></i>Ukraine</div>
                                                                <div class="item" data-value="ae"><i
                                                                        class="ae flag"></i>United Arab Emirates</div>
                                                                <div class="item" data-value="us"><i
                                                                        class="us flag"></i>United States</div>
                                                                <div class="item" data-value="uy"><i
                                                                        class="uy flag"></i>Uruguay</div>
                                                                <div class="item" data-value="um"><i
                                                                        class="um flag"></i>Us Minor Islands</div>
                                                                <div class="item" data-value="vi"><i
                                                                        class="vi flag"></i>Us Virgin Islands</div>
                                                                <div class="item" data-value="uz"><i
                                                                        class="uz flag"></i>Uzbekistan</div>
                                                                <div class="item" data-value="vu"><i
                                                                        class="vu flag"></i>Vanuatu</div>
                                                                <div class="item" data-value="va"><i
                                                                        class="va flag"></i>Vatican City</div>
                                                                <div class="item" data-value="ve"><i
                                                                        class="ve flag"></i>Venezuela</div>
                                                                <div class="item" data-value="vn"><i
                                                                        class="vn flag"></i>Vietnam</div>
                                                                <div class="item" data-value="wf"><i
                                                                        class="wf flag"></i>Wallis and Futuna</div>
                                                                <div class="item" data-value="eh"><i
                                                                        class="eh flag"></i>Western Sahara</div>
                                                                <div class="item" data-value="ye"><i
                                                                        class="ye flag"></i>Yemen</div>
                                                                <div class="item" data-value="zm"><i
                                                                        class="zm flag"></i>Zambia</div>
                                                                <div class="item" data-value="zw"><i
                                                                        class="zw flag"></i>Zimbabwe</div>
                                                            </div>
                                                        </div>
                                                        <div class="ui search focus mt-15">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="swiftcode" value="" id="id_swiftcode"
                                                                    required="" maxlength="64"
                                                                    placeholder="Swift-Code">
                                                            </div>
                                                        </div>
                                                        <div class="ui search focus mt-15">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="banknumber" value=""
                                                                    id="id_banknumber" required="" maxlength="64"
                                                                    placeholder="Back Account Number">
                                                            </div>
                                                        </div>
                                                        <div class="ui search focus mt-15">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="bankname" value="" id="id_bankname"
                                                                    required="" maxlength="64"
                                                                    placeholder="Back Name">
                                                            </div>
                                                        </div>
                                                        <div class="ui search focus mt-15">
                                                            <div class="ui left icon input swdh11 swdh19">
                                                                <input class="prompt srch_explore" type="text"
                                                                    name="address5" value="" id="id_address5"
                                                                    required="" maxlength="64"
                                                                    placeholder="Back Address">
                                                            </div>
                                                        </div>
                                                        <button class="save_payout_btn" type="submit">Set Payout
                                                            Account</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="save_btn" type="submit">Save Changes</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-api" role="tabpanel" aria-labelledby="pills-api-tab">
                            <div class="account_setting">
                                <h4>Affiliate API</h4>
                                <p>The Cursus Affiliate API exposes functionalities of Cursus to help developers build
                                    client applications and integrations with Cursus. <br>To see more details, please
                                    visit <a href="#">Cursus Affiliate API</a></p>
                            </div>
                            <button class="api_btn">Request Affiliate API Client</button>
                            <div class="nt_apt"><i class="uil uil-info-circle"></i> You don't have any API clients
                                yet.</div>
                        </div>
                        <div class="tab-pane fade" id="pills-closeaccount" role="tabpanel"
                            aria-labelledby="pills-closeaccount-tab">
                            <div class="account_setting">
                                <h4>Close account</h4>
                                <p><strong>Warning:</strong> If you close your account, you will be unsubscribed from
                                    all your 5 courses, and will lose access forever.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ui search focus mt-30">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="password" name="yourassword"
                                                id="id_yourpassword" required="" maxlength="64"
                                                placeholder="Enter Your Password">
                                        </div>
                                        <div class="help-block">Are you sure you want to close your account?</div>
                                    </div>
                                    <button class="save_payout_btn mbs20" type="submit">Close Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Body End -->
@endsection
