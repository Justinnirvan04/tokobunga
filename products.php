<?php
include "includes/koneksi.php";

if (!isset($_SESSION['email'])) {
  header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
<head>

  <meta charset="UTF-8">
  <title>TOKO BUNGA ABC | Products</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
  <?php
  include 'includes/header.php';
  include 'includes/check-if-added.php';
  ?>

  <br><br><br><br><br>
  <div class="container">

    <div class="jumbotron">
      <h1>SELAMAT DATANG DI TAMPILAN UTAMA TOKO BUNGA ABC</h1>
      <p>SELAMAT BERBELANJAT DAN CHECKOUT BUNGA KESAYANGANMU</p>                
    </div>
  </div>         
  <div class="container">
    <div class="row text-center">
      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <img src="img/aglonemaAyunindi.jpg" alt="Responsive image">
          <div class="caption">
            <h3>aglonemaAyunindi</h3>
            <p>Harga:Rp.80000</p>
            <?php 

            if (check_if_added_to_cart(1)) { 
             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
           } else {
             ?>
             <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
             <?php
           }
           ?>
           <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
         </div>
       </div>
     </div>


     <div class="col-md-3 col-sm-6">
      <div class="thumbnail">
        <img src="img/aglonemaBigroy.jpg" alt="Responsive image">
        <div class="caption">
          <h3>aglonemaBigroy</h3>
          <p>Harga:Rp.40000</p>
          <?php 

          if (check_if_added_to_cart(2)) { 
           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
           ?>
           <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
           <?php
         }
         ?>
         <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
       </div>
     </div>
   </div>


   <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
      <img src="img/aglonemaKhocin.jpg" alt="Responsive image">
      <div class="caption">
        <h3>aglonemaKhocin</h3>
        <p>Harga:Rp.45000</p>
        <?php 

        if (check_if_added_to_cart(3)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
       } else {
         ?>
         <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
         <?php
       }
       ?>
       <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
     </div>
   </div>
 </div>

 <div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/aglonemaRedAnjamaniDewasa.jpg" alt="Responsive image">
    <div class="caption">
      <h3>AnjamaniDewasa</h3>
      <p>Harga:Rp.50000</p>
      <?php 

      if (check_if_added_to_cart(4)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>
</div>   
<div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/aglonemaRedChocin.jpg" alt="Responsive image">
    <div class="caption" style="margin-top: 25px;">
      <h3>aglonemaRedChocin</h3>
      <p>Harga:Rp.100000</p>
      <?php 

      if (check_if_added_to_cart(5)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>
</div>                  
<div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/aglonemaRoDudAnjamani.jpg" alt="Responsive image">
    <div class="caption" style="margin-top: 63px;">
      <h3>aglonemaRo <br> DudAnjamani</h3>
      <p>Harga:Rp.30000</p>
      <?php 

      if (check_if_added_to_cart(6)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>
</div>                  
<div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/aglonemaRotundumAceh.jpg" alt="Responsive image">
    <div class="caption">
      <h3>aglonema <br>RotundumAceh</h3>
      <p>Harga:Rp.85000</p>
      <?php 

      if (check_if_added_to_cart(7)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>
</div>

<div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/aglonemaSnowWhiteRemaja.jpg" alt="Responsive image">
    <div class="caption">
      <h3>aglonema <br>SnowWhiteRemaja</h3>
      <p>Harga:Rp.98000</p>
      <?php 

      if (check_if_added_to_cart(8)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>
</div>

<div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/aglonemaSuksom.jpg" alt="Responsive image" id="imgs">
    <div class="caption"style="margin-top: 53px;">
      <h3>aglonemaSuksom</h3>
      <p>Harga:Rp.60000</p>
      <?php 

      if (check_if_added_to_cart(9)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>
</div>

<div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/aglonemaSuperWhite.jpg" alt="Responsive image">
    <div class="caption">
      <h3>aglonemaSuperWhite</h3>
      <p>Harga:Rp.95000</p>
      <?php 

      if (check_if_added_to_cart(10)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>
</div> 
<div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/aglonemaVenus.jpg" alt="Responsive image">
    <div class="caption" style="margin-top: 63px;">
      <h3>aglonemaVenus</h3>
      <p>Harga:Rp.300000</p>
      <?php 

      if (check_if_added_to_cart(11)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>
</div>
<div class="col-md-3 col-sm-6">
  <div class="thumbnail">
    <img src="img/mawar.jpg" alt="Responsive image">
    <div class="caption" style="margin-top: 85px;">
      <h3>Mawar</h3>
      <p>Harga:Rp.13000</p>
      <?php 

      if (check_if_added_to_cart(12)) { 
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
       ?>
       <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-warning">BELI</a>
       <?php
     }
     ?>
     <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
   </div>
 </div>    
</div>
</div>
</div><br>
<footer class="fo" style="background: rgb(250,243,221);background: linear-gradient(90deg, rgba(250,243,221,1) 0%, rgba(100,149,143,1) 35%, rgba(6,92,111,1) 77%, rgba(255,187,145,1) 100%);">
 <div class="container">
   <center style="color: white;">
     <p>Copyright <small>&copy;</small> TOKO BUANG ABC | All Rights Reserved</p>
   </center>
 </div>
</footer>
</body>
</html>
