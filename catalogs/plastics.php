<!DOCTYPE html>
<html lang="en">

<?php include '../_head.php'; ?>

<body>
  <?php include '../_header.php'; ?>

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
          <a href="#">Literature and Media</a>
        </li>
        <li>
          <a href="/catalogs.php">Catalogs</a>
        </li>
        <li>
          <a href="/catalogs/plastics.php">Plastics</a>
        </li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-md mx-auto w-11/12 md:w-9/12 secondary-font mb-20" data-aos="fade-in">
      <h2 class="text-primary text-center mb-16">Catalogs</h2>
      <ul class="inline-list text-center no-pad-a line-seperator pad-more no-leading monitor-last-item">
        <li><a href="/catalogs/power-transmission.php">Power Transmission</a></li>
        <li><a href="/catalogs/material-handling.php">Material Handling</a></li>
        <li><a href="/catalogs/idlers.php">Idlers</a></li>
        <li><a href="/catalogs/heavy-duty.php">Heavy-Duty Conveyor Pulleys</a></li>
        <li><a href="/catalogs/custom-products.php">Custom Products</a></li>
        <li><a href="/catalogs/engineering.php">Engineering</a></li>
        <li><a href="/catalogs/industrial.php">Industrial Hand Tools</a></li>
        <li><a href="/catalogs/plastics.php" class="active">Plastics</a></li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-2xl mx-auto" data-aos="fade-in">
      <div class="mb-5">
        <ul class="downloads-list">
          <li>
            <a href="https://www.martinsprocket.com/docs//catalogs/plastics/plastics.pdf">
              <p>Plastics</p>
              <p>Download PDF</p>
            </a>
          </li>
        </ul> 
      </div>
    </section>
  </main>
  <!-- End Main -->

  <?php include '../_footer.php'; ?>
</body>
</html>
