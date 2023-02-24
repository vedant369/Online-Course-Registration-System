<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IH=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">

    <title>Test</title>

    <script>
    function startquiz() {
        let t = document.getElementById("sel").value;
        window.location.href = './quiz/' + t + '.html';
    }
    </script>
</head>
<style>
button {
    background: #3c3939;
    border: 0;
    outline: 0;
    border-radius: 10px;
    margin-left: 50px;
    padding: 10px;
    cursor: pointer
}
</style>

<body>
    <main>

        <div class=" head">
            <?php include 'header.php';?>
        </div>
        <br><br><br>

        <div class="dropdown">
            <select class="course" name="course" id="sel">
                <option id="c" name="c" selected>C</option>
                <option id="Cpp" name="cpp">Cpp</option>
                <option id="html" name="html">HTML</option>
            </select>

        </div>

        <button onclick="startquiz()">
            <a style="color:white; text-decoration:none">Start Quiz</a>
        </button>

        <main>

</body>

</html>