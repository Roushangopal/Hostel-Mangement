<html>
<head>
<title>connection</title>
</head>
<?php require "../connection.php"; ?>
<?php
$name = $_POST['uname'];
$pass = $_POST['psw'];

$q = "select * from signin where username='$name'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
    ?>
    <script>
    window.alert('User name already exists.');
    window.location.href='../signup.php';
    </script>
    <?php
}
else
{
$qy="insert into signin(username,password) values ('$name','$pass')";
mysqli_query($con,$qy);
?>
<script>
window.alert('Registration Successful.');
window.location.href='../login.php';
</script>
<?php
}

?>
</html>