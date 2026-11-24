<?php

    /**
     * A function to start the session if it has not been started
     */
    function startSession()
    {
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
    }

    function requireLogin()
    {
        //if the user is not already login, we send them to the login page
        $is_set = isset($_SESSION['user']);
        if(!$is_set){
            header("Location:login.php");
        }
    }

    function bypassLoginPageIfAlreadySignedIn()
    {
        //if the user is already login, we bypass the login page and send them to
        //the index
        $is_set = isset($_SESSION['user']);
        if($is_set){
            header("Location:index.php");
        }
        
    }

    function login($username, $password)
    {
        $FAKEUSERNAME="tonyStark";
        $FAKEPASSWORD="JARVISDOESITALL";

        if($username === $FAKEUSERNAME && $password==$FAKEPASSWORD){
            //set the session and send to index
            $_SESSION['user'] = $username;
            header("Location:index.php");
        } else {
            echo "GET OUT OF HERE!!!";
            die();
        }
    }

    function logout()
    {
        if(session_status() === PHP_SESSION_ACTIVE){
            session_destroy();
        }
    }