<?php
session_start();
?>
<html>
<head>
<title>connection</title>
</head>
<?php require "../../connection.php"; ?>
<?php

$name = $_POST['uname'];
$pass = $_POST['psw'];

$q = "select * from admin_signin where username='$name' && password='$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['user'] = $_POST['uname'];
    ?>
    <script>
    window.alert('Welcome Admin!');
    window.location.href='../admin.php';
    </script>
    <?php
}
else
{
    ?>
    <script>
    window.alert('Invalid Username and Password');
    window.location.href='../admin_signin.php';
    </script>
    <?php


}

?>
</html>