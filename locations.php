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
        <p>Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
      </div>
    </section>

    <section class="clearfix max-w-screen-2xl mx-auto secondary-font mb-20" data-aos="fade-in">
      <div class="flex justify-start flex-wrap">
        <div class="w-1/3 md:w-1/6 text-center">
          <div class="p-5 lg:p-10">
            <img src="/assets/imgs/flags/usa.svg" class="w-full" alt="United States">
            <p>United States</p>
          </div>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <div class="p-5 lg:p-10">
            <img src="/assets/imgs/flags/canada.svg" class="w-full" alt="United States">
            <p>Canada</p>
          </div>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <div class="p-5 lg:p-10">
            <img src="/assets/imgs/flags/mexico.svg" class="w-full" alt="United States">
            <p>Mexico</p>
          </div>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <div class="p-5 lg:p-10">
            <img src="/assets/imgs/flags/brazil.svg" class="w-full" alt="United States">
            <p>Brazil</p>
          </div>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <div class="p-5 lg:p-10">
            <img src="/assets/imgs/flags/china.svg" class="w-full" alt="United States">
            <p>China</p>
          </div>
        </div>
        <div class="w-1/3 md:w-1/6 text-center">
          <div class="p-5 lg:p-10">
            <img src="/assets/imgs/flags/uk.svg" class="w-full" alt="United States">
            <p>United Kingdom</p>
          </div>
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
        <div class="marker location usa" data-lat="32.695030" data-lng="-97.145866" data-color="#062F87">
          <img src="/assets/imgs/map-images/corporate.jpg" alt="Corporate Office - Arlington, Texas" />
          <h4>Corporate Office - Arlington, Texas</h4>
          <p>
            3100 Sprocket Drive <br />
            Arlington, TX 76015<br />
            Fax  817-258-3333
          </p>
        </div>
        <!-- End USA Offices  -->

        <!-- Canada Offices  -->

        <!-- End Canada Offices  -->

        <!-- Mexico Offices  -->

        <!-- End Mexico Offices  -->

        <!-- Brazil Offices  -->

        <!-- End Brazil Offices  -->

        <!-- China Offices  -->

        <!-- End China Offices  -->

        <!-- UK Offices  -->

        <!-- End UK Offices  -->

        <div id="map-detail">
          <div class="inner"></div>
          <div class="reset" data-group="">Close</div>
        </div>
      </div>
    </section>

  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>

</body>
</html>
