<?php require "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>message</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main3.css">
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
<form action="query/empty1.php" method="post">
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								
								<th class="column1"></th>
								<th class="column2">Name</th>
								<th class="column3">Email</th>
								<th style="text-align:left;">Message</th>
								
							</tr>
						</thead>
						<?php require "../connection.php"; ?>
						<?php
					

						$sql="select name,email,message from complaint_forum";
						$result=mysqli_query($con,$sql);

						if($result-> num_rows>0)
						{
							while($row = $result-> fetch_assoc())
							{
								echo "<tr>";
								
                                ?>  <td><input type="checkbox" name="num[]" value="<?php echo $row["name"] ?>"></td> <?php
								
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
	
	<button type="submit" name="submit">Delete Selected</button>
  
  </div>
</form>

	


</body>
</html>