<div class="navbar">
    <div class="logo">
        <a href="index.php">Logo</a>
    </div>
    <nav>
        <ul id="MenuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="Products.php">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <?php
            if (isset($_SESSION['useruid'])) {
            ?>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="Logout.php">Log out</a></li>
            <?php
            } else {
            ?>
            <li><a href="Signup.php">Sign up</a></li>
            <li><a href="Login.php">Log in</a></li>
            <?php
            }
            ?>

        </ul>
    </nav>
    <a href="Cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
</div>