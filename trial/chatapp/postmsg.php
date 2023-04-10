<?php 
    include("db_conn.php");

    $msg = $_POST['text'];
    $room = $_POST['room'];
    $ip = $_POST['ip'];

    $sql="INSERT into `messages` (`text`, `room`, `ip`) values ('$msg', '$room', '$ip')";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>