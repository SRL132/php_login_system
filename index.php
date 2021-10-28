
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Login Form</title>
</head>
<?php
$isLogout = $_GET["logout"];
require 'session_variables.php';
echo "Hi welcome to the login system!";
echo "<br><br>";
?>
<body>
    <main>
        <section>
          <form action="validate.php" method="post">
            <label for="username" class="form-label">Username:</label>
            <input type="text" name="username" class="form-control" placeholder="input your username"/>
            <br><br>
            <label for="password" class="form-label">Password:</label>
            <input type="text" name="password" class="form-control" placeholder="input your password"/>
            <br><br>
            <div><?=(isset($_GET["logout"] && $_GET["logout"]))? "Logged out successfully" : "" ?></div>
            <button type="sumbit" class="btn btn-primary mb-3">Login</button>
          </form>
        </section>
        <section>
            <form action="">
              <label class="form-label">Don't have an account yet? Register here</label>
              <a href="./register.php" class="btn btn-primary mb-3">Register</a>
            </form>        
        </section>
    </main>
    
</body>
</html>
<?php

if (isset($_POST['username'])){
$_SESSION['username']=$_POST['username'];
echo $_SESSION['username'];
};

if (isset($_POST['password'])){
    $_SESSION['password']=$_POST['password'];
    echo $_SESSION['password'];
};

?>

 <!-- "index.php" : this will be the login page with user and password fields and a login button. 
// This fields must be in a form pointing its action to the validation script. 
// In case you log in or are already logged in, you must be automatically redirected to the panel.
//  -->
 <!-- 
//  1. How to configure php.ini file?

// This video explains what is this file and how to configure it


// https://www.youtube.com/watch?v=ZvvUD6kQm8k -->

 <!-- 2. How to login logout in PHP

// This video explains how to create a login and logout using PHP sessions.


// https://www.youtube.com/watch?v=O0Ky0tKvsJ8 -->


 <!-- 1. How to Start a Session in PHP

// In this video you will learn how to start a PHP session


// https://www.youtube.com/watch?v=3CS-eQdcMLU
// 2. How to pass variables in PHP using Sessions and GET Method

// In this PHP Tutorial, I will show you How To Pass Variables in PHP. 

// https://www.youtube.com/watch?v=hNppPXJYJ60
// 3. PHP $_SERVER SuperGlobal Array

// In this video you will learn how to see information that is in the server variable


// https://www.youtube.com/watch?v=wD_V72pU15M -->

