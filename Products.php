<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="css/Style.CSS">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="undefined" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <?php
        include_once('nav.php');
        ?>
    </div>
    <div class="small-container">
        <div class="row-2">
            <h2>All products</h2>
            <select>
                <option>Default shorting</option>
                <option>short by price</option>
                <option>short by popularity</option>
                <option>short by rating</option>
                <option>short by sale</option>
            </select>
        </div>

        <div class="row">
            <?php
            include_once('includes/dbh.inc.php');
            $sql = "SELECT * FROM products ;";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-4">
                <a href="Product-Details.php?productsId=<?php echo $row['productsId']; ?>"><img
                        src="uploads/<?php echo $row['productsImg']; ?>"></a>
                <a href="Product-Details.php?productsId=<?php echo $row['productsId']; ?>">
                    <h4><?php echo $row['productsName']; ?></h4>
                </a>

                <p>TK. <?php echo $row['productsPrice']; ?></p>

            </div>
            <?php

                }
            } else {
                echo "No product available!";
            }
            ?>
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>
    </div>
    <!--------Brands-------->
    <div class="Brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/Grameenphone-Logo.png">
                </div>
                <div class="col-5">
                    <img src="images/Nagad-Logo.wine.png">
                </div>
                <div class="col-5">
                    <img src="images/bkash_logo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
            </div>
        </div>
    </div>
    <!--------footer-------->
    <?php
    include_once('footer.php')
    ?>
    <!-------------Js for toggle menu--------->
    <script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight == "200px"
        } else {
            MenuItems.style.maxHeight == "0px"
        }
    }
    </script>
</body>

</html>