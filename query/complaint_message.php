<?php

session_start();
$con = mysqli_connect('localhost','root','root');
if($con)
{
echo "connection successful";
}
else
{
echo "no connection";
}
$con->set_charset("utf8");
mysqli_select_db($con,'project');

$name = $_POST['Name'];
$email = $_POST['Email'];
$message=$_POST['Message'];

$query = "insert into complaint_forum(name,email,message) values ('$name','$email','$message')";

$result=mysqli_query($con,$query);
?>
    <script>
     window.alert('Complaint Raised!');
    window.location.href='../forum.php';
    </script>
    <?php
?>