<?php
	if(isset($_POST["submit"]))
	{
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$student_id=$_POST["student_id"];
			$semester=$_POST["semester"];
			$email_id=$_POST["email_id"];
			$password=$_POST["password"];
			
			$con=mysqli_connect("localhost","root","","test")
			or die("Could Not Connect");
			
			$sql="select * from tbl_reg where fname='$fname' and password='$password'";
			$res=mysqli_query($con,$sql) or die("Could not fetch data...");
			if(mysqli_num_rows($res)>0)
			{
				echo "Record already exist";
			}
			else
			{
			$sql="insert into tbl_reg values('$fname','$lname',$student_id,'$password',$semester,'$email_id')";
			mysqli_query($con,$sql) or die("Could not insert");
			echo "Record Inserted";
			}
	}
?>
<html>
<head>
	<link rel="stylesheet" href="reg1.css">
</head>
<body>
<form method="post">
<div class="main">
	<table width=30% cellpadding=6 border=1 class="intable" align="center">
	<tr>
		<td>First Name</td>
		<td><input type="text" name="fname"></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="lname"></td>
	</tr>
	<tr>
		<td>Studentid</td>
		<td><input type="text" name="student_id"></td>
	</tr>
	<tr>
		<td>Semester</td>
		<td><input type="text" name="semester"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email_id"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Login"></td>
	</tr>
	<tr>
		<td colspan=2>New User<a href="index.php">Login</a></td>
	</tr>
	</table>
</div>
	</form>
</body>
</html>