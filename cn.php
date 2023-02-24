<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cn1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <?php include 'header.php';?>
    </div>
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="phone details">

                    <div class="topic">Phone</div>
                    <div class="text-one">+91 8511777720</div>
                    <div class="text-two">+91 9998460436</div>
                </div>
                <div class="email details">

                    <div class="topic">Email</div>
                    <div class="text-one">vedantatmiya369@gmail.com</div>
                    <div class="text-two">info.course@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>If you have any work from me or any types of quries related to my website or courses, you can
                    send me
                    message from here. It's my pleasure to help you.</p>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Enter your name" name="name">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Enter your email" name="email">
                    </div>
                    <div class="input-box message-box">
                        <input type="text" placeholder="Enter your message" name="msg">
                    </div>
                    <div class="button">
                        <input type="submit" value="Send Now" name="submit">

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php
	if(isset($_POST["submit"]))
	{
			$name=$_POST["name"];
			$email=$_POST["email"];
			$msg=$_POST["msg"];
			
			
			$con=mysqli_connect("localhost","root","","test")
			or die("Could Not Connect");
			
			// $sql="select * from tbl_contact where name='$name' and email='$email'";
			// $res=mysqli_query($con,$sql) or die("Could not fetch data...");
			if(mysqli_num_rows($res)>0)
			{
				echo "Record already exist";
			}
			else
			{
			$sql="insert into tbl_contact values('$name','$email',$msg,)";
			mysqli_query($con,$sql) or die("Could not insert");
			echo "Record Inserted";
			}
	}
?>