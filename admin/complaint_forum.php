<?php require "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>complaint</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
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
<body style="background-image:url('photos/logo1.jpg');background-size:100% 100%">

	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
						
							<tr class="table100-head">
								
								<th class="column1">ID</th>
								<th class="column2">Name</th>
								<th class="column3">Email</th>
								<th style="text-align:left;">Message</th>
								
							</tr>
						</thead>
						<form action="query/empty.php" method="post">
						<?php require "../connection.php"; ?>
						<?php
						

						$sql="select * from complaint";
						$result=mysqli_query($con,$sql);

						if($result-> num_rows>0)
						{
							while($row = $result-> fetch_assoc())
							{
								echo "<tr>";
								
                                ?>  <td><input type="checkbox" name="num[]" value="<?php echo $row["id"];?>"></td> <?php
								
								echo "<td>" .$row["name"]."</td>";
								echo "<td>" .$row["email"]."</td>";
								echo "<td>" .$row["message"] ."</td>";
								echo "</tr>";
							}
							echo "</table>";
						}
						else{
							echo "No complaints";
						}
						
						?>
						</table>
				</div>
			</div>
		</div>
	</div>
	
	<button type="submit">Delete Selected</button>
  
  </div>
</form>

	


</body>
</html>