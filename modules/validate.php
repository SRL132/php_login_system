<?php

require './functions.php';


// get username and password
authUser();

// query from database and validate user
validateUser();

//Key
$key = 'SuperSecretKey';
