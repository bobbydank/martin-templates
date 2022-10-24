<!DOCTYPE html>
<html lang="en">

<?php include '_head.php'; ?>

<body>
  <?php include '_header.php'; ?>

  <!-- Page Hero -->
  <div class="page-hero" style="background-image:url('/assets/imgs/heroes/resources.jpg');">
    <section class="py-12 md:py-20 clearfix max-w-screen-2xl mx-auto w-11/12 secondary-font">
      <h1 class="text-white text-right md:text-5xl my-0">Resources</h1>
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
          <a href="/resources.php">Resources</a>
        </li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-2xl mx-auto w-11/12 md:w-9/12 secondary-font mb-20" data-aos="fade-in">
      <div class="md:mx-8">
        <h2 class="text-primary text-center mb-16">Resources</h2>
        <div class="md:flex justify-items-stretch gap-12">
          <div class="b3-shadow w-full md:w-1/2 px-12 pt-8 pb-12 mb-12 md:mb-0">
            <h5 class="text-primary text-center">Customer Login</h5>
            <form action="" method="" enctype="multipart/form-data">
              <input type="text" placeholder="User Name" name="" required>
              <input type="password" placeholder="Password" name="" required>
              <div class="flex mt-4">
                <div class="w-1/2">
                  <input type="submit" value="Submit" class="submit-button smaller">
                </div>
                <div class="w-1/2 justify-end flex">
                  <img src="/assets/imgs/captcha.jpg" class="block w-full" alt="">
                </div>
              </div>
            </form>
          </div>
          <div class="b3-shadow w-full md:w-1/2 px-12 pt-8 pb-12">
            <h5 class="text-primary text-center">Account Maintenance</h5>
            <form action="" method="" enctype="multipart/form-data">
              <input type="text" placeholder="User Name" name="" required>
              <input type="password" placeholder="Password" name="" required>
              <div class="flex mt-4">
                <div class="w-1/2">
                  <input type="submit" value="Submit" class="submit-button smaller">
                </div>
                <div class="w-1/2 justify-end flex">
                  <img src="/assets/imgs/captcha.jpg" class="block w-full" alt="">
                </div>
              </div>
              <p class="text-center py-5">
                <a href="#">Francais</a> | <a href="#">Espanol</a> | <a href="#">English</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>

    <p class="text-center pt-12 text-2xl font-fira">
      For login asstistance, please contact the marketing department at <a href="tel:+18172583000" class="font-semibold">817-258-3000</a>.
    </p>

    <section class="clearfix max-w-screen-2xl- mx-auto w-11/12 md:w-10/12 secondary-font mt-36 mb-20" data-aos="fade-in">
      <div class="md:flex justify-items-stretch">
        <div class="md:w-1/3 p-12">
          <div class="rounded-xl primary-bg py-8 text-center w-5/6 mx-auto mb-8 mh-235 flex justify-center items-center">
            <img src="/assets/imgs/part-number.svg" class="w-1/2 inline-block" alt="Part Number Interchange">
          </div>
          <h5 class="text-primary text-center mb-8">Part Number Interchange</h5>
          <p class="leading-loose">
            <a href="#" class="arrow-link">Gear Interchange</a>
            <a href="#" class="arrow-link">Idler Sprocket Interchange</a>
            <a href="#" class="arrow-link">Sheave Interchange</a>
            <a href="#" class="arrow-link">Conveyor Pulley Interchange</a>
          </p>
        </div>
        <div class="md:w-1/3">
          <div class="md:border-r md:border-l border-solid border-gray-300 p-12">
            <div class="rounded-xl primary-bg py-8 text-center w-5/6 mx-auto mb-8 mh-235 flex justify-center items-center">
              <img src="/assets/imgs/literature.svg" class="w-1/2 inline-block" alt="Literature and Media">
            </div>  
            <h5 class="text-primary text-center mb-8">Literature and Media</h5>
            <p class="leading-loose">
              <a href="/catalogs.php" class="arrow-link">Catalogs</a>
              <a href="#" class="arrow-link">Nomenclature</a>
              <a href="#" class="arrow-link">Documented Cost Savings</a>
              <a href="#" class="arrow-link">Corporate Overview</a>
              <a href="#" class="arrow-link">Brochures</a>
              <a href="#" class="arrow-link">Press Releases</a>
            </p>
          </div>
        </div>
        <div class="md:w-1/3 p-12">
          <div class="rounded-xl primary-bg py-8 text-center w-5/6 mx-auto mb-8 mh-235 flex justify-center items-center">
            <img src="/assets/imgs/hard-hat.svg" class="w-1/2 inline-block" alt="Safety and Installation">
          </div>
          <h5 class="text-primary text-center mb-8">Part Number Interchange</h5>
          <p class="leading-loose">
            <a href="#" class="arrow-link">Power Transmission</a>
            <a href="#" class="arrow-link">Material Handling</a>
            <a href="#" class="arrow-link">Industrial Hand Tools</a>
            <a href="#" class="arrow-link">Maintenance Guides </a>
          </p>
        </div>
      </div>
    </section>
  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>
</body>
</html>