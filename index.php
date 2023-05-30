<?php
require("includes/koneksi.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>TOKO BUNGA ABC</title>
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
    <div id="banner-image">
       <div class="container">
           <center>
               <div id="banner_content">
                   <h1><b>TOKO BUNGA ABC</b></h1>
                   <p><b>MUMPUNG DISKON 40% OFF</b></p>
                   <a href="products.php" target="_blank"> <button class="btn btn-danger btn-lg active"><b>BELANJA SEKARANG</b> </button></a>         
               </div>
           </center>
       </div>
   </div><br><br>
   <div class="container">
     <div class="row text-center">               
         <div class="col-md-4 col-sm-7"> 
             <div class="thumbnail">
                <a href="#">
                    <image src="img/aglonemaAyunindi.jpg"/>
                    <div class="caption">
                     <h2>aglonemaAyunindi</h2>
                     <p>BUNGA</p>
                 </div>
             </a>
         </div>
     </div>
     <div class="col-md-4 col-sm-7"> 
         <div class="thumbnail">
            <a href="#">
             <image src="img/aglonemaBigroy.jpg"/>
             <div class="caption">
                 <h2>aglonemaBigroy</h2>
                 <p>BUNGA</p>
             </div>
         </a>
     </div>
 </div>
 <div class="col-md-4 col-sm-7"> 
     <div class="thumbnail">
        <a href="#">
         <image src="img/aglonemaKhocin.jpg"/>
         <div class="caption">
             <h2>aglonemaKhocin</h2>
             <p>BUNGA</p>
         </div>
     </a>
 </div>
</div>
</div>
</div><br><br><br><br> 
<footer class="fo" style="background: rgb(250,243,221);background: linear-gradient(90deg, rgba(250,243,221,1) 0%, rgba(100,149,143,1) 35%, rgba(6,92,111,1) 77%, rgba(255,187,145,1) 100%);">
 <div class="container">
     <center style="color: white;">
         <p>Copyright <small>&copy;</small> TOKO BUANG ABC | All Rights Reserved</p>
     </center>
 </div>
</footer>
</body>
</html>
