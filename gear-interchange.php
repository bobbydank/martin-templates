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
          <a href="#">Part Number Interchange</a>
        </li>
        <li>
          <a href="#">Gears</a>
        </li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-lg mx-auto w-11/12 md:w-9/12 secondary-font mb-20" data-aos="fade-in">
      <h2 class="text-primary text-center mb-16">Gear Interchange</h2>
      <ul class="inline-list text-center no-pad-a line-seperator pad-more no-leading monitor-last-item mb-14">
        <li><a class="active" href="/gear-interchange.php">Gear Interchange</a></li>
        <li><a href="#">Inter Sprocket Interchange</a></li>
        <li><a href="#">Sheave Interchange</a></li>
        <li><a href="#">Conveyor Pulley Interchange</a></li>
      </ul>
      <div class="text-center mx-auto max-w-2xl mb-12">
        <p>The Martin Sprocket & Gear, Inc. Gear Part Number Intterchange allows you to cross reference Martin Gear part numbers with Gears from other manufacturers.</p>
      </div>
      <p class="py-2 px-4 primary-bg text-white mb-0">Enter a complete or partial part number then click the submit button</p>
      <form role="search" method="" class="search-form md:flex" action="" enctype="multipart/form-data">
        <div class="md:w-1/2 md:flex justify-start">
          <div class="input-group no-button clearfix md:mr-3 my-3" style="max-width:200px;">
              <input type="search" placeholder="manufacturer part #" value="" name="search"  />
          </div>
          <div class="tribFilters contentBlock b3-select white my-3">
            <select name="">
              <option value="">Menufacturer</option>
              <option value="">Option 1</option>
              <option value="">Option 2</option>
              <option value="">Option 3</option>
            </select>
          </div>
        </div>
        <div class="md:w-1/2 flex md:flex-row-reverse flex-col-reverse">
          <div class="b3-button black white-text smaller my-3 no-arrow">
            <input type="submit" value="Reset" style="" />
          </div>
          <div class="b3-button black smaller my-3 md:mr-3 ">
            <input type="submit" value="Submit" style="" />
          </div>
        </div>
      </form>
      
    </section>

    <div class="darkgrey-bg pt-32 pb-24 mb-16">
      <section class="mx-auto max-w-4xl mb-16 secondary-font text-center">
        <h2 class="text-primary text-center" data-aos="fade-in">Why Choose Martin for Gears?</h2>
        <p class="text-black mb-10">From Spur Gears to Gear Rack, Bevel Gears to Miter Gears, Worms and Worm Gears, Martin is the trusted source for quality Power Transmission Parts. Martin carries the largest inventory of raw materials and stock Gears in North America. With same-day alteration capabilities and complete made-to-order Gear manufacturing capabilities, Martin can deliver the quality Gear you need for any application.</p>
        <a class="b3-button black mb-5" href="#">Request a Gear Quote</a>
      </section>
    </div>
  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>
</body>
</html>
