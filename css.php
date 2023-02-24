<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IH=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">

    <title>css</title>

</head>

<script>
function totalMarks() {
    document.getElementById("answer").innerHTML = "Total Marks";
    console.log("sdsds");
}
</script>

<body>

    <form method="POST" action="#">



        <div class="container">

            <h1>Q1 .What is css</h1>
            <div id="op1">
                <input type="radio" name="r1" value="1"> Steve Jobs</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r1" value="2"> James Gosling</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r1" value="3"> Dennis Ritchie</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r1" value="4"> Rasmus Lerdorf</input>
            </div>
        </div>
        <br>
        <div class="container">

            <h1>Q2 . Which of the following is not a valid C variable name?</h1>

            <div id="op1">
                <input type="radio" name="r2" value="1"> int number;</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r2" value="2"> float rate;</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r2" value="3"> int variable_count;</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r2" value="4"> int $main;</input>
            </div>
        </div>
        <br>
        <div class="container">

            <h1>Q3 . All keywords in C are in ____________</h1>

            <div id="op1">
                <input type="radio" name="r3" value="1"> LowerCase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r3" value="2"> Uppercase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r3" value="3"> CamelCase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r3" value="4"> None of the mentioned</input>
            </div>
            <div class="space"></div>
        </div>
        <br>
        <div class="container">

            <h1>Q4 . All keywords in C are in ____________</h1>

            <div id="op1">
                <input type="radio" name="r4" value="1"> LowerCase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r4" value="2"> Uppercase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r4" value="3"> CamelCase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r4" value="4"> None of the mentioned</input>
            </div>
            <div class="space"></div>
        </div>
        <br>
		
        <div class="container">

            <h1>Q5 . All keywords in C are in ____________</h1>

            <div id="op1">
                <input type="radio" name="r5" value="1"> LowerCase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r5" value="2"> Uppercase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r5" value="3"> CamelCase letters</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r5" value="4"> None of the mentioned</input>
            </div>
            <div class="space"></div>
        </div>
		<br>
		
        <div class="container">

            <h1>Q6 . Which of the following cannot be a variable name in C?</h1>

            <div id="op1">
                <input type="radio" name="r6" value="1"> volatile</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r6" value="2"> true</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r6" value="3"> friend</input>
            </div>
            <div class="space"></div>
            <div id="op1">
                <input type="radio" name="r6" value="4"> export</input>
            </div>
            <div class="space"></div>
        </div>
		
        <div align="center" margin-top="10px">
            <button class="submit" type="submit" name="css">Submit</button>
            <button class="submit" type="button" name="">Generate</button>
        </div>
		
        <div id=" answer">
        </div>
        </div>

    </form>
</body>

</html>



<?php
		if(isset($_POST['css']))
		{
            $x=0;
            if(isset($_POST["r1"]) && $_POST["r1"]=='3'){
                 $x=$x+1;
            } 
            
            if(isset($_POST["r2"]) && $_POST["r2"]=='4') {
               $x=$x+1;
            }
            if(isset($_POST["r3"]) &&$_POST["r3"]=='2') {
               $x=$x+1;
            }
            if(isset($_POST["r4"]) &&$_POST["r4"]=='2') {
                $x=$x+1;
             }
             if(isset($_POST["r5"]) &&$_POST["r5"]=='2') {
                $x=$x+1;
             }
			 if(isset($_POST["r6"]) &&$_POST["r6"]=='1') {
                $x=$x+1;
             }
            echo "Your css result is ".$x ;
            
            
		}
	?>