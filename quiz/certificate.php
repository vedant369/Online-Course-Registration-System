<?php
	require "../db_connect.php";
	require "../message_display.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Certificate Template</title>
    <link rel="stylesheet" href="certificate.css">
</head>

<body>
    <script type="text/javascript">
    window.print()
    </script>

    <div class="certificate">
        <h1>Certificate of Achievement</h1>
        <p>This certifies that</p>
        <p>You</p>
        <p>have successfully completed the course </p>

        <?php
      $q1_answer =isset($_POST["q1"]) ?  $_POST["q1"]:" "; 
      $q2_answer = isset($_POST["q2"]) ? $_POST["q2"] :"";
      $q3_answer = isset($_POST["q3"]) ? $_POST["q3"] :"";
      $q4_answer = isset($_POST["q4"]) ? $_POST["q4"] :"";
      $q5_answer = isset($_POST["q5"]) ? $_POST["q5"] :"";
      
      $score = 0;
      if ( $q1_answer == "a") {
        $score++;
      }
      
      if ($q2_answer == "b") {
        $score++;
      }
      if ($q3_answer == "c") {
        $score++;
      }
      if ($q4_answer == "a") {
        $score++;
      }
      if ($q5_answer == "b") {
        $score++;
      }
      
      // Display the user's score
      echo "<p>Your score is: " . $score . "/5</p>";
      echo "<p>Score is : " . $score*100/5 . "%</p>";
    ?>
    </div>
</body>

</html>