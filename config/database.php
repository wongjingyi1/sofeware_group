<?php
// used to connect to the database
$host = "localhost";
$db_name = "complaint_system";
$username = "complaint_system";
$password = "c4N0QS80vHNXkp-y";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // show error
    // echo "Connected successfully"; 
}  
// show error
catch(PDOException $exception){
    echo "Connection error: ".$exception->getMessage();
}
?>