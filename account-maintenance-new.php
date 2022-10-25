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
        <li>
          <a href="/account-maintenance.php">Account Maintenance</a>
        </li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-2xl relative mx-auto w-11/12 secondary-font mb-20" data-aos="fade-in">
      <h2 class="text-primary mb-16 md:text-center">Account Maintenance</h2>
      <a href="#" class="logout-button b3-button black text-secondary no-arrow">Logout</a>
    </section>

    <section class="clearfix max-w-screen-lg mx-auto w-11/12 secondary-font mb-5" data-aos="fade-in">
      <p class="heading-font uppercase text-xl">
        <span class="font-semibold">Customer Name:</span> Martin Sprocket & Gear (52)
      </p>
    </section>

    <section class="py-14 px-14 clearfix max-w-screen-lg mx-auto w-11/12 b3-shadow" data-aos="fade-up">
      <form action="" method="" enctype="multipart/form-data">
        <div class="md:flex md:gap-10 m-8">
          <div class="w-full md:w-2/4 text-center md:text-left">
            <input type="text" placeholder="Name" name="">
            <input type="text" placeholder="Email" name="">
            <input type="text" placeholder="Phone" name="">
            <input type="text" placeholder="User Name" name="">
            <input type="password" placeholder="Password" name="">
          </div>
          <div class="w-full md:w-2/4 text-center md:text-left">
            <p class="font-bold">Application Access:</p>
            <p class="mb-3 flex justify-start items-center gap-3">
              <input type="radio" name="" id="one" value="">
              <label class="leading-normal" for="one">Inventory Availability</label>
              <input type="radio" name="" id="two" value="">
              <label class="leading-normal" for="two">Check Order Status</label>
            </p>
            <div class="pl-4 mb-10">
              <p class="mb-1 flex justify-start items-center gap-3">
                <input type="radio" id="three" name="" value="">
                <label class="leading-normal" for="three">Parts Lookup</label>
              </p>
              <p class="mb-3 flex justify-start items-center gap-3">
                <input type="radio" id="four" name="" value="">
                <label class="leading-normal" for="four">Parts Ordering</label>
              </p>
            </div>
            <p>
              - User Name needs to be at least 6 characters long.<br />
              - Password must be at least 8 characters and contain at least 1 number.
            </p>
          </div> 
        </div>
        <div class="text-right">
          <div class="b3-button black smaller no-arrow">
            <input type="submit" value="Save" />
          </div>
          <div class="b3-button black smaller no-arrow mx-3">
            <input type="submit" value="Cancel" />
          </div>
          <div class="b3-button black smaller no-arrow">
            <input type="submit" value="Delete" />
          </div>
        </div>
      </form>
    </section>
  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>
</body>
</html>