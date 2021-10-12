<?php

session_start();

if (isset($_POST['submit'])) {
    $usersUid = $_POST['usersUid'];
    $productName = $_POST['name'];
    $price = $_POST['price'];

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $file1 = $_FILES['file1'];
    $fileName1 = $file1['name'];
    $fileTmpName1 = $file1['tmp_name'];
    $fileSize1 = $file1['size'];
    $fileError1 = $file1['error'];
    $fileType1 = $file1['type'];

    $fileExt1 = explode('.', $fileName1);
    $fileActualExt1 = strtolower(end($fileExt1));

    $file2 = $_FILES['file2'];
    $fileName2 = $file2['name'];
    $fileTmpName2 = $file2['tmp_name'];
    $fileSize2 = $file2['size'];
    $fileError2 = $file2['error'];
    $fileType2 = $file2['type'];

    $fileExt2 = explode('.', $fileName2);
    $fileActualExt2 = strtolower(end($fileExt2));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'JPG', 'JPEG', 'PNG', 'PDF');

    if (in_array($fileActualExt, $allowed) || in_array($fileActualExt1, $allowed) || in_array($fileActualExt2, $allowed)) {

        if ($fileError == 0) {

            if ($fileSize > 5000) {
                include_once('dbh.inc.php');
                $fileNameNew = uniqid('', true) . ".$fileActualExt";
                $fileDestination = "../uploads/$fileNameNew";

                $fileNameNew1 = uniqid('', true) . ".$fileActualExt1";
                $fileDestination1 = "../uploads/$fileNameNew1";

                $fileNameNew2 = uniqid('', true) . ".$fileActualExt2";
                $fileDestination2 = "../uploads/$fileNameNew2";

                $sql = "INSERT INTO `products` (usersUid, productsName, productsImg, productsImg1, productsImg2, productsPrice) VALUE(?,?,?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {

                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, 'ssssss', $usersUid, $productName, $fileNameNew, $fileNameNew1, $fileNameNew2, $price);
                    mysqli_stmt_execute($stmt);
                    echo mysqli_stmt_error($stmt);
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    move_uploaded_file($fileTmpName, $fileDestination);
                    move_uploaded_file($fileTmpName1, $fileDestination1);
                    move_uploaded_file($fileTmpName2, $fileDestination2);
                    header('Location: ../admin.php?error=uploaded');
                }
            } else {
                echo "The file is too big. You can only upload upto 5mb.";
            }
        } else {
            echo "There was am error uploading your file.";
        }
    } else {
        echo "You can't upload this type of file here.";
    }
} else {
    header('Location: ../admin.php');
}