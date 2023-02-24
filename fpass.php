<?php
if (isset($_POST['reset'])) {

    $con = mysqli_connect("localhost","root","","test");

    $fname = $_POST['username'];
    $password = $_POST['password'];
    $cpwd = $_POST['cpwd'];


    if($password == $cpwd){
        $sql= "update tbl_reg set password = '$password'  where fname = '$fname'";
    
        $result = mysqli_query($con,$sql);
        if($result){
            header("Location: login.php");
        }else{
                echo "<script>
                    alert('Something Went Wrong!')
                </script>";
        }
    }
    else{
        echo "<script>
                    alert('Password and Confirm Password Must be Same!')
                </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="forgotpwd">
        <div class="wrapper">
            <form class="forgotpwdform" method="post">
                <h1>Forgot Password</h1>
                <hr color="black" size="2px">

                <div class="inputgroup">
                    <label>Username:</label>
                    <input name="username" type="text">
                </div>

                <div class="inputgroup">
                    <label>New Password:</label>
                    <input name="password" type="password">
                </div>

                <div class="inputgroup">
                    <label>Confirm New Password:</label>
                    <input name="cpwd" type="password">
                </div>

                <button type="submit" name="reset">Reset Password</button>
            </form>
		
        </div>
    </main>


    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>