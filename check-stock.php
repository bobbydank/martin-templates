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

    <section class="clearfix max-w-screen-2xl mx-auto w-11/12 secondary-font mb-5" data-aos="fade-in">
      <p class="heading-font uppercase text-xl">
        <span class="font-semibold">Jeff Hammergrer</span>
      </p>

      <div class="border border-solid border-gray-400 md:flex">
        <div class="md:w-3/12 md:p-12 p-6 border-r border-solid border-gray-400">
          <p>
            <span class="font-semibold text-primary">Customer Location</span> <br>
            ISC Companies Inc<br>
            12905 Highway 55<br>
            Minneapolis, MN 55441
          </p>
        </div>
        <div class="md:w-4/12 md:p-12 p-6">
          <p>
            <span class="font-semibold text-primary">Martin Servicing Branch (14)</span> <br>
            10601 Hampshire Avenue S<br>
            Bloomington, MN 55438
          </p>
          <p>
            952-829-0623 <br>
            <a class="text-primary" href="mailto:martin14@martinsprocket.com">martin14@martinsprocket.com</a>
          </p>
        </div>
        <div class="md:w-5/12 md:p-12 p-6 bg-gray-200">
          <p>
            <span class="font-semibold text-primary">Enter Delivery Location</span> <br>
            Closest available inventory is determined<br>
            by delivery city, state or zip code
          </p>
          <form action="" method="" enctype="multipart/form-data">
            <div>
              
            </div>
          </form>
        </div>
      </div>
    </section>

    
  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>
</body>
</html>