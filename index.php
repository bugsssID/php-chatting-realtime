<?php
if (isset($_SESSION['nik']) && $_SESSION['nik'] == true) {
  //  echo "Welcome to the member's area, " . $_SESSION['AKSES'] . "!";
} else {
    echo"<script> window.location.href = 'login.php' ; </script>";
    exit;
}
?>

  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
                  <div class="x_content">
                    <div class="row">
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-signal"></i>
                          </div>
                           <div class="count" id="sisa_toko"></div>

                          <h3>Data Harian</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-building"></i>
                          </div>
                          <div class="count"><?php echo $conn->query("SELECT COUNT(TOKO) FROM TOKO GROUP BY TOKO;")->num_rows; ?></div>

                          <h3>TOKO</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                          </div>
                          <div class="count"><?php echo $conn->query("SELECT COUNT(PRDCD) FROM PRODMAST GROUP BY PRDCD;")->num_rows; ?></div>

                          <h3>PRODMAST</h3>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-flask"></i>
                          </div>
                          <div class="count" id="pbro_toko"></div>

                          <h3>TOKO PBRO</h3>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>



          </div>
        </div>
        <!-- /page content -->

