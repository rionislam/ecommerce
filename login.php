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
    <!--------account-page-------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/COV-O.png" width="60%">
                </div>

                <div id="login-box">
                    <div class="left">
                        <h1>Log in</h1>
                        <form action="includes/login.inc.php" method="post">
                            <input type="text" name="name" placeholder="Username/Email....." required>
                            <input type="password" name="pwd" placeholder="Password....." required>
                            <input type="submit" name="submit" value="Log me in" />
                        </form>
                        <?php
                        include_once('includes/error.inc.php');
                        ?>
                    </div>

                    <div class="right">
                        <span class="loginwith">Sign in with<br />social network</span>

                        <button class="social-signin facebook">Log in with facebook</button>
                        <button class="social-signin twitter">Log in with Twitter</button>
                        <button class="social-signin google">Log in with Google+</button>
                    </div>
                    <div class="or">OR</div>
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
    <!-------------Js for toggle Form--------->

    <script>
    var LoginForm = document.getElementById("LoginForm");
    var ReginForm = document.getElementById("ReginForm");
    var Indicator = document.getElementById("Indicator");

    function register() {
        RegForm.style.transform = "translatex(0px)";
        LoginForm.style.transform = "translatex(0px)";
        Indicator.style.transform = "translatex(100px)";
    }

    function login() {
        RegForm.style.transform = "translatex(300px)";
        LoginForm.style.transform = "translatex(300px)";
        Indicator.style.transform = "translatex(0px)";
    }
    </script>

</body>

</html>