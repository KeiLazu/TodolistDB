<?php

include 'conn.php';

$id = $_POST['id'];

// $name = $_POST['name'];
// $email = $_POST['email'];
// $status = $_POST['status'];

$sql = "DELETE FROM todocross WHERE id_todolist = '$id'";

if($connection->query($sql)) {
    $msg = array("status" => 1, "msg" => "Your record deleted successfully");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);

}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>