<?php
$con = mysqli_connect('localhost','root','');
if($con)
{
echo "";
}
else
{
echo "no connection";
}
$con->set_charset("utf8");
mysqli_select_db($con,'project');
?>