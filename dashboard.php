<?php
	require "db_connect.php";
	

	require "db_connect.php";
	require "message_display.php";
	require "verify_logged_out.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="da1.css">
    <link rel="stylesheet" href="profile.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">INFOINSTRUCTORS</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="insert_course.php" value="Insert New course">Insert new Course</a></li>
                    <li><a href="update_course.php" value="Update existing course">Update Course</a></li>
                    <li><a href="delete_course.php" value="Delete course">Delete Course</a></li>
                    <li><a href="display_course.php" value="Display Available courses">Display Available Course</a></li>
					<li><a href="viewuser.php" value="Display users">Display users</a></li>
                    <li><a href="login.php"><u>LOGOUT</u></a></li>
                    <li>
                        <div class="dropdown">
                            <!-- <button class="dropbtn">
                                <p> Vedant<?php echo $_SESSION['username'] ?></p>
                            </button> -->
                            <div class="dropdown-content">
                                <a href="login.php">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <div class="content">
            <h1>Admin <span>Side</span> Panel</h1><br>
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
</body>

</html>