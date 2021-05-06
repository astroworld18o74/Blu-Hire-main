<?php
$host = "localhost";
$user  = "username";
$password = "Password@123";
$database1 = "Job_Application";

$db1 = mysqli_connect($host, $user, $password, $database1);
/*if($db1->connect_errno > 0){
    die('Unable to connect to database' . $db1->connect_error);
}else{
    echo "Database Job_Application is connected.";
}*/

?>
