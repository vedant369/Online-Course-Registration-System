<?php
	require "db_connect.php";
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="form_styles.css" />
</head>

<body>
<div>
        <?php include 'header2.php';?>
    </div>
    <form class="cd-form" method="POST" action="#">

        <h1 align="center">Add New Course Details</h1>
        <div class="icon">
            <input class="b-title" type="text" name="c_id" placeholder="Course Code" required />
        </div>

        <div class="icon">
            <input class="b-author" type="text" name="course_name" placeholder="Course Name" required />
        </div>

        <div class="icon">
            <input class="b-author" type="text" name="f_name" placeholder="Faculty Name" required />
        </div>
        <br />
        <input class="b-isbn" type="submit" name="add" value="Add Course" />
    </form>

    <body>

        <?php
		if(isset($_POST['add']))
		{
			$query = $con->prepare("SELECT c_id FROM tbl_course WHERE c_id = ?;");
			$query->bind_param("s", $_POST['c_id']);
			$query->execute();
			
			if(mysqli_num_rows($query->get_result()) != 0)
				echo error_with_field("A Course is already exists", "c_id");
			else
			{
				$query = $con->prepare("INSERT INTO tbl_course  (course_code, course_name, faculty_name) VALUES( ?, ?,?);");
				
				
				$query->bind_param("sss",$_POST['c_id'], $_POST['course_name'], $_POST['f_name']);
				
				
				if(!$query->execute()){
					die(error_without_field("ERROR: Couldn't add course"));
				}else
				echo "New course record has been added";
				
			}
		}
	?>

</html>