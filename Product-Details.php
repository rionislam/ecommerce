<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ecommerce</title>
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
    <!--------------single product details------------>
    <div class="small-container single-product">
        <?php
        include_once('includes/dbh.inc.php');
        $productsId = $_GET['productsId'];

        $sql = "SELECT * FROM products WHERE productsId = $productsId ;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="row">
            <div class="col-2">
                <img src="uploads/<?php echo $row['productsImg']; ?>" width="100%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-cal">
                        <img src="uploads/<?php echo $row['productsImg']; ?>" width="90%" class="small-img">
                    </div>
                    <div class="small-img-cal">
                        <img src="uploads/<?php echo $row['productsImg1']; ?>" width="90%" class="small-img">
                    </div>
                    <div class="small-img-cal">
                        <img src="uploads/<?php echo $row['productsImg2']; ?>" width="90%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p> Home/Shirt</p>
                <h1>CASUAL SHIRT</h1>
                <h2>TK. <?php echo $row['productsPrice']; ?></h2>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <form action="includes/addToCart.inc.php" method="post">
                    <input type="hidden" name="productsId" value="<?php echo $productsId; ?>">
                    <input type="number" name="quantity" value="1">
                    <button type="submit" name="submit" class="btn">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    <?php
            }
        }
?>
    <!----------titile----------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View more</p>
        </div>
    </div>


    <!-----------products---------->
    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <img src="images/Product-L-07.jpeg">
                <h4>EXPRESSX PREMIUM PANJABI</h4>
                <div class="Rating">
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>TK. 2804</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-08.jpeg">
                <h4>EXPRESSX PREMIUM PANJABI</h4>
                <div class="Rating">
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>TK. 3591</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-09.jpeg">
                <h4>EXPRESSX PREMIUM T-SHIRT</h4>
                <div class="Rating">
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>TK. 3129</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-10.jpeg">
                <h4>EXPRESSX BRANDED T-SHIRT</h4>
                <div class="Rating">
                    <i class="fas fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>TK. 2218</p>

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

    <!-----------js for product gallary---------->
    <script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function() {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].oneclick = function() {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].oneclick = function() {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].oneclick = function() {
        ProductImg.src = SmallImg[3].src;
    }
    </script>


</body>

</html>