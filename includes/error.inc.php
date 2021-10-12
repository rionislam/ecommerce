<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'emptyinput') {
        echo '<p class="alert";" >Fill in all fields!</p>';
    } else if ($_GET['error'] == 'invaliduid') {
        echo '<p class="alert";">Please chose a proper username. a-z, A-Z, 0-9 can be used!</p>';
    } else if ($_GET['error'] == 'invalidemail') {
        echo '<p class="alert";">Please use a valid email!</p>';
    } else if ($_GET['error'] == 'passwordsdontmatch') {
        echo '<p class="alert";">Passwords don\'t match!</p>';
    } else if ($_GET['error'] == 'stmtfailed') {
        echo '<p class="alert";">Some thing went wrong, try again later!</p>';
    } else if ($_GET['error'] == 'usernametaken') {
        echo '<div class="alert";">Username already taken!</p>';
    } else if ($_GET['error'] == 'none') {
        echo '<div class="alert";">You have signed up. Click here to <a style="color: #ADD8E6;" herf="login.php">log in!</a></div>';
    } else if ($_GET['error'] == 'wronglogin') {
        echo '<p class="alert";">Incorrect log in information!</div>';
    } else if ($_GET['error'] == 'uploaded') {
        echo '<p class="alert";">Your Product has been uploaded!</div>';
    }
} else if (isset($_GET['reset'])) {
    if ($_GET['reset'] == "success") {
        echo '<p>Check your email!</p>';
    }
} else if (isset($_GET['newpwd'])) {
    if ($_GET['newpwd'] == "passwordupdated") {
        echo '<p>Password updated!</p>';
    }
}