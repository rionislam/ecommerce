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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/584b17df56.js" crossorigin="anonymous"></script>
</head>

<body>

    <section class="header">
        <div class="container">
            <?php
            include_once('nav.php');
            ?>
            <div class="row">
                <div class="col-2">
                    <h1>Dream big.<br> Dress accordingly!</h1>
                    <a href="" class="btn"> Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/Fashion-Clothing_01.1.png" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-------- Featured categories -------->
    <section class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-01.1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-02.jpg">
                </div>
            </div>
        </div>

    </section>
    <!-------- Featured products -------->
    <section class="small-container">
        <h2 class="title">Featured products</h2>
        <div class="row">
            <div class="col-4">
                <a href="Product-Details.html"><img src="images/Product-01.jpg"></a>
                <a href="Product-Details.html">
                    <h4>CASUAL SHIRT</h4>
                </a>

                <p>TK. 2050</p>

            </div>
            <div class="col-4">
                <img src="images/product-02.jpg">
                <h4>CASUAL SHIRT</h4>

                <p>TK. 2050</p>

            </div>
            <div class="col-4">
                <img src="images/product-04.jpg">
                <h4>TOPS</h4>

                <p>TK. 1848</p>

            </div>
            <div class="col-4">
                <img src="images/Product-05.jpeg">
                <h4>TOPS</h4>

                <p>TK. 2289</p>

            </div>
        </div>
        <h2 class="title">Latest Product products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/Product-L-07.jpeg">
                <h4>EXPRESSX PREMIUM PANJABI</h4>

                <p>TK. 2804</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-08.jpeg">
                <h4>EXPRESSX PREMIUM PANJABI</h4>

                <p>TK. 3591</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-09.jpeg">
                <h4>EXPRESSX PREMIUM T-SHIRT</h4>

                <p>TK. 3129</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-10.jpeg">
                <h4>EXPRESSX BRANDED T-SHIRT</h4>

                <p>TK. 2218</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-11.jpeg">
                <h4>EXPRESSX PREMIUM TOPS</h4>

                <p>TK. 2389</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-12.jpeg">
                <h4>EXPRESSX PREMIUM KAMEEZ</h4>

                <p>TK. 5082</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-13.jpeg">
                <h4>EXPRESSX PREMIUM KAMEEZ</h4>

                <p>TK. 4400</p>

            </div>
            <div class="col-4">
                <img src="images/Product-L-14.jpeg">
                <h4>EXPRESSX PREMIUM TOPS</h4>

                <p>TK. 2560</p>

            </div>
        </div>
    </section>
    <!-------- Offer -------->
    <section class="Offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/hot%20sale.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusive Offers available on Expressx Store</p>
                    <h1>OFFER AVAILABLE</h1>
                    <small> For the limited time.</small>
                    <p><a href="" class="btn">BUY NOW &#8594</a></p>
                </div>
            </div>
        </div>
    </section>

    <!--------Brands-------->
    <section class="Brands">
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
    </section>
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