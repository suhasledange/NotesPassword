<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'manager');
    
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $s = "select * from registration where email='$email' && password='$password'";
    $res = mysqli_query($con,$s);
    $num = mysqli_num_rows($res);
    
    if($num == 1){
        header('location:signup.php');
    }
    else{
            $reg = "insert into registration(id,primg,first,last,email,password) values(null,'profile-small.png','$first','$last','$email','$password')";
            mysqli_query($con,$reg);
            
            mysqli_select_db($con,'Notes');
            $qe = "CREATE TABLE $first$last(title VARCHAR(225) NOT NULL , note VARCHAR(255) NOT NULL , PRIMARY KEY (title))";
            mysqli_query($con,$qe);

            mysqli_select_db($con,'Passwords');
            $qe = "CREATE TABLE $first$last(title VARCHAR(225) NOT NULL , pass VARCHAR(255) NOT NULL , PRIMARY KEY (title))";
            mysqli_query($con,$qe);
            
            mysqli_select_db($con,'noteimg');
            $qe = "CREATE TABLE $first$last(title VARCHAR(225) NOT NULL , img VARCHAR(255) NOT NULL , PRIMARY KEY (title))";
            mysqli_query($con,$qe);

            header('location:login.php');

        }

?>