<html>
<head>
<title>message</title>
</head>


<?php require "../connection.php"; ?>
<?php
session_start();

$name = $_POST['Name'];
$email = $_POST['Email'];
$message=$_POST['Message'];


$query = "insert into complaint(name,email,message) values ('$name','$email','$message')";

$result=mysqli_query($con,$query);
?>
    <script>
     window.alert('Message Sended!');
    window.location.href='../index.php';
    </script>
    <?php

?>
</html>