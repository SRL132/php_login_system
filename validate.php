<?php

session_start();

echo "validated. Result:". "<br>";
$realUsername='Sergi';
$realPassword='123456';

if (isset ($_POST["username"]) && isset ($_POST["password"])) {
    $username=$_POST["username"]; 
    $password=$_POST["password"];

    print_r( $username===$realUsername && $password===$realPassword?  "you logged in" :  "wrong username or password");

    $username===$realUsername && $password===$realPassword?  header("Location:./panel.php") : header("Location:./index.php");

};

// "validate.php": All login validations must be done in this file 
// receiving the form data by the POST method and this should redirect the user depending on 
// whether the login is correct or not. 
// You can use a simple string comparison or anything you want for deciding if the login is correct or not.

function authUser(){
    session_start();
    $username=$_POST["username"]; 
    $password=$_POST["password"];

}

 





// query from database

// $sql = "SELECT password FROM dbusers WHERE user='$email'";
// $res=mysqli_query($sql), $conn;
// $row=mysqli_fetch_assoc($res);
// $row["password"];

// // if ($row["passord"]===$password){

// };

// if ($passworddb ===$password && $emaildb ===$email){
//   header("locaion: ../dashboard.php");
// }