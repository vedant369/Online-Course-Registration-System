<?php
	require "db_connect.php";
	require "message_display.php";
?>

<DOCTYPE html>

    <head>
        <link rel="stylesheet" href="login1.css">
    </head>

    <body>
        <div class="form">
            <h2>Login Here</h2>
            <form method="POST" action="#">
                <input class="l-user input" type="text" name="l_user" placeholder="Username" required />
                <input class="l-pass" type="password" name="l_pass" placeholder="Password" required />
                <select class="type" name="user_type">
                    <option value="admin"> Admin</option>
                    <option value="user">User</option>
                </select>
                <input type="submit" class="btnn" value="Login" name="l_login">
            </form>
            <b>
                <p class="link">Don't have an account<br>
            </b>
            <a href="reg.php">Now Register</a> here</a><br>
            <a href="fpass.php">Forgot password?</a></p>
        </div>

    </body>

    </html>


    <?php
    session_start();
		if(isset($_POST['l_login']))
		{
            $q1 = "SELECT admin_id FROM tbl_admin WHERE username = ? AND password = ? ";
            $q2 = "SELECT student_id FROM tbl_reg WHERE fname = ? AND password = ? ";
            if($_POST['user_type'] == 'admin')
            {
                $query = $con->prepare($q1);
            }
            else{
                $query = $con->prepare($q2);
            }
			
			$query->bind_param("ss", $_POST['l_user'],$_POST['l_pass']);
			$query->execute();
			if(mysqli_num_rows($query->get_result()) != 1)
            {
                echo "Invalid username/password combination";                
            }
				
			else
			{
                echo "login successful";
				$_SESSION['type'] = $_POST['user_type'];
				$_SESSION['admin_id'] = mysqli_fetch_array($result)[0];
				$_SESSION['username'] = $_POST['l_user'];
                $_SESSION['password'] = $_POST['l_pass'];
               
                if($_POST['user_type'] == 'admin')
                {
                    header('Location: dashboard.php');
                }
                else if($_POST['user_type'] == 'user')
                {
                    header('Location: main1.php');
                }   
				
			}
		}
	?>