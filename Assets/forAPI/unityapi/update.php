<?php

include 'conn.php';

$id = $_POST['id'];
$title = $_POST['title'];
$note = $_POST['note'];
$progress = $_POST['progress'];
$datetimetarget = $_POST['datetimetarget'];

$query = "UPDATE todocross 
    SET todotitle = '$title', todonote = '$note', todoprogress = '$progress', tododatetarget = '$datetimetarget'
    WHERE id_todolist = '$id'";

if($connection->query($query)) {
    $msg = array("status" => 1, "msg" => "Your record updated successfully");

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);

}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>