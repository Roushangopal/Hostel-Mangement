<?php require "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>students</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main1.css">
	<style>

    #outer 
	{
		width:100%;
		text-align:center;
		background-color:black;
	}
    .inner
	{
		display:inline-block;
	}
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
<form action="query/emptystudents.php" method="post">
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">

								<th class="column1"></th>
								<th class="column1">USN</th>
								<th class="column2">Name</th>
								<th class="column3">Room No</th>
								<th style="column4">Gender</th>
								<th style="column5">Batch</th>
								<th colspan="2" style="column6">Operation</th>
								
							</tr>
						</thead>
						<?php require "../connection.php"; ?>
						<?php

						$sql="call getstudent(0)";
						$result=mysqli_query($con,$sql);

						if($result-> num_rows>0)
						{
							while($row = $result-> fetch_assoc())
							{
								echo "<tr>";
								
                                ?>  <td><input type="checkbox" name="num[]" value="<?php echo $row["usn"];?>"></td> <?php

                                
								echo "<td>" .$row["usn"]."</td>";
								echo "<td>" .$row["name"]."</td>";
								echo "<td>" .$row["room_no"]."</td>";
								echo "<td>" .$row["gender"]."</td>";
								echo "<td>" .$row["batch"] ."</td>";?>
								<td><a href='update.php?usn=<?php echo $row['usn'] ?>'> Edit</a> </td>
								<td><a href='query/details1.php?usn=<?php echo $row['usn'] ?>'>Details</a></td>
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
				<div class="inner"><button type="submit">DELETE</button></div>
	</form>
			</div>
		</div>
	</div>
	<div id="outer">
	
	<form action="insert.php">
	
	<div><button type="submit">INSERT</button></div>
</form>
  </div>
  </div>

	


</body>
</html>