<?php
require("includes/koneksi.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
<head> 
    <meta charset="UTF-8">
    <title>TOKO BUNGA ABC | Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body>
    
    <?php
    include 'includes/header.php';
    ?>
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row row_style">
            <div class="col-xs-6 col-xs-offset-3" style="margin-top: 50px;">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="background: #64958f;">
                        <h4>LOGIN</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Login untuk beli dan berlangganan</p>
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                      }
                      ?>
                      <form action="login_submit.php" method="POST" >
                        <div class="form-group">
                            <input type="email"  class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Password" name="password">
                        </div>
                        <button class="btn btn-primary" style="margin-top: 20px;">Login</button>
                    </form>
                </div>
                <div class="panel-footer">Belum punya akun?<a href="signup.php">Register di sini </a></div>
            </div>
        </div>
    </div>
</div>
<?php 
require 'includes/footer.php';
?>
</body>
</html>
