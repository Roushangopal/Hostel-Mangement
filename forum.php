<!DOCTYPE html>
<html>
<title>hostel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<body class="w3-content" style="max-width:1300px;background-image:url('photos/logo1.jpg');background-size:100% 100%">

<div class=" w3-teal w3-container" style="height:700px">
    <div class="w3-padding-64 w3-padding-large" id="contact">
      <h1>Complaint</h1>
      <p class="w3-opacity">GET IN TOUCH</p>

      <form class="w3-container w3-card w3-padding-32 w3-white" action="query/complaint_message.php" method="post" target="_self">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Name">
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Email">
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Message">
        </div>
        <button type="submit" class="w3-button w3-teal w3-right">Send</button>
      </form>

    </div>
  </div>

<footer class="w3-container w3-black w3-padding-16">
  <p style="text-align:right;"> &copy 2019 www.vitb.ac.in | All Rights Reserved |  Design & Developed by : <a href="https://www.instagram.com/roushan_gopal/" style="color: #fff" target="_blank">Roushan Raja</a></a></p>
</footer>

</body>
</html>