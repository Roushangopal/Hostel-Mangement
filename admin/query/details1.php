<?php require "session.php"; ?>
<?php require "../../connection.php"; ?>
<?php
$usn = $_GET['usn'];


$q = "select * from student s,student_details d,department b,hostel h
where s.usn=d.usn and s.usn=b.usn and s.hostel_id=h.hostel_id and s.usn='$usn'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

$row = mysqli_fetch_array($result);
$qy = "select * from fees f,fees_log f1 where f.usn=f1.usn and f.usn='$usn'";
$result1 = mysqli_query($con,$qy);
$row1 = mysqli_fetch_array($result1);

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
$feessubmitted = $row1['fees_submitted'];
$feesleft = $row1['fee_left'];
$dateofsubmission = $row1['date'];
$reciptno = $row1['recipt_no'];
$duedate = $row1['due_date'];
$block = $row['block'];
$hosteltype = $row['hostel_type'];
?>


<!DOCTYPE html>
<html>
<title>details</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/style.css">

<style>

html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body style="background-color:powderblue">

<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <div class="w3-row-padding">

    <div class="w3-third">
    
      <div class=" w3-text-grey w3-card-4" style="background-color:powderblue">
        <div class="w3-display-container">
          <img src="<?php echo $img?>" style="width:100%;height:425px;" alt="Avatar" >
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $sname ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class=" w3-margin-right w3-large w3-text-teal"></i>Name : <?php echo $sname ?></p>
          <p><i class="w3-margin-right w3-large w3-text-teal"></i>Gender : <?php echo $sgender ?></p>
          <p><i class="w3-margin-right w3-large w3-text-teal"></i>USN : <?php echo $usn ?></p>
          <p><i class=" w3-margin-right w3-large w3-text-teal"></i>S/O:-<?php echo $fname ?></p>
          <p><i class=" w3-margin-right w3-large w3-text-teal"></i>Email : <?php echo $email ?></p>
          <p><i class="w3-margin-right w3-large w3-text-teal"></i>Mob : <?php echo $phoneno ?></p>
          <p><i class="w3-margin-right w3-large w3-text-teal"></i>Batch : <?php echo $batch ?></p>   
          <hr>
          <br>
        </div>
      </div><br>
    </div>

    <div class="w3-twothird">
    
      <div class="w3-container w3-card  w3-margin-bottom" style="background-color:pink;">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>VIVEKANANDA INSTITUTE OF TECHNOLOGY</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>ADDRESS</b></h5>
          <h6 class="w3-text-teal"></h6>
          <p><?php echo $address ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>BRANCH</b></h5>
          <h6 class="w3-text-teal"></h6>
          <p><?php echo $branch ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>HOSTEL</b></h5>
          <h6 class="w3-text-teal"></h6>
          <p>Block : <?php echo $block ?> , Type : <?php echo $hosteltype ?> , Room No :  <?php echo $roomno ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>FEE SUBMITTED</b></h5>
          <h6 class="w3-text-teal"></h6>
          <p>Rs<?php echo $feessubmitted ?> , Date : <?php echo $dateofsubmission ?> , Receipt No : <?php echo $reciptno ?></p><br>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>FEE LEFT</b></h5>
          <h6 class="w3-text-teal"></h6>
          <p>Rs<?php echo $feesleft ?></p><br>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Due Date</b></h5>
          <h6 class="w3-text-teal"></h6>
          <p><?php echo $duedate ?></p><br>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
 
  <p style="text-align:right;">&copy 2019 www.vitb.ac.in | All Rights Reserved |  Design & Developed by : <a href="https://www.instagram.com/roushan_gopal/" style="color: #fff" target="_blank">Roushan Raja</a></a></p>
</footer>

</body>
</html>
