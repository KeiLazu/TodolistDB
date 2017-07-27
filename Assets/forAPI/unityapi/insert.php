<?php

include 'conn.php';

$title = $_POST['title'];
$note = $_POST['note'];
$progress = $_POST['progress'];
$datetimenow = $_POST['datetimeinput'];
$datetimetarget = $_POST['datetimetarget'];

$sql = "INSERT INTO todocross (id_todolist, todotitle, todonote, todoprogress, tododatetime, tododatetarget) 
    VALUES (NULL, '$title', '$note', '$progress', '$datetimenow', '$datetimetarget');";

if($connection->query($sql)) {
    $msg = array("status" => 1, "msg" => "Your record inserted successfully");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);

}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>