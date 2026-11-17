<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $name = $_POST['name'];
    $role = $_POST['role'];
    $year = $_POST['year'];

    echo '<h1>Welcome '.$name.'</h1>';
    echo '<h2>Your role is '.$role.'</h2>';
    echo '<h3>You have been teaching for '.$year.'</h3>';