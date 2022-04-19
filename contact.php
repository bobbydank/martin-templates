<!DOCTYPE html>
<html lang="en">

<?php include '_head.php'; ?>

<body>
  <?php include '_header.php'; ?>

  <!-- Page Hero -->
  <div class="page-hero" style="background-image:url('/assets/imgs/heroes/company.jpg');">
    <section class="py-8 md:py-16 clearfix max-w-screen-2xl mx-auto w-11/12 secondary-font">
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
      <div class="md:flex items-center ">
        <div class="w-full md:w-2/4 text-center md:text-left">
          hi
        </div>
        <div class="w-full md:w-2/4">
          hi2
        </div>
      </div>
    </section>

    <section class="py-14 px-14 clearfix max-w-screen-xl mx-auto my-20 w-11/12" data-aos="fade-up">
      <div class="md:flex items-center">
        <div class="w-full md:w-2/4 text-center md:text-left">
          <p>Corporate Office - Arlington, Texas</p>
          <p>3100 Sprocket Drive<br />Arlington, TX 76015</p>
          <p>Phone: 817.258.3000<br />Fax:  817.258.3333</p>
          <p><a href="#">Contact Branch »</a></p>
        </div>
        <div class="w-full md:w-2/4">
          <div class="mapbox-single border-round">
            <div class="marker" data-lat="" data-lng=""></div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>

</body>
</html>
