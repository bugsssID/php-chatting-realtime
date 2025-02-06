<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM login 
WHERE user_id != '".$_SESSION['user_id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-striped projects">
 <tr>
  <th width="20%">Username</td>
  <th width="20%">Pesan</td>
  <th width="20%">Status</td>
  <th width="10%">Action</td>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['user_id'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="badge badge-success">Online</span>';
 }
 else
 {
  $status = '<span class="badge badge-warning">Offline</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['username'].' </td>
  <td><span class="badge bg-green">'.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['user_id'], $connect).'</span></td>
  <td>'.$status.'</td>
  <td><button type="button" class="btn btn-round btn-primary start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'"   data-toggle="modal" data-target=".bs-example-modal-sm">Chatting</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>