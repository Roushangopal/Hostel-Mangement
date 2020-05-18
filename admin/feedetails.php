<?php require "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>fee-details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main2.css">
	<style>
   button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
 }
 button:hover {
  opacity: 0.8;
}
</style>

</head>
<body>
<form action="query/empty2.php" method="post">
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								
								<th class="column1">USN</th>
								<th class="column2">Name</th>
								<th class="column3">FEES SUBMITTED</th>
								<th class="column4" style="text-align:left">DATE</th>
								<th class="column5" style="text-align:left">RECEIPT NO</th>
								<th class="column6"  style="text-align:left">OPERATION</th>
								
							</tr>
						</thead>
						<?php require "../connection.php"; ?>
						<?php
						
						

						$sql="select s.usn,name,fees_submitted,date,recipt_no from fees c,fees_log d,student s where s.usn=c.usn and c.usn=d.usn";
						$result=mysqli_query($con,$sql);

						if($result-> num_rows>0)
						{
							while($row = $result-> fetch_assoc())
							{
								echo "<tr>";

								echo "<td>" .$row["usn"]."</td>";
								echo "<td>" .$row["name"]."</td>";
								echo "<td>" .$row["fees_submitted"]."</td>";
								echo "<td>" .$row["date"] ."</td>";
								echo "<td>" .$row["recipt_no"] ."</td>";?>
								<td><a href='update1.php?usn=<?php echo $row['usn'] ?>'> Edit</a> </td>
							<?php	echo "</tr>";
							}
							echo "</table>";
						}
						else{
							echo "No Messages";
						}
						
						?>
						</table>
				</div>
			</div>
		</div>
	</div>
	
	
  
  </div>
</form>

	


</body>
</html>