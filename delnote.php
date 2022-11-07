<?php
     session_start();
     $con = mysqli_connect('localhost','root','');

     mysqli_select_db($con,'Notes');


     $first = implode($_SESSION['first']);
     $last = implode($_SESSION['last']);


     if(isset($_GET['deltitle'])){
        $title = $_GET['deltitle'];

        $sql = "delete from $first$last where title='$title'";

        $result = mysqli_query($con,$sql);
        header('location:noteblock.php');
     }
?>
