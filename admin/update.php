<?php require "session.php"; ?>
<?php require "../connection.php"; ?>
<?php
$usn = $_GET['usn'];

$q = "select * from student s,student_details d,department b where s.usn=d.usn and s.usn=b.usn and s.usn='$usn'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

	$sname = $row['name'];
	$susn = $row['usn'];

 $img = $row['img_src'];

 $sgender = $row['gender'];
$address = $row['address'];
$phoneno = $row['phone_no'];
$email = $row['email'];
$fname = $row['f_name'];
$batch = $row['batch'];
$branch = $row['department_name'];
$roomno = $row['room_no'];
$hostelid = $row['hostel_id'];
?>


<!DOCTYPE html>
<html>
<title>hostel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<body class="w3-content" style="max-width:1300px;background-image:url('photos/logo1.jpg');background-size:100% 100%">
<div class=" w3-teal w3-container" style="height:1200px">
    <div class="w3-padding-64 w3-padding-large" id="contact">
      <h1>STUDENT DETAILS</h1>
      <p class="w3-opacity">FILL UP THE FORM</p>
      <form class="w3-container w3-card w3-padding-32 w3-white" action="query/update_student.php" method="post" enctype="multipart/form-data" target="_self">
        <div class="w3-section">
          <label>USN</label>
          <input class="w3-input" style="width:100%;" type="text" required name="usn" value="<?php echo $usn ?>">
        </div>
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input" style="width:100%;" type="text" required name="name" value="<?php echo $sname ?>">
        </div>
        <div class="w3-section">
          <label>Gender</label>
          <input class="w3-input" style="width:100%;" type="text" required name="gender" value="<?php echo $sgender ?>">
        </div>
        <div class="w3-section">
          <label>Room No</label>
          <input class="w3-input" style="width:100%;" type="text" required name="roomno" value="<?php echo $roomno ?>">
        </div>
        <div class="w3-section">
          <label>Hostel ID</label>
          <input class="w3-input" style="width:100%;" type="text" required name="hostelid" value="<?php echo $hostelid ?>" >
        </div>
        <div class="w3-section">
          <label>Batch</label>
          <input class="w3-input" style="width:100%;" type="text" required name="batch" value="<?php echo $batch ?>">
        </div>
        <div class="w3-section">
         <label>Branch</label>
          <input class="w3-input" style="width:100%;" type="text" required name="branch" value="<?php echo $branch ?>">
        </div>
        <div class="w3-section">
         <label>Father's Name</label>
          <input class="w3-input" style="width:100%;" type="text" required name="fathername" value="<?php echo $fname ?>">
        </div>
        <div class="w3-section">
         <label>Address</label>
          <input class="w3-input" style="width:100%;" type="text" required name="address" value="<?php echo $address ?>">
        </div>
        <div class="w3-section">
         <label>Phone No</label>
          <input class="w3-input" style="width:100%;" type="text" required name="phoneno" value="<?php echo $phoneno ?>">
        </div>
        <div class="w3-section">
         <label>Email</label>
          <input class="w3-input" style="width:100%;" type="text" required name="email" value="<?php echo $email ?>">
        </div>
        <div class="w3-section">
         <label>Image</label>
          <input class="w3-input" style="width:100%;" type="file" name="img" value="<?php echo $img ?>">
        </div>
        
        
        <button type="submit" class="w3-button w3-teal w3-right">Submit</button>
      </form>
    </div>
  </div>
 
  <footer class="w3-container w3-black w3-padding-16">
  <p style="text-align:right"> &copy 2019 www.vitb.ac.in | All Rights Reserved |  Design & Developed by : <a href="https://www.instagram.com/roushan_gopal/" target="_blank">Roushan Raja</a></p>
   </footer>

</body>
</html>