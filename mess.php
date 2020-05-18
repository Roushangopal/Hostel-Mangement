<!DOCTYPE html>
<html lang="en">
<head>
	<title>mess</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

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

<form action="" method="post">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								
								<th class="column1">DAY</th>
								<th class="column2">BREAKFAST</th>
								<th class="column3" >LUNCH</th>
								<th style="column4">SNACKS</th>
								<th style="column5">DINNER</th>
								
							</tr>
						</thead>
						
					
						<?php require "connection.php"; ?>
                        <?php
						$sql="select day,breakfast,lunch,snacks,dinner from mess;";
						$result=mysqli_query($con,$sql);

						if($result-> num_rows>0)
						{
							while($row = $result-> fetch_assoc())
							{
								echo "<tr>";
							    echo "<td>" .$row["day"]."</td>";
								echo "<td>" .$row["breakfast"]."</td>";
								echo "<td>" .$row["lunch"]."</td>";
								echo "<td>" .$row["snacks"]."</td>";
								echo "<td>" .$row["dinner"] ."</td>";
								echo "</tr>";
							}
							echo "</table>";
						}
						else{
							echo "No Data Availaible";
						}
						
						?>
						</table>
				</div>
			</div>
		</div>
	</form>


</body>
</html>