<?php
require "./functions.php";
registerUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<main>
    <section>
        <form action="register.php" method="POST">
            <label for="newUsername">Input username</label>
            <input name="newUsername" type="text" placeholder="input username"/>
            <label for="newPassword">Input password</label>
            <input name = "newPassword" placeholder="input password" type="text"/>
            <label type="text"  for="newPassword2">Confirm password</label>
            <input type="text" name="newPassword2" placeholder="input your password again" />
            <button type="submit">Register</button>
        </form>
    </section>
</main>
</body>
</html>
