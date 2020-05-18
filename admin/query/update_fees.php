<html>
<?php require "../../connection.php"; ?>
<?php

$usn = $_POST['usn'];
$amount = $_POST['amount'];
$reciptno=$_POST['reciptno'];
$duedate=$_POST['duedate'];
$q = "update fees set fees_submitted='$amount',recipt_no='$reciptno',due_date='$duedate' where usn='$usn'";

$result=mysqli_query($con,$q)or die(mysqli_error($con));;

?>
<script>
window.alert('Data Updated!.');
window.location.href='../feedetails.php';
</script>
<?php


?>
</html>