<?php

//fetch_user.php

include('database_connection.php');

session_start();
date_default_timezone_set("Asia/Bangkok");
$end_date = date('Y-m-d', strtotime("-1 days"));
$tmp_st = date('Ymd', strtotime("-1 days"));
$query = "SELECT COUNT(TOKO) AS Jumlah from toko where toko not in (select distinct(toko) from ".'tmpst'.$tmp_st." where tanggal='".$end_date."')";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


foreach($result as $row)
{

 $output = ''.$row['Jumlah'].'';

}

echo $output;

?>