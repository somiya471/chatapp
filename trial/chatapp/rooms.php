<?php
    function del(){
      sleep(6);
      $files = glob('uploads/*'); 
      foreach($files as $file){ 
        if(is_file($file)) {
          unlink($file); 
        }
      }
    }
    $room=$_GET['name'];
    include("db_conn.php");
    $sql="SELECT * from `rooms` where `name`='$room'";
    $result=mysqli_query($conn, $sql)->fetch_assoc();
    if(!$result){
        $message="We got you manipulating URLs ;)";
        echo "<script>alert('$message');";
        echo 'window.location="http://localhost/chatapp";';
        echo '</script>';
        exit;
    }

    if(isset($_POST['fileBtn'])){
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      $sql="INSERT INTO `files`(`file`, `room`, `ip`) VALUES ('$target_file', '$room', '".$_SERVER['REMOTE_ADDR']."')";
      $result = mysqli_query($conn, $sql);
      mysqli_close($conn);
    }


?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $room; ?> - Chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.scrollable {
    height: 500px;
    overflow-y: scroll;
}
.text-right{
    float: right;
}
.btn-circle {
    width: 35px;
    height: 40px;
    padding: 6px 0px;
    border-radius: 20px;
    text-align: center;
    font-size: 16px;
    line-height: 1.42857;
}


</style>
</head>
<body>
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between bg-dark">
    <a class="py-2 text-white" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block text-white" href="#">Tour</a>
    <a class="py-2 d-none d-md-inline-block text-white" href="#">Product</a>
    <a class="py-2 d-none d-md-inline-block text-white" href="#">Features</a>
  </nav>
</header>
<div class="container" >
<h2>ChatRoom - <?php echo $room; ?></h2>
    <div class="scrollable" id="scrollable">
<!-- <div class="container">
  <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Message</p>
  <span class="time-right">TimeStamp</span>
</div> -->


</div>
<form action="claim.php" method="POST">
    <div class="input-group">
        <button type="button" class="input-group-text" id="basic-addon1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-paperclip"></i></button>
        <input type="text" name="msg" id="msg" class="form-control col-md-10" placeholder="Your message here">
        <button type="submit" class="btn btn-outline-secondary col-md-2" name="submitmsg" id="submitmsg">Send</button>
        
    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose Your File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input class="form-control" type="file" id="myfile" name="fileToUpload">
        </div>
        <div class="modal-footer">
          <button type="submit" name="fileBtn" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    setInterval(runFunction, 1000);
    function runFunction(){
        $.post("htcont.php", {room: '<?php echo $room; ?>'},
            function(data, status){
                document.getElementsByClassName("scrollable")[0].innerHTML = data;
            }
        );
    }


    var input = document.getElementById("msg");
    input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("submitmsg").click();
    }
    });

    $("#submitmsg").click(function(){
        var clientmsg = $("#msg").val();
        document.getElementById('scrollable').scrollIntoView({block: 'end', behavior: 'smooth'});
    $.post("postmsg.php", {text: clientmsg, room: '<?php echo $room; ?>', ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>'},
    

    function(data, status){
        document.getElementsByClassName('scrollable')[0].innerHTML = data;
    });
    $("#msg").val("");
    return false;
    });
    $("#submitmsg").attr('disabled' , true);
    $("#msg").keyup(function() {
      if (this.value) {
        $("#submitmsg").attr('disabled' , false);
      }
      else{
        $("#submitmsg").attr('disabled' , true);
      }
    });
    
</script>


</body>
</html>