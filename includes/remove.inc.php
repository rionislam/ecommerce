<?php
include_once('dbh.inc.php');

$cartId = $_GET['cartId'];


$sql = "DELETE FROM `cart` WHERE `cart`.`cartId` = $cartId ;";
mysqli_query($conn, $sql);
echo mysqli_error($conn);

header('Location: ../Cart.php?error=removed');