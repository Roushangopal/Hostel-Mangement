
<html>
<?php require "../../connection.php"; ?>
<?php


$usn = $_POST['usn'];
$name = $_POST['name'];
$gender=$_POST['gender'];
$roomno=$_POST['roomno'];
$batch=$_POST['batch'];
$branch=$_POST['branch'];
$hostelid=$_POST['hostelid'];
$fathername=$_POST['fathername'];
$address=$_POST['address'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$filename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
$folder = "../student_img/".$filename;
move_uploaded_file($tempname,$folder);

$query = "update student set name='$name',gender='$gender',room_no='$roomno',batch='$batch',img_src='$folder',hostel_id='$hostelid' where usn = '$usn'";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

if($result==1)
{
$q = "update student_details set f_name='$fathername',address='$address',phone_no='$phoneno',email='$email' where  usn= '$usn'";

$result1=mysqli_query($con,$q) or die(mysqli_error($con));
if($result1==1)
{
    $qy = "update department set department_name='$branch' where  usn='$usn'";
    $result2=mysqli_query($con,$qy) or die(mysqli_error($con));
    if($result2==1)
    {
     ?>
    <script>
    window.alert('Data Updated.');
    window.location.href='../students.php';
    </script>
    <?php
    }
}
}

?>
</html>