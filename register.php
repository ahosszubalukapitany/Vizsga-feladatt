<?php 


    session_start();

    
    $con = mysqli_connect('localhost','root', '' );

    mysqli_select_db($con, 'szakdolgozat');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "SELECT * FROM felhasznalo WHERE name = '$name'";

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo" Usename Already Taken";
    }else{
      $reg = " INSERT INTO `felhasznalo`(`name`, `password`) VALUES ($name,$pass)"
        mysqli_query($con, $reg);
        echo" Registration Successful";
    }


 ?>
