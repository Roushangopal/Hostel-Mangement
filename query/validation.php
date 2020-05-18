<html>
<head>
<title>connection</title>
</head>
<?php require "../connection.php"; ?>
<?php

if(isset($_POST['submit']))
{
$name = $_POST['uname'];
$pass = $_POST['psw'];

$q = "select * from signin where username='$name' && password='$pass'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
?>
    <script>
    window.location.href='../student/hostel.php';
    </script>
    <?php
}
else
{
    ?>
    <script>
    window.alert('Invalid Username and Password');
    window.location.href='../login.php';
    </script>
    <?php

}
}
?>
</html>