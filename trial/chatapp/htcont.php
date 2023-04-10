<?php 
    $room=$_POST['room'];
    include("db_conn.php");
    $sql = "SELECT * FROM `messages` where `room`='$room'";
    $sql1 = "SELECT * FROM `files` where `room`='$room'";
    $res = "";
    $res1 = "";
    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            if($row['ip'] == $_SERVER['REMOTE_ADDR']){
                $res = $res . '<div class="container darker">';
                $res = $res . ' <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;" class="right"><b class="text-right">You';
                $res = $res . '</b><br> <p class="text-right">'.$row['text'];
                $res = $res . '</p><br><span class="time-left">'.$row["time"].'</span></div>';
            }
            else{
                $res = $res . '<div class="container">';
                $res = $res . ' <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;"><b>'.$row['ip'];
                $res = $res . '</b> says <p>'.$row['text'];
                $res = $res . '</p><span class="time-right">'.$row["time"].'</span></div>';
            }
        }
    }  
    if(mysqli_num_rows($result1)>0){
        while($row=mysqli_fetch_assoc($result1)){
            if($row['ip'] == $_SERVER['REMOTE_ADDR']){
                $res1 = $res1 . '<div class="container darker">';
                $res1 = $res1 . ' <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;" class="right"><b class="text-right">You';
                $res1 = $res1 . '</b><br> <a class="text-right" download href="'.$row['file'].'">';
                $res1 = $res1 . 'Download Attachment</a><br><span class="time-left">'.$row["time"].'</span></div>';
            }
            else{
                $res1 = $res1 . '<div class="container">';
                $res1 = $res1 . ' <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;"><b>'.$row['ip'];
                $res1 = $res1 . '</b> <a class="text-right" download href="'.$row['file'].'">';
                $res1 = $res1 . 'Download Attachment</a><span class="time-right">'.$row["time"].'</span></div>';
            }
        }
    }
    echo $res . $res1;

 
?>