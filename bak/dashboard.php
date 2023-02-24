<?php
$con = mysqli_connect("localhost", "root", "", "onestop");

// $query = "select * from dept";
// $result = mysqli_query($con, $query);

if (isset($_POST['addservice'])) {

    $snm = $_POST['snm'];
    $scost = $_POST['scost'];
    $stype = $_POST['stype'];

    if (empty($snm) || empty($scost) || empty($stype)) {
        echo "<script>
           setTimeout(()=>{
            Swal.fire(
                'All Fields are Required!',
              )
        },250)
           </script>";
    } else {

        $sql = "INSERT INTO service(snm,scost,stype) VALUES ('$snm','$scost','$stype')";
        if (mysqli_query($con, $sql)) {
            echo "<script>
           
           setTimeout(()=>{
            Swal.fire(
                'Service Saved!',
              )
        },250)
           </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    input,
    label,
    button,
    select,
    input,
    table {
        font-size: 20px;
    }

    body {
        margin: 0;
        height: 100vh;
        overflow: hidden;
    }

    .wrapper {
        display: flex;
    }

    .leftcol {
        width: 15%;
        font-size: 0px;
    }

    .rightcol {
        width: 85%;

    }

    .sidebar {
        width: 100%;
        background-color: black;
        height: 100vh;
        padding-top: 20px;
    }

    .sidebar a {
        color: white;
        display: block;
        text-align: center;
        text-decoration: none;
        font-size: 24px;
    }

    .nestedmenu1,
    .nestedmenu2 {
        display: none;

    }

    .nestedmenu1 a {
        text-align: right;
    }

    .menu {
        padding: 10px 0px;
        width: 100%;
        background-color: black;
        padding-right: 50px;
        box-sizing: border-box;
    }

    .menu h2 {
        color: white;
        text-align: end;
    }

    .servicewrapper {
        padding-left: 30px;
        padding-top: 30px;
        padding-right: 30px;

    }

    .service .inputgroup {
        margin-top: 12px;
    }

    .service input[type=text] {
        width: 100%;
        height: 40px;
        border-radius: 5px;
        border: 2px solid black;
        margin-top: 5px;
    }

    .service input[type=file] {
        width: 100%;
        height: 40px;
        border-radius: 5px;
        margin-top: 5px;
    }

    .service select {
        width: 100%;
        height: 40px;
        border-radius: 5px;
        margin-top: 5px;
        border: 2px solid black;
    }

    .service button {
        background-color: black;
        color: white;
        padding: 10px 20px;
        width: 150px;
        border: none;
        border-radius: 5px;
        margin-top: 20px;
    }

    .viewservices {
        width: 100%;
        margin-top: 20px;
        border: 2px solid black;
        border-collapse: collapse;
    }

    .viewservices th {
        border: 2px solid black;

    }

    .viewservices td {
        font-weight: normal;
        border: 2px solid black;
        border-collapse: collapse;
    }

    /* .service .inputgroup input{
            width: 100%;
        } */
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="leftcol">
            <img src="logo2.jpg" width="100%">
            <aside class="sidebar">
                <a href="dashboard.php" class="link">Home</a>
                <a href="service.php" class="link">Service</a>
                <a href="worker.php">Worker</a>
                <a href="category.php">Category</a>
                <a href="login.php">Log Out</a>
            </aside>
        </div>
        <div class="rightcol">
            <nav class="menu">
                <h2>Welcome,Admin</h2>
            </nav>

            <h1 style="margin: 20px;">Home Page Under Construction</h1>
        </div>
    </div>


    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>