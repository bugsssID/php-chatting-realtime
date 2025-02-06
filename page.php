	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'dashboard':
				include "index.php";
				break;
			case 'register':
				include "register.php";
				break;
			case 'user-list':
				include "mon_chating.php";
				break;
			case 'kebutuhan-toko':
				include "inv/kebutuhan_toko.php";
				break;				
			case 'laporan-pbro-dc':
				include "inv/laporan_pbro.php";
				break;
			case 'stok-out-toko':
				include "inv/laporan_stok_out_toko.php";
				break;
			case 'intransit-brd':
				include "inv/intransit_brd.php";
				break;
			case 'IN-OUT':
				include "dc/laporan_keluar_masuk.php";
				break;
			default:
			include "500.php";
				break;
			    }
				
					}
			 
					 ?>