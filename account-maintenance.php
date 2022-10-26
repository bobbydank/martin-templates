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

    <section class="clearfix max-w-screen-2xl mx-auto w-11/12 secondary-font" data-aos="fade-in">
      <p class="heading-font uppercase text-xl">
        <span class="font-semibold">Customer Name:</span> Martin Sprocket & Gear (52)
      </p>
    </section>

    <section class="clearfix max-w-screen-2xl relative mx-auto w-11/12 secondary-font mb-20" data-aos="fade-in">
      <div class="table-container">
        <table id="tblResultsHeader" cellspacing="0" cellpadding="0" width="100%">
          <thead class="gridheader">
            <tr class="tableheadbg">
              <td class="copy">
                <p style="color: black">
                  Name
                </p>
              </td>
              <td class="copy">
                <p style="color: black">
                  Qty Requested
                </p>
              </td>
              <td class="copy">
                <p style="color: black">
                  Approx Weight (lb)
                </p>
              </td>
            </tr>
          </thead>
          <tbody>
            <tr class="tableheadbg">
              <td class="copy">
                <p style="color: black">
                  -
                </p>
              </td>
              <td class="copy">
                <p style="color: black">
                  -
                </p>
              </td>
              <td class="copy">
                <p style="color: black">
                  -
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="text-right">
        <a href="http://martin.dev2.barn3s.com/account-maintenance-new.php" class="b3-button orange no-arrow">New User</a>
      </div>
    </section>
  </main>
  <!-- End Main -->

  <?php include '_footer.php'; ?>
</body>
</html>