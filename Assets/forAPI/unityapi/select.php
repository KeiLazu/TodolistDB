<?php

include 'conn.php';

$getData = "select * from todocross";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){
    $msg[] = array("ID" => $r['id_todolist'], "title" => $r['todotitle'], "note" => $r['todonote'], "progress" => $r['todoprogress'], "datetimeinput" => $r['tododatetime'], "datetimetarget" => $r['tododatetarget']);

}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>