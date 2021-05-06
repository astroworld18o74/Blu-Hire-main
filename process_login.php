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


$email=$_POST['inputEmail'];
$passd=$_POST['inputPassword'];
$query=mysqli_query($db1,"select * from mst_user where email='$email' and login_pass='$passd'");
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);

if(($result>0 ) ){
    if($result['account_type']=='j')
    {
        session_start();
        $_SESSION["id"] = $result['id'];
        $_SESSION["type"] = $result['account_type'];
        header('location:jobseeker/profile.php?msg=success');
    }
 elseif($result['account_type']=='e')
 {
     session_start();
     $_SESSION["id"] = $result['id'];
     $_SESSION["type"] = $result['account_type'];
     header('location:employer/profile.php?msg=success');
 }
}
else
{
header('location:login.php?msg=failed');
}
?>
