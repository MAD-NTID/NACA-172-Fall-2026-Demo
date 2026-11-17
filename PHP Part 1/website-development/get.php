<?php
    //$_GET pull stuff from the url after ?
    //example: http://localhost/get.php?name=Kemoy&role=teacher&year=5
    //the values after the ? are called query parameters and they are key value pairs
    //show what is available inside the $_GET global variable
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';

    $name = $_GET['name'];
    $role = $_GET['role'];
    $year = $_GET['year'];

    echo '<h1>Welcome '.$name.'</h1>';
    echo '<h2>Your role is '.$role.'</h2>';
    echo '<h3>You have been teaching for '.$year.'</h3>';