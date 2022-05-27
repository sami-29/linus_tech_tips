<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'sami');
    define('DB_PASS', '123456');
    define('DB_NAME', 'linus_tech_tips');

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


//check connection
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    echo "Successfully Connected";
}



?>
