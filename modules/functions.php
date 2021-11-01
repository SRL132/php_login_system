<?php

function authUser(){
    session_start();
    $username=$_POST["username"]; 
    $password=$_POST["password"];
}

function validateUser(){
if (isset ($_POST["username"]) && isset ($_POST["password"])) {
    $conn = mysqli_connect("localhost", "root", "123456", "user_registry","3307");
    $username=$_POST["username"];
    $password=$_POST["password"];    
    $sql = "SELECT password FROM user_registry WHERE username ='$username'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($res);
    $row["password"]===$password? header("Location:./panel.php") : header("Location:./index.php");
 };
};

function registerUser(){
    session_start();

    $conn = mysqli_connect("localhost", "root", "123456", "user_registry","3307");

    if ($conn) echo "connected";
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }
      
    // Taking values from the form data(input)
    if (isset($_POST["newUsername"])){
      $newUsername = $_POST["newUsername"];
      $newPassword = $_POST["newPassword"];     
      $cyphering = "AES-128-CTR";
      $option=0;
      $encryption_iv="1234567890123456abcdefghijklmn";
      $encryption_key="hello";   
      $encryptedPassword = openssl_encrypt($newPassword, $cyphering,$encryption_iv,$option,$encryption_key);
      $decryptedPassword = openssl_decrypt($encryptedPassword, $cyphering,$encryption_iv,$option,$encryption_key);      
      $sql = "INSERT INTO user_registry(username,password)  VALUES ('$newUsername', 
        '$encryptedPassword')";
      
    if(mysqli_query($conn, $sql)){
        echo "<h3>Registered successfully." 
            . " You can now log in </h3>"; 

        echo nl2br("\n$newUsername\n $encryptedPassword");
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
      
    // Close connection
    mysqli_close($conn);        
    };

}

//close session
function closeSession(){
    unset($_SESSION);
    {
       if (ini_get("session.use_cookies")) {
           $params = session_get_cookie_params();
           setcookie(
               session_name(),
               '',
               time() - 42000,
               $params["path"],
               $params["domain"],
               $params["secure"],
               $params["httponly"]
           );
       }
   }

    session_destroy();
    header("Location: ./index.php?logout=true");  
}