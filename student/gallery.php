<!DOCTYPE html>
<html>
<title>gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
<link href="css/style1.css" rel="stylesheet" />    
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel='stylesheet' type='text/css' />
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>


<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="../index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">HOME</a></br>
    <a href="studentsearch.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">STUDENT CORNER</a></br>
    <a href="http://vkitbangalore.com/News" class="w3-bar-item w3-button w3-text-grey w3-hover-black">NOTIFICATION</a></br>
    <a href="hostel.php#contact-sec" class="w3-bar-item w3-button w3-text-grey w3-hover-black">CONTACT US</a></br>
    <a href="about.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black">ABOUT</a></br>
  </div>
</nav>


<div class="w3-content" style="max-width:1500px">


<div class="w3-opacity">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span> 
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1><b>VIVEKANANDA INSTITUTE OF TECHNOLOGY</b></h1>
  <p class="w3-padding-16"><button class="w3-button w3-black" onclick="myFunction()">Toggle Grid Padding</button></p>
</header>
</div>


<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="images1/IMG-20191126-WA0005.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0006.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0007.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0008.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0009.jpg" style="width:100%">
    
  </div>

  <div class="w3-third">
    <img src="images1/IMG-20191126-WA0010.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0011.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0012.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0013.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0014.jpg" style="width:100%">
    
  </div>

  <div class="w3-third">
    <img src="images1/IMG-20191126-WA0016.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0017.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0018.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0019.jpg" style="width:100%">
    <img src="images1/IMG-20191126-WA0020.jpg" style="width:100%">
   
  </div>
</div>


</div>


<div id="footer">
          &copy 2019 www.vitb.ac.in | All Rights Reserved |  Design & Developed by : <a href="https://www.instagram.com/roushan_gopal/" style="color: #fff" target="_blank">Roushan Raja</a></a>
    </div>
 
<script>

function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
