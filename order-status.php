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
          <a href="/order-status.php">Order Status</a>
        </li>
      </ul>
    </section>

    <section class="clearfix max-w-screen-2xl relative mx-auto w-11/12 secondary-font" data-aos="fade-in">
      <h2 class="text-primary mb-16 md:text-center">Order Status</h2>
      <a href="#" class="logout-button b3-button black text-secondary no-arrow">Logout</a>
    </section>

    <section class="clearfix max-w-screen-2xl mx-auto w-11/12 secondary-font mb-10" data-aos="fade-in">
      <div class="md:flex md:text-left text-center justify-start align-top gap-5">
        <div class="p-8">
          <p class="text-primary font-semibold mb-0">Customer Name</p>
          <p class="mb-0">ISC Companies Inc</p>
        </div>
        <div class="p-8">
          <p class="text-primary font-semibold mb-0">Location</p>
          <p class="mb-0">12905 Highway 55</p>
          <p class="mb-0">Minneapolis, MN 55441</p>
        </div>
      </div>
    </section>

    <section class="clearfix max-w-screen-2xl relative mx-auto w-11/12 secondary-font mb-20" data-aos="fade-in">
      <div class="text-center primary-bg py-3 text-white uppercase">
        <h6 class="mb-0 mt-0">Orders Received Last 30 Days</h6>
      </div>
      <table id="tblResultsHeader" cellspacing="0" cellpadding="0" width="100%">
        <thead class="gridheader">
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>Order Date</p>
            </td>
            <td class="copy">
              <p>Purchase Order</p>
              <select name="">
                <option value="">Last 30 Days</option>
              </select>
              <input type="text" name="" />
              <div class="b3-button black smaller no-arrow">
                <input type="submit" value="Get PO" />
              </div>
            </td>
            <td class="copy">
              <p>Martin Part</p>
              <select name="">
                <option value="">Last 30 Days</option>
              </select>
              <input type="text" name="" />
              <div class="b3-button black smaller no-arrow">
                <input type="submit" value="Get Part" />
              </div>
            </td>
            <td class="copy">
              <p>Description</p>
            </td>
            <td class="copy">
              <p>QTY</p>
              <p class="text-white">Ordered</p>
            </td>
            <td class="copy">
              <p>QTY</p>
              <p class="text-white">Ready to Ship</p>
            </td>
            <td class="copy">
              <p>QTY</p>
              <p class="text-white">Shipped</p>
            </td>
            <td class="copy">
              <p>QTY</p>
              <p class="text-white">Back Ordered</p>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                9.29.2022
              </p>
            </td>
            <td class="copy">
              <p>
                7159068
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                  H 1 1/4
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
                MST BUSHING
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                7158758
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                25B18
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              SPK ROLLER B
              </p>
            </td>
            <td class="copy">
              <p>
                2
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                2
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                6018 1 5/8
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              COUPLING HALF - FIN BORE
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
              7158690
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                120A13                
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              SPK ROLLER A
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
              9.29.2022
              </p>
            </td>
            <td class="copy">
              <p>
              7158019
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                S1652
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              GEAR SPUR 14 1/2 DEG STEEL
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
              7157968
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                0547319M                
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              MTO SPROCKET ROLLER A
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
              7157931
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                18H100
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              TIMING PULLEY
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
              7157931
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                18H100
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              TIMING PULLEY
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                40B16
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              STOCK BORE
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                40B18
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              STOCK BORE
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                820A21
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              SPK TTOP
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                SD 1 1/4
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              BUSHING QD
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                SDS 1 1/2
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              BUSHING QD
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                SH 1 1/4
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              BUSHING QD
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                SK 2
                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              BUSHING QD
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
              9.27.2022
              </p>
            </td>
            <td class="copy">
              <p>
              7157933
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                20H200 SH

                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              TIMING PULLEY QD

              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                20H200 SH

                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              CTIMING PULLEY QD

              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
          </tr>
          <tr class="tableheadbg text-center">
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy">
              <p>
                
              </p>
            </td>
            <td class="copy text-left">
              <p>
                <a href="#">
                20H200 SD

                </a>
              </p>
            </td>
            <td class="copy text-left">
              <p>
              CTIMING PULLEY QD

              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
            </td>
            <td class="copy">
              <p>
                1
              </p>
            </td>
            <td class="copy">
              <p>
                0
              </p>
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

