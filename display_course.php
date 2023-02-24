<?php
    require "db_connect.php";
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="form_styles.css" />
</head>
<style>
h2 {
    display: block;
    font-size: 2em;
    margin-block-start: 5em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
</style>

<body>
    <div>
        <?php include 'header2.php';?>
    </div>
    <?php
			$query = $con->prepare("SELECT * FROM tbl_course ORDER BY c_id");
			$query->execute();
			$result = $query->get_result();
			if(!$result)
				die("ERROR: Couldn't fetch course");
			$rows = mysqli_num_rows($result);
			if($rows == 0)
				echo "<h2 align='center' margin-bottom='30px'>No course available</h2>";
			else
			{
				echo "<form class='cd-form'>";
				echo "<div class='error-message' id='error-message'>
						<p id='error'></p>
					</div>";
				echo "<table style='color:white ;margin-top:150px' ;width='100%' cellpadding=10 cellspacing=10>";
				echo "<tr>
						<th>Sr<hr></th>
						<th>course Ccode<hr></th>
						<th>Course Name<hr></th>
						<th>Faculty Name<hr></th>
						
					</tr>";
				for($i=1; $i<=$rows; $i++)
				{
					$row = mysqli_fetch_array($result);
					echo "<tr>";
					echo "<td>".$i."</td>";
					for($j=1; $j<4; $j++){
					    echo "<td>".$row[$j]."</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
				
				echo "</form>";
			}
			
			
		?>

</body>

</html>