<?php
session_start();
$title = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo($title);?></title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/Profile.css">
    <script src="https://kit.fontawesome.com/584b17df56.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M6N7F28');
    </script>
    <!-- End Google Tag Manager -->
    <script>
    $(document).ready(function() {
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            document.getElementById("filename").innerHTML = fileName;

        });

        $("#form").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            formData.append('file', $('#file').prop('files')[0]);
            formData.append('submit', $('submit').val());
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();

                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = parseInt(percentComplete * 100);

                            $('.progress-bar').width(percentComplete + '%');
                            $('.status').html(percentComplete + '%');

                        }
                    }, false);

                    return xhr;
                },
                url: "includes/upload.inc.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#file').val("");

                }

            });

        });
    });
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6N7F28" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container">
        <?php
        include_once('nav.php');
        ?>
    </div>

    <?php
    if (isset($_SESSION['useruid'])) {
        echo '<section><img class="ProfileImg" alt="' . $_SESSION['username'] . '" src="uploads/' . $_SESSION['userimg'] . '"/>';
        echo '<div class="Info"><h1>' . $_SESSION['username'] . '</h1><form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data" id="form">
        <label class="Custom-File-Upload">
        <input type="file" name="file" spaceholder="Change Profile" id="file">
        <i class="fa fa-cloud-upload"></i> Change Profile Picture</label>
        <p id="filename"></p>
        <button type="submit" name="submit" id="submit">Upload</button>
        
    </form>
    </div>
    <div id="progress-wrp">
    <div class="progress-bar"></div>
    <div class="status">0%</div>
    </div>
    </section>';
    }
    ?>

    <!-- footer -->

    <?php
    include_once('footer.php')
    ?>

</body>

</html>