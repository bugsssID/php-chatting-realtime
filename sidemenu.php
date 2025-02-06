<?php if($_SESSION['hak'] =='ADMIN') { ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="halaman.php?page=dashboard" class="site_title"><i class="fa fa-paw"></i> <span>G080 | DC PWK</span></a>
            </div>

            <div class="clearfix"></div>

          
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=dashboard">Dashboard</a></li>
                       <li><a href="halaman.php?page=IN-OUT">Laporan Keluar-Masuk DC</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Administrasi<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=kebutuhan-toko">Kebutuhan Toko</a></li>
                      <li><a href="halaman.php?page=stok-out-toko">Stok Out Toko</a></li>
                      <li><a href="halaman.php?page=intransit-brd">Instransit BRD</a></li>
                      <li><a href="halaman.php?page=intransit-npb">Intransit NPB</a></li>
                      <li><a href="halaman.php?page=sales-toko">Sales Toko</a></li>
                      <li><a href="halaman.php?page=laporan-pbro-dc">Laporan PBRO</a></li>
                      <li><a href="halaman.php?page=laporan-ft">Laporan FT</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Support DC <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=laporan-hh">Laporan Serah Terima HH</a></li>
                      <li><a href="halaman.php?page=laporan-atk">Laporan ATK Picking</a></li>
                      <li><a href="halaman.php?page=handheld-dc">Data Handheld DC</a></li>
                      <li><a href="halaman.php?page=dat-dcpwk">DAT DC PWK</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Daftar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=register">NEW User</a></li>
                      <li><a href="halaman.php?page=user-list">User Listing</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

         <?php } ?>

<?php if($_SESSION['hak'] =='SUPPORT') { ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="halaman.php?page=dashboard" class="site_title"><i class="fa fa-paw"></i> <span>G080 | DC </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['username'];  ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />


            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=dashboard">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Support DC <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=laporan-hh">Laporan Serah Terima HH</a></li>
                      <li><a href="halaman.php?page=laporan-atk">Laporan ATK Picking</a></li>
                      <li><a href="halaman.php?page=handheld-dc">Data Handheld DC</a></li>
                      <li><a href="halaman.php?page=dat-dcpwk">DAT DC PWK</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Daftar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=user-list">User Listing</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

         <?php } ?>


<?php if($_SESSION['hak'] =='ADM') { ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="halaman.php?page=dashboard" class="site_title"><i class="fa fa-paw"></i> <span>G080 | DC </span></a>
            </div>

            <div class="clearfix"></div>

            <br />


            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=dashboard">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Administrasi<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=kebutuhan-toko">Kebutuhan Toko</a></li>
                      <li><a href="halaman.php?page=stok-out-toko">Stok Out Toko</a></li>
                      <li><a href="halaman.php?page=intransit-brd">Instransit BRD</a></li>
                      <li><a href="halaman.php?page=intransit-npb">Intransit NPB</a></li>
                      <li><a href="halaman.php?page=sales-toko">Sales Toko</a></li>
                      <li><a href="halaman.php?page=laporan-pbro-dc">Laporan PBRO</a></li>
                      <li><a href="halaman.php?page=laporan-ft">Laporan FT</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Daftar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="halaman.php?page=user-list">User Listing</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

         <?php } ?>