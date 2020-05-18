<html>
<head>
<title>connection</title>
</head>
<?php require "../../connection.php"; ?>
<?php

//$q = "truncate table complaint_forum;";
if(isset($_POST["num"]))
{
   $num=$_POST["num"];
   $a=implode(",",$num);
   echo $a;
   
        $q="delete from complaint_forum where name in ('$a')";
      mysqli_query($con,$q);
      ?>
    <script>
    
    window.location.href='../complaint.php';
    </script>
    <?php
   
}
//mysqli_query($con,$q);
else 
{
    ?>
    <script>
    window.alert('please check user to delete');
    window.location.href='../complaint.php';
    </script>
    <?php
}

?>

</html>