<?php
	require "db_connect.php";
	
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="update.css" />

</head>

<body>
	<div>
        <?php include 'header2.php';?>
    </div>
    <form class="cd-form" method="POST" action="#">

        <h1 align="center">Update Exisiting Course</h1>
<div style="align-items:left ; height:100px"  >
        <div class="icon" style="margin-right:200px">
            <input class="title" type="text" name="c_id" placeholder="Course Code" required />
        </div>

        <div class="icon" >
            <input class="b-author" type="text" name="course_name" placeholder="Course Name" required />
        </div>
		</div>
        <input type="submit" name="add" value="Update Book Courses" />
    </form>
</body>

<?php
		if(isset($_POST['add']))
		{
			$query = $con->prepare("SELECT course_code FROM tbl_course  WHERE course_code = ?;");
			$query->bind_param("s", $_POST['c_id']);
			$query->execute();
			if(mysqli_num_rows($query->get_result()) != 1)
				echo error_with_field("Invalid", "c_id");
			else
			{
				$query = $con->prepare("UPDATE tbl_course SET course_name = ? WHERE course_code = ?;");
				$query->bind_param("ss", $_POST['course_name'], $_POST['c_id']);
				if(!$query->execute())
					die(error_without_field("ERROR: Couldn\'t update any courses"));
				echo ("Name of Course  has been updated");
			}
		}
	?>

</html>