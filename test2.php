<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IH=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">

    <title>Test</title>

    <script>
    function showquestion() {


        document.getElementById("html_quiz").style.display = "block";
        document.getElementById("html_quiz").style.visibility = "visible";

        document.getElementById("css_quiz").style.display = "none";
        document.getElementById("js_quiz").style.display = "none";
    }

    function doThisOnChange() {

        let t = document.getElementById("sel").value;
        if (t == 'html') {
            console.log(t);

            document.getElementById("html_quiz").style.display = "block";
            document.getElementById("html_quiz").style.visibility = "visible";
			  
            document.getElementById("css_quiz").style.display = "none";
            document.getElementById("js_quiz").style.display = "none";
			

        } else if (t === "css") {
            console.log(t);

            document.getElementById("html_quiz").style.display = "none";
            document.getElementById("js_quiz").style.display = "none";
		
			  
            document.getElementById("css_quiz").style.display = "block";
            document.getElementById("css_quiz").style.visibility = "visible";


        } else if (t === "js") {
            console.log(t);

            document.getElementById("css_quiz").style.display = "none";
            document.getElementById("html_quiz").style.display = "none";

            document.getElementById("js_quiz").style.display = "block";

            document.getElementById("js_quiz").style.visibility = "visible";


        }
		else {
            console.log(t);

            document.getElementById("html_quiz").style.display = "block";
            document.getElementById("html_quiz").style.visibility = "visible";

            document.getElementById("css_quiz").style.display = "none";
            document.getElementById("js_quiz").style.display = "none";
			

        }
    }
    </script>
</head>

<body onload="showquestion()">
    <main>

        <div class=" head">
            <?php include 'header.php';?>
        </div>
        <br><br><br>

        <div class="dropdown">
            <select class="course" name="course" id="sel" onchange='doThisOnChange()'>
                <option id="html" name="html" selected>html</option>
                <option id="css" name="css">css</option>
            </select>
			
        </div>
		<h2>Web Development Quiz</h2>
        <div class="quiz">
            <div id="html_quiz" class="first"><?php include "html.php"?></div>
			<div id="css_quiz" class="second"><?php include "css.php"?></div>
			<div id="js_quiz" class="third"><?php include "js.php"?></div>
        </div>
        <main>

</body>

</html>