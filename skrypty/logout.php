<?php
    session_start(); //start session
    class logout
    {
        public function __construct()
        {
            unset($_SESSION['login']); //unset login session
            header("Location: ../index.php"); //redirect to home page
        }
    }
    $logout = new logout; //call logout class
?>