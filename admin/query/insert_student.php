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
$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "../student_img/".$filename;
move_uploaded_file($tempname,$folder);

$q = "select * from student where usn='$usn'";
echo $usn;

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
    ?>
    <script>
    window.alert('Data already exists.');
    window.location.href='../insert.php';
    </script>
    <?php
}
else
{
$query = "insert into student(usn,name,gender,room_no,batch,img_src,hostel_id) values ('$usn','$name','$gender','$roomno','$batch','$folder','$hostelid')";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

if($result==1)
{
$q = "insert into student_details(usn,f_name,address,phone_no,email) values ('$usn','$fathername','$address','$phoneno','$email')";

$result1=mysqli_query($con,$q) or die(mysqli_error($con));
if($result1==1)
{
    $qy = "insert into department values ('$usn','$branch')";
    $result2=mysqli_query($con,$qy) or die(mysqli_error($con));

        ?>
        <script>
        window.alert('Data Inserted!.');
        window.location.href='../insert.php';
        </script>
        <?php

}
}
}
?>
</html>