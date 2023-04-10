<?php
$room = $_POST['room'];

if(strlen($room) > 50 or strlen($room) <=2){
    $message="Please choose a name between 2 to 50 characters!";
    echo "<script>alert('$message');";
    echo 'window.location="http://localhost/chatapp";';
    echo '</script>';
    exit;
}

else if(!ctype_alnum($room)){
    $message="Please choose an alphanumeric room name";
    echo "<script>alert('$message');";
    echo 'window.location="http://localhost/chatapp";';
    echo '</script>';
    exit;
}
else{
    //connect to DB
    include("db_conn.php");
}

$sql="SELECT * from `rooms` where `name`='$room'";
$result=mysqli_query($conn, $sql)->fetch_assoc();
if($result){
    $message="Room already exists!";
    echo "<script>alert('$message');";
    echo 'window.location="http://localhost/chatapp";';
    echo '</script>';
    exit;
}
else{
    $sql1="INSERT into `rooms` (`name`) values ('$room')";
    $result=mysqli_query($conn, $sql1);
    if ($result){
        $message="Room Created Successfully!";
        echo "<script>alert('$message');";
        echo 'window.location="http://localhost/chatapp/rooms.php?name='.$room.'";';
        echo '</script>';
        exit;
    }
}
?>