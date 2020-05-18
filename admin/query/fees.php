<html>
<?php require "../../connection.php"; ?>
<?php
session_start();

$usn = $_POST['usn'];
$amount = $_POST['amount'];
$reciptno=$_POST['reciptno'];
$duedate=$_POST['duedate'];
$room=$_POST['room'];
if($room==1)
{
    $total1=70000;
$q = "select * from student where usn='$usn'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
    $qw="select * from fees where usn='$usn'";
    $result1=mysqli_query($con,$qw);
    $num1=mysqli_num_rows($result1);
    if($num1==1)
    {
        $row = mysqli_fetch_array($result1);
        $fees = $row['fees_submitted'];
        $new_amt = $fees+$amount;
        $query = "update fees set fees_submitted='$new_amt',recipt_no='$reciptno',due_date='$duedate' where usn='$usn'";
        $result2=mysqli_query($con,$query) or die(mysqli_error($con));

    }
    else 
    {
       $query1 = "insert into fees(usn,fees_submitted,recipt_no,due_date,total_fees) values ('$usn','$amount','$reciptno','$duedate','$total1')";
       $result3=mysqli_query($con,$query1) or die(mysqli_error($con));
    }
?>
<script>
window.alert('Data Inserted.');
window.location.href='../fee.php';
</script>
<?php
}
else
{
    ?>
    <script>
    window.alert("Student data doesn't exist.");
    window.location.href='../fee.php';
    </script>
    <?php
}
}
else
{
    $total=60000;
    $q = "select * from student where usn='$usn'";

    $result=mysqli_query($con,$q);
    
    $num=mysqli_num_rows($result);
    
    if($num==1)
    {
        $qw="select * from fees where usn='$usn'";
        $result1=mysqli_query($con,$qw);
        $num1=mysqli_num_rows($result1);
        if($num1==1)
        {
            $row = mysqli_fetch_array($result1);
            $fees = $row['fees_submitted'];
            $new_amt = $fees+$amount;
            $query = "update fees set fees_submitted='$new_amt',recipt_no='$reciptno',due_date='$duedate' where usn='$usn'";
            $result2=mysqli_query($con,$query) or die(mysqli_error($con));
    
        }
        else 
        {
           $query1 = "insert into fees(usn,fees_submitted,recipt_no,due_date,total_fees) values ('$usn','$amount','$reciptno','$duedate','$total')";
           $result3=mysqli_query($con,$query1) or die(mysqli_error($con));
        }
    ?>
    <script>
    window.alert('Data Inserted.');
    window.location.href='../fee.php';
    </script>
    <?php
    }
    else
    {
        ?>
        <script>
        window.alert("Student data doesn't exist.");
        window.location.href='../fee.php';
        </script>
        <?php
    }

}

?>
</html>