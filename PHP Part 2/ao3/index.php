<?php
    //we will only start the session if it has not been started
    // if(session_status() === PHP_SESSION_NONE ){
    //     session_start();
    // }

    
    // // if(!isset($_SESSION['user'])
    // $is_set = isset($_SESSION['user']);

    // // if($is_set === true){
    // //     echo "Yes";
    // // } else {
    // //     echo "False";
    // // }

    // //if the user is not logged in then we send them to the login page
    // if(!$is_set){
    //     //redirect them to the login page
    //     header("Location:login.php");
    // }

    include_once "authenticate.php";

    startSession();
    requireLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is authorized area. Only those who have logged in should see index </h1>
    <a href="logout.php"><input type="button" value="Logout"/></a>

</body>
</html>