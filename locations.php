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
        <li>
          <a href="/locations.php">Locations</a>
        </li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-lg mx-auto w-11/12 md:w-9/12 secondary-font mb-14" data-aos="fade-in">
      <div class="md:mx-8">
        <h2 class="text-primary text-center mb-20">Locations</h2>
        <p>Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit.</p>
      </div>
    </section>

    <section class="clearfix max-w-screen-xl mx-auto secondary-font mb-20" data-aos="fade-in">
      <div class="flex justify-start flex-wrap">
        <div class="w-1/3 md:w-1/6 text-center">
          <a href="#" onclick="b3_bigCat(event, 'usa')" class="p-5 lg:p-10 inline-block">
            <img src="/assets/imgs/flags/usa.svg" class="w-full" alt="United States">
            <p>United States</p>
          </a>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <a href="#" onclick="b3_bigCat(event, 'canada')" class="p-5 lg:p-10 inline-block">
            <img src="/assets/imgs/flags/canada.svg" class="w-full" alt="United States">
            <p>Canada</p>
          </a>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <a href="#" onclick="b3_bigCat(event, 'mexico')" class="p-5 lg:p-10 inline-block">
            <img src="/assets/imgs/flags/mexico.svg" class="w-full" alt="United States">
            <p>Mexico</p>
          </a>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <a href="#" onclick="b3_bigCat(event, 'brazil')" class="p-5 lg:p-10 inline-block">
            <img src="/assets/imgs/flags/brazil.svg" class="w-full" alt="United States">
            <p>Brazil</p>
          </a>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <a href="#" onclick="b3_bigCat(event, 'china')" class="p-5 lg:p-10 inline-block">
            <img src="/assets/imgs/flags/china.svg" class="w-full" alt="United States">
            <p>China</p>
          </a>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <a href="#" onclick="b3_bigCat(event, 'uk')" class="p-5 lg:p-10 inline-block">
            <img src="/assets/imgs/flags/uk.svg" class="w-full" alt="United States">
            <p>United Kingdom</p>
          </a>
        </div>
      </div>
    </section>

    <section class="clearfix" data-aos="fade-in">
      <div class="mapbox category-map" id="full-map" data-whitewater="1">
        <!-- Categories -->
        <div class="marker category" data-category="usa" data-lat="39.8283" data-lng="-98.5795" data-icon="/assets/imgs/flags/usa-pin.png"></div>
        <div class="marker category" data-category="canada" data-lat="56.1304" data-lng="-106.3468" data-icon="/assets/imgs/flags/canada-pin.png"></div>
        <div class="marker category" data-category="mexico" data-lat="23.6345" data-lng="-100.5528" data-icon="/assets/imgs/flags/mexico-pin.png"></div>
        <div class="marker category" data-category="brazil" data-lat="-14.2350" data-lng="-51.9253" data-icon="/assets/imgs/flags/brazil-pin.png"></div>
        <div class="marker category" data-category="china" data-lat="35.8617" data-lng="104.1954" data-icon="/assets/imgs/flags/china-pin.png"></div>
        <div class="marker category" data-category="uk" data-lat="55.3781" data-lng="-3.4360" data-icon="/assets/imgs/flags/uk-pin.png"></div>
        <!-- End Categories -->

        <!-- USA Offices  -->
        <div class="marker location usa" data-lat="32.695030" data-lng="-97.145866" data-color="#F9B23E">
          <img src="/assets/imgs/map-images/corporate.jpg" alt="Corporate Office - Arlington, Texas" />
          <div class="inset">
            <h4>Corporate Office - Arlington, Texas</h4>
            <p>
              3100 Sprocket Drive <br />
              Arlington, TX 76015<br />
              Fax  817-258-3333
            </p>
          </div>
        </div>
        <div class="marker location usa" data-lat="33.624060" data-lng="-95.053010" data-color="#FF0000">
          <img src="/assets/imgs/map-images/clarksville.jpg" alt="Clarksville, Texas" />
          <div class="inset">
            <h4>Clarksville, Texas</h4>
            <p>
              Clarksville, TX 75426 <br />
              Phone 817-258-3000<br />
              Fax 817-258-3333
            </p>
          </div>
        </div>
        <div class="marker location usa" data-lat="39.793780" data-lng="-104.862910" data-color="green">
          <img src="/assets/imgs/map-images/denver3.jpg" alt="Denver, Colorado" />
          <div class="inset">
            <h4>Denver, Colorado</h4>
            <p>
              10800 East 54th Avenue<br />
              Denver, CO 80239<br />
              Phone 303-371-8466<br />
              Fax 303-371-7116
            </p>
          </div>
        </div>
        <!-- End USA Offices  -->

        <!-- Canada Offices  -->
        <div class="marker location canada" data-lat="43.648416" data-lng="-79.666824" data-color="yellow">
          <img src="/assets/imgs/map-images/mississauga.jpg" alt="Mississauga, Ontario" />
          <div class="inset">
            <h4>Mississauga, Ontario</h4>
            <p>
              896 Meyerside Drive<br />
              Mississauga, ON L5T 1R9<br />
              Phone 905-670-1991<br />
              Fax 905-670-2110
            </p>
          </div>
        </div>
        <div class="marker location canada" data-lat="43.283400" data-lng="-80.449680" data-color="yellow">
          <img src="/assets/imgs/map-images/cambridge.jpg" alt="Cambridge, Ontario" />
          <div class="inset">
            <h4>Cambridge, Ontario</h4>
            <p>
              320 Darrell Drive RR1<br />
              Ayr, ON N0B 1E0<br />
              Phone 519-621-0546<br />
              Fax 519-621-4413
            </p>
          </div>
        </div>
        <div class="marker location canada" data-lat="53.508157" data-lng="-113.416269" data-color="green">
          <img src="/assets/imgs/map-images/edmonton.jpg" alt="Edmonton, Alberta" />
          <div class="inset">
            <h4>Edmonton, Alberta</h4>
            <p>
              4027-53 Avenue NW<br />
              Edmonton, AB T6B 3R5<br />
              Phone 780-450-0888<br />
              Fax 780-465-0079
            </p>
          </div>
        </div>
        <!-- End Canada Offices  -->

        <!-- Mexico Offices  -->
        <div class="marker location mexico" data-lat="19.3545406" data-lng="-99.5837632" data-color="yellow">
          <img src="/assets/imgs/map-images/toluca.jpg" alt="Toluca, Mexico" />
          <div class="inset">
            <h4>Toluca, Mexico</h4>
            <p>
              Km. 52 Carretera Naucalpan-Toluca<br />
              Toluca, 50233<br />
              Phone 011-52-722-276-0800<br />
              Fax 011-52-722-276-0801
            </p>
          </div>
        </div>
        <div class="marker location mexico" data-lat="25.7531858" data-lng="-100.1379903" data-color="green">
          <img src="/assets/imgs/map-images/monterrey.jpg" alt="Monterrey, Mexico" />
          <div class="inset">
            <h4>Monterrey, Mexico</h4>
            <p>
              Av. Industrial #100<br />
              Apodaca, NL 66600<br />
              Phone 011-52-81-1156-6830<br />
              Fax 011-52-81-1156-6833
            </p>
          </div>
        </div>
        <div class="marker location mexico" data-lat="20.5998556" data-lng="-103.4040701" data-color="green">
          <img src="/assets/imgs/map-images/guadalajara.jpg" alt="Guadalajara, Mexico" />
          <div class="inset">
            <h4>Guadalajara, Mexico</h4>
            <p>
              Calle Colon Sur No. 6013<br />
              Tlaquepaque, JAL 45601<br />
              Phone 011-52-33-3283-1188<br />
              Fax 011-52-33-3271-8450
            </p>
          </div>
        </div>
        <!-- End Mexico Offices  -->

        <!-- Brazil Offices  -->
        <div class="marker location brazil" data-lat="-22.57869891158651" data-lng="-47.177701815549554" data-color="green">
          <img src="/assets/imgs/map-images/brazil.png" alt="Artur Nogueira, Brazil" />
          <div class="inset">
            <h4>Artur Nogueira, Brazil</h4>
            <p>
              Rodovia SP 332, Km 154,5<br />
              Artur Nogueira, SP 1316-0000<br />
              Phone (19) 38 77 94 00<br />
              Fax 3877-9429
            </p>
          </div>
        </div>
        <!-- End Brazil Offices  -->

        <!-- China Offices  -->
        <div class="marker location china" data-lat="31.462440000000072" data-lng="121.23707000000002" data-color="red">
          <img src="/assets/imgs/map-images/shanghai-1.png" alt="Shanghai, China" />
          <div class="inset">
            <h4>Shanghai, China</h4>
            <p>
              No. 81 Tang Yao Road, Hua Ting Town, Jiading<br />
              Shanghai, PRC 201816<br />
              Phone 6708-4888<br />
              Fax 6708-4889
            </p>
          </div>
        </div>
        <div class="marker location china" data-lat="24.294820000000072" data-lng="116.93651000000011" data-color="red">
          <img src="/assets/imgs/map-images/fuzhou.jpg" alt="Fuzhou, China" />
          <div class="inset">
            <h4>Fuzhou, China</h4>
            <p>
              Zhuhu Village, Shouzhan Town, Changle<br />
              Fujian Province, PRC<br />
              Phone 86-0591-28986088<br />
              Fax 86-0591-28983781
            </p>
          </div>
        </div>
        <div class="marker location china" data-lat="31.764630000000068" data-lng="119.94094000000007" data-color="red">
          <img src="/assets/imgs/map-images/changzhou-1.png" alt="Changzhou, China" />
          <div class="inset">
            <h4>Changzhou, China</h4>
            <p>
              No. 1 Xinyong Road<br />
              Wujin high-tech zone, PRC 213164<br />
              Phone 0519-86226722<br />
              Fax 0519-86226730
            </p>
          </div>
        </div>
        <!-- End China Offices  -->

        <!-- UK Offices  -->
        <div class="marker location uk" data-lat="52.27148999565816" data-lng="-1.542349979999642" data-color="green">
          <img src="/assets/imgs/map-images/UK-facility.png" alt="United Kingdom" />
          <div class="inset">
            <h4>United Kingdom</h4>
            <p>          
              5 Spartan Cl<br />
              Royal Leamington Spa, Warwick CV34 6RR<br />
              Phone +44 (0) 1926 962161
            </p>
          </div>
        </div>
        <!-- End UK Offices  -->

        <div id="map-detail">
          <div class="inner"></div>
          <div class="reset" onclick="b3_closeDetails()">Close</div>
        </div>
        <a href="#" onclick="b3_mapReset(event, 'full-map')" id="full-reset">Reset Map</a>
      </div>
    </section>

  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>

</body>
</html>
