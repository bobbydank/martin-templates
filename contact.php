<!DOCTYPE html>
<html lang="en">

<?php include '_head.php'; ?>

<body>
  <?php include '_header.php'; ?>

  <!-- Page Hero -->
  <div class="page-hero" style="background-image:url('/assets/imgs/heroes/company.jpg');">
    <section class="py-12 md:py-20 clearfix max-w-screen-2xl mx-auto w-11/12 secondary-font">
      <h1 class="text-white text-right md:text-5xl my-0">Company</h1>
    </section>
  </div>
  <!-- End Page Hero -->

  <!-- Main
  This is will be the main content area. Header and Footer should be the same on all pages. -->
  <main id="main" class="pt-8 pb-24">
    <section class="clearfix max-w-screen-2xl mx-auto w-11/12 md:flex justify-end secondary-font mb-16">
      <ul class="inline-list carrot-seperator uppercase">
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/company.php">Company</a>
        </li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-lg mx-auto w-11/12 md:w-9/12 secondary-font mb-20" data-aos="fade-in">
      <div class="md:mx-8">
        <h2 class="text-primary text-center font-bold">Contact</h2>
      </div>
    </section>

    <section class="py-14 px-14 clearfix max-w-screen-xl mx-auto my-20 w-11/12 b3-shadow" data-aos="fade-up">
      <form action="" method="" enctype="multipart/form-data" class="md:flex md:gap-10">
        <div class="w-full md:w-2/4 text-center md:text-left">
          <select name="" id="">
            <option value="">I would like to:</option>
            <option value="Find Local Martin Facility">Find Local Martin Facility</option>
            <option value="Request Quote">Request Quote</option>
            <option value="Leave General Comment">Leave General Comment</option>
            <option value="Contact Sales">Contact Sales</option>
            <option value="Report Problem">Report Problem</option>
          </select>
          <input type="text" placeholder="Name *" name="" required>
          <input type="text" placeholder="Company" name="">
          <input type="text" placeholder="City" name="">
          <input type="text" placeholder="Postal Code*" name="" required>
          <textarea name="" id="" onblur="if (this.value == '') {this.value = 'Comments';}" onfocus="if (this.value == 'Comments') {this.value = '';}">Comments</textarea>
        </div>
        <div class="w-full md:w-2/4">
          <input type="text" placeholder="Phone Number" name="">
          <input type="email" placeholder="Email *" name="" required>
          <input type="text" placeholder="Address" name="">
          <input type="text" placeholder="State/Province" name="">
          <select name="">
            <option value="-1">Country</option><option value="USA">United States</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BU">Burma (Myanmar)</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island (in the Indian Ocean)</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote d'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curacao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Islas Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern and Antarctic Lands</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GZ">Gaza Strip administered by Israel</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="VA">Holy See</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KV">Kosovo</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States of</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VI">Virgin Islands of the United States</option><option value="WF">Wallis and Futuna</option><option value="WE">West Bank administered by Israel</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
          </select>
          <div class="w-full md:flex items-center">
            <div class="md:w-2/4 md:p-10">
              <p class="secondary-font">Preferred response *</p>
              <input type="radio" id="email" name="contact" value="Email">
              <label for="email">Email</label><br />
              <input type="radio" id="phone" name="contact" value="Phone">
              <label for="phone">Phone</label>
            </div>
            <div class="md:w-2/4 md:p-10">
              <img src="/assets/imgs/captcha.jpg" class="block w-full" alt="">
            </div>
          </div>
          <div class="text-right">
            <input type="submit" value="Submit" class="submit-button">
          </div>
        </div>
      </form>
      <p class="secondary-font">* Required</p>
    </section>

    <section class="py-14 px-14 clearfix max-w-screen-xl mx-auto my-20 w-11/12" data-aos="fade-up">
      <div class="md:flex items-center">
        <div class="w-full md:w-2/4 text-center md:text-left text-xl secondary-font">
          <p class="text-secondary font-extrabold">Corporate Office - Arlington, Texas</p>
          <p>3100 Sprocket Drive<br />Arlington, TX 76015</p>
          <p>Phone: 817.258.3000<br />Fax:  817.258.3333</p>
          <p><a href="#">Contact Branch »</a></p>
        </div>
        <div class="w-full md:w-2/4">
          <div id="mapbox1" class="mapbox border-round">
            <div class="marker" data-lat="32.695030" data-lng="-97.145870"></div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>

</body>
</html>
