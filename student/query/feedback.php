<html>
<head>
<title>message</title>
</head>


<?php require "../../connection.php"; ?>
<?php
session_start();
$name = $_POST['Name'];
$email = $_POST['Email'];
$message=$_POST['Message'];


$query = "insert into complaint(name,email,message) values ('$name','$email','$message')";

$result=mysqli_query($con,$query);
?>
    <script>
     window.alert('Feedback Sended!');
    window.location.href='../hostel.php';
    </script>
    <?php

?>
</html>