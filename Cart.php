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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <?php
        include_once('nav.php');
        ?>
    </div>
    <!--------cart items details-------->
    <div class="small-cortainer cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php
            include_once('includes/dbh.inc.php');

            $usersId = $_SESSION['userid'];
            $sql = "SELECT * FROM cart WHERE usersId=$usersId;";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $cartId = $row['cartId'];
                    $productsId = $row['productsId'];
                    $sql1 = "SELECT * FROM products WHERE productsId = $productsId;";
                    $result1 = mysqli_query($conn, $sql1);
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            $grandTotal = 0;
                            $price = $row1['productsPrice'];
                            $quantity = $row['productsQuantity'];
                            $subTotal = $price * $quantity;
                            $grandTotal += $subTotal;

            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="uploads/<?php echo $row1['productsImg']; ?>">
                        <div>
                            <p><?php echo $row1['productsName']; ?></p>
                            <small>Price:TK. <?php echo $price; ?></small>
                            <br>
                            <a href="includes/remove.inc.php?cartId=<?php echo  $cartId; ?>">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="<?php echo $quantity; ?>"></td>
                <td>TK. <?php echo $subTotal; ?></td>
            </tr>

            <?php

                        }
                    }
                }
            }
            ?>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>TK. <?php echo $grandTotal; ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>TK.52</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>TK.<?php echo $grandTotal + 52; ?></td>
                </tr>

            </table>

        </div>

        <form id="ckf" action="" method="post">
            <input type="hidden" name="total" value="<?php echo $grandTotal + 52; ?>">
            <button class="btn" type="submit">Checkout</button>
        </form>

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