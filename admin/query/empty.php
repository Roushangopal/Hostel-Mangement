<html>
<head>
<title>connection</title>
</head>
<?php require "../../connection.php"; ?>
<?php
if(isset($_POST["num"]))
{
   $num=$_POST["num"];
   $a=implode(",",$num);
   echo $a;
   
        $q="delete from complaint where name in ('$a')";
      mysqli_query($con,$q);
      ?>
      <script>
      window.location.href='../message1.php';
      </script>
      <?php
}
else 
{
    ?>
    <script>
    window.alert('please check user to delete');
    window.location.href='../message1.php';
    </script>
    <?php
}



?>
</html>