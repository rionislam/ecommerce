<?php
session_start();

if($_SESSION['useruid'] === "admin"){
?>
    <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ecommerce</title>
            <link rel="stylesheet" href="css/style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
            $(document).ready(function() {
                $('#file').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $('#preview').attr('src', "images/" + fileName);
                });
                $('#file1').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $('#preview1').attr('src', "images/" + fileName);
                });
                $('#file2').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $('#preview2').attr('src', "images/" + fileName);
                });
            })
            </script>
        </head>

        <body>
            <div class="container">
                <?php
                include_once('nav.php')
                ?>
            </div>
            <!-- form -->
            <div class="account-page">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/COV-O.png" width="60%">
                        </div>

                        <div id="product-box">
                            <div class="left">
                                <h1>Upload Product</h1>
                                <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="usersUid" value="<?php echo $_SESSION['useruid'];?>" >
                                    <input type="text" name="name" placeholder="Product Name" required>
                                    <input type="number" name="price" placeholder="Price" required>
                                    <label class="Custom-File-Upload">
                                        <input type="file" name="file" id="file" required>
                                        Add Image</label>
                                    <label class="Custom-File-Upload">
                                        <input type="file" name="file1" id="file1" required>
                                        Add Image</label>
                                    <label class="Custom-File-Upload">
                                        <input type="file" name="file2" id="file2" required>
                                        Add Image</label>
                                    <input type="submit" name="submit" value="Upload" />
                                </form>

                            </div>
                            <div class="right">
                                <img id="preview" src="" alt="">
                                <div class="wraper">
                                    <img id="preview1" src="" alt="">
                                    <img id="preview2" src="" alt="">
                                </div>
                            </div>
                        </div>
                        <?php
                        include_once('includes/error.inc.php');
                        ?>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <?php
            include_once('footer.php')
            ?>
        </body>

        </html>
        
<?php
}
else{
    header("Location: index.php");
}
?>