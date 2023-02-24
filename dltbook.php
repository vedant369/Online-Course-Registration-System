<?php

session_start();

require "db_connect.php";

if(!isset($_SESSION['c_id'])){
    header('location:index.php');	
 }

if(isset($_GET['c_id'])){
    $id=$_GET['c_id'];

    $qry="DELETE from tbl_course where c_id=$id";
    $result=mysqli_query($con,$qry);
            
			if($result){
                header('Location:delete_course.php');
            }else{
                echo"ERROR!!";
            }

 }
?>