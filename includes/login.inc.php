<?php

if (isset($_POST["submit"]))
{
    $username = $_POST['name'];
    $pwd = $_POST['pwd'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $pwd) !== false)
    {
        header('location: ../login.php?error=emptyinput');
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else
{
    header('Location: ../login.php');
    exit();
}