<?php
	require "db_connect.php";
	require "message_display.php";
	require "verify_logged_out.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">INFOINSTRUCTORS</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="main1.php">HOME</a></li>
                    <li><a href="home.php">COURSE</a></li>
                    <li><a href="test1.php">TEST</a></li>
                    <li><a href="cn.php">CONTACT</a></li>
                    <li><a href="login.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <h1>Online <br><span>Course</span> <br>Registration</h1><br>
            <p class="par">The Online Course Registration is Web-based registration software that
                helps you <br>to register courses online. <br> It is ideal for schools,educational campus and online
                training program.
                <br>Our Motto is to provide pure and usable material.
            </p>

            <button class="cn"><a href="reg.php">JOIN US</a></button>
        </div>
    </div>
    </div>
    </div>

    <?php
		if(isset($_POST['l_login']))
		{
			$user = $_POST['l_user'];
			$pass = $_POST['l_pass'];
			$query = "SELECT username,passwprd FROM tbl_admin WHERE username = '$user' AND password ='$pass'";
			$result = $con->query($query);
			if($result->num_rows>0)
				echo "Login";
			else
			{
				$_SESSION['type'] = "tbl_admin";
				$_SESSION['admin_id'] = mysqli_fetch_array($result)[0];
				$_SESSION['username'] = $_POST['l_user'];
				header('Location: home.php');
			}
		}
	?>

    <?php
		if(isset($_POST['l_login']))
		{
			$user = $_POST['l_user'];
			$pass = $_POST['l_pass'];
			$query = "SELECT username,passwprd FROM tbl_admin WHERE username = '$user' AND password ='$pass'";
			$result = $con->query($query);
			if($result->num_rows>0)
				echo "Login";
			else
			{
				$_SESSION['type'] = "tbl_admin";
				$_SESSION['admin_id'] = mysqli_fetch_array($result)[0];
				$_SESSION['username'] = $_POST['l_user'];
				header('Location: home.php');
			}
		}
	?>


</body>

</html>