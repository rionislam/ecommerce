<?php

if (isset($_POST['submit'])) {
    session_start();
    include_once('dbh.inc.php');
    $productsId = $_POST['productsId'];
    $productsQuantity = $_POST['quantity'];
    $usersId = $_SESSION['userid'];

    $sql = "INSERT INTO `cart` (usersId, productsId, productsQuantity) VALUE(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 'sss', $usersId, $productsId, $productsQuantity);
        mysqli_stmt_execute($stmt);
        echo mysqli_stmt_error($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header('Location: ../Product-Details.php?error=added&productsId=' . $productsId);
    }
} else {
    header('Location: ../Product-Details.php');
    exit();
}