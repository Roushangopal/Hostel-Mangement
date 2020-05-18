<?php require "session.php"; ?>
<?php require "../connection.php"; ?>
<?php
$usn = $_GET['usn'];

$q = "select fees_submitted,due_date,recipt_no from fees where usn='$usn'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

	$feessubmitted = $row['fees_submitted'];
	$duedate = $row['due_date'];
  $recipt = $row['recipt_no'];
?>





<!DOCTYPE html>
<html>
<title>hostel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<body class="w3-content" style="max-width:1300px;background-image:url('photos/logo1.jpg');background-size:100% 100%">
<div class=" w3-teal w3-container" style="height:600px">
    <div class="w3-padding-64 w3-padding-large" id="contact">
      <h1>FEES SUBMITION</h1>
      <p class="w3-opacity">FILL UP THE FORM</p>
      <form class="w3-container w3-card w3-padding-32 w3-white" action="query/update_fees.php" method="post" enctype="multipart/form-data" target="_self">
      <div class="w3-section">
          <label>USN</label>
          <input class="w3-input" style="width:100%;" type="text" required name="usn" value="<?php echo $usn ?>">
        </div>
        <div class="w3-section">
          <label>Amount Submitted</label>
          <input class="w3-input" style="width:100%;" type="text" required name="amount" value="<?php echo $feessubmitted ?>">
        </div>
        <div class="w3-section">
          <label>Receipt No</label>
          <input class="w3-input" style="width:100%;" type="text" required name="reciptno" value="<?php echo $recipt ?>">
        </div>
        <div class="w3-section">
          <label>Next Payment Within</label>
          <input class="w3-input" style="width:100%;" type="text" required name="duedate" value="<?php echo $duedate ?>">
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