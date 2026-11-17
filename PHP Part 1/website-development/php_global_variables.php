<?php

    //this will return true or false if the variable is an array or not
    echo is_array($_SERVER);

    //we can see everything inside an array using print_r()
    //technically we can do it withou the <pre> but pre tag make it easier to read
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';

    //get the request method from the $_SERVER global variable
    $method = $_SERVER['REQUEST_METHOD'];

    echo '<h1>Request Method: '.$method.'</h1>';

?>