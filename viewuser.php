<?php
	$con = mysqli_connect("localhost","root","","test");
	
	$query = "select * from tbl_reg";
	$result = mysqli_query($con,$query);
	
	
	mysqli_close($con);
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv = "x-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="form_styles.css" />
	<title>view user</title>
</head>
<body>
	<?php include 'header2.php';?>
   
	<main class="view" align="center">
		<div class="wrapper" align="center">
			<h1 align="center"><u>List Users</u></h1>
			<table style='margin-top:-100px' ; border="0px" cellspacing="10px" cellpadding="10px" align="center" class="data">
				<tr>
					<th>user name</th>
					<th>student_id</th>
					<th>semester</th>
					<th>password</th>
					<th>email-id</th>
				</tr>
				
				<?php foreach ($result as $row){?>
				<tr>
					<td><?php echo $row['fname'] ?></td>
					<td><?php echo $row['student_id'] ?></td>
					<td><?php echo $row['semester'] ?></td>
					<td><?php echo $row['password'] ?></td>
					<td><?php echo $row['email_id'] ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</main>
</body>
</html>