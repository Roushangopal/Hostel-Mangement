<?php require "session.php"; ?>
<!DOCTYPE html>
<html>
<title>admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.w3-sidebar {width: 120px;background: #222;}
#main {margin-left: 120px}
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <img src="photos/logo.jpg" style="width:100%">
  <a href="../index.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="students.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>STUDENTS</p>
  </a>
  <a href="fee.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>FEE SECTION</p>
  </a>
  <a href="feedetails.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>FEE DETAILS</p>
  </a>
  <a href="message1.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>MESSAGES</p>
  </a>
  <a href="complaint.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>COMPLAINTS</p>
  </a>
  <a href="logout.php?logout" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>LOG OUT</p>
  </a>
</nav>

<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="students.php" class="w3-bar-item w3-button" style="width:25% !important">STUDENTS</a>
    <a href="fee.php" class="w3-bar-item w3-button" style="width:25% !important">FEES</a>
    <a href="feedetails.php" class="w3-bar-item w3-button" style="width:25% !important">FEE DETAILS</a>
    <a href="message1.php" class="w3-bar-item w3-button" style="width:25% !important">MESSAGES</a>
    <a href="complaint.php" class="w3-bar-item w3-button" style="width:25% !important">COMPLAINTS</a>
    <a href="logout.php?logout" class="w3-bar-item w3-button" style="width:25% !important">COMPLAINTS</a>
  </div>
</div>

<div class="w3-padding-large" id="main" >
  
  <header class="w3-container w3-padding-32 w3-center w3-black" >
    <h1  style="color:purple;font-size:50px"><span class="w3-hide-small"><b>VIVEKANANDA INSTITUTE OF</span> TECHNOLOGY</h1>
 <h3 class="w3-black">Boys & Girls Hostel</h3>
    <img src="photos/swami2.jpg" class="w3-margin w3-circle" alt="Hostel Incharge" style="width:40%">
  </header>

  
  <div class="w3-content w3-justify w3-text-grey w3-padding-64">
    <h2 class="w3-text-light-grey">Swami Vivekananda</h2>
    <hr style="width:200px" class="w3-opacity">
    <p><ul>
    <li>The whole secret of existence is to have no fear. Never fear what will become of you, depend on no one. Only the moment you reject all help are you freed.</li>
   <li> Truth can be stated in a thousand different ways, yet each one can be true.</li>
   <li>You have to grow from the inside out. None can teach you, none can make you spiritual. There is no other teacher but your own soul.</li>
   <li>Take up one idea. Make that one idea your life - think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success.</li>
  </ul>
    </p>
    </div>
    <footer class="w3-content w3-padding-10 w3-text-grey">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    
    <p style="text-align:right"> &copy 2019 www.vkitbangalore.com | All Rights Reserved |  Design & Developed by : <a href="https://www.instagram.com/roushan_gopal/" target="_blank">Roushan Raja</a></p>
  </footer>




</body>
</html>
