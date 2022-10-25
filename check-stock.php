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
          <a href="/check-stock.php">Check Stock</a>
        </li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-2xl relative mx-auto w-11/12 secondary-font" data-aos="fade-in">
      <h2 class="text-primary mb-16 md:text-center">Check Stock</h2>
      <a href="#" class="logout-button b3-button black text-secondary no-arrow">Logout</a>
    </section>

    <section class="clearfix max-w-screen-2xl mx-auto w-11/12 secondary-font mb-20" data-aos="fade-in">
      <p class="heading-font uppercase text-xl">
        <span class="font-semibold">Jeff Hammergrer</span>
      </p>

      <div class="border border-solid border-gray-400 md:flex">
        <div class="md:w-3/12 md:p-12 p-6 md:border-r border-solid border-gray-400">
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
            <div class="mt-8 flex justify-start items-center gap-3">
              <div class="w-2/3">
                <input class="bg-white border border-solid border-black" type="text" placeholder="City" name="">
              </div>
              <div class="w-1/3">
                <input class="bg-white border border-solid border-black"  type="text" placeholder="State" name="">
              </div>
            </div>
            <div class="flex justify-start items-center gap-3">
              <div class="w-2/12 large-orange-text">
                - OR -
              </div>
              <div class="w-5/12">
                <input class="bg-white border border-solid border-black" style="margin-bottom:0;" type="text" placeholder="Zip Code" name="">
              </div>
              <div class="w-5/12">
                <div class="b3-button black smaller w-full">
                  <input type="submit" value="Submit" style="">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="clearfix max-w-screen-2xl relative mx-auto w-11/12 secondary-font mb-20" data-aos="fade-in">
      <div class="text-center primary-bg py-3 text-white uppercase">
        <h6 class="mb-0 mt-0">Enter part number and quantity requested</h6>
      </div>
      <table id="tblResultsHeader" cellspacing="0" cellpadding="0" width="100%">
        <thead class="gridheader">
          <tr class="tableheadbg text-left">
            <td class="copy">
              <p>Part Number</p>
            </td>
            <td class="copy">
              <p>QTY Requested</p>
            </td>
            <td class="copy">
              <p>Description</p>
            </td>
            <td class="copy">
              <p>Closest Available Inventory</p>
            </td>
            <td class="copy">
              <p>Price ( )</p>
            </td>
            <td class="copy">
              <p>Approx Weight (LB)</p>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr class="tableheadbg text-left">
            <td class="copy">
              <div class="md:flex gap-3 justify-center items-center">
                <input type="text" name="" value="S0B50" />
                <div class="b3-button black smaller no-arrow">
                  <input type="submit" value="Alt Parts" />
                </div>
              </div>
            </td>
            <td class="copy">
              <input class="bg-white border border-solid border-black" type="text" value="1" name="">
            </td>
            <td class="copy">
              
            </td>
            <td class="copy">
              <p>1 EA - MINNESOTA</p>
            </td>
            <td class="copy">
              <p>49.03</p>
            </td>
            <td class="copy">
              <p>9.78</p>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>
</body>
</html>