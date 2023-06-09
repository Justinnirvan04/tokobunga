<?php
require("includes/koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TOKO BUNGA ABC | Cart</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body style="padding-top: 50px;">


    <?php
    include 'includes/header.php';
    ?>

    <br><br><br>
    <div class="container">
       <div class="row row_style2">
        <div class="col-sm-10 col-sm-offset-1">
            <table class="table table-striped"> 
                <?php
                $sum = 0;
                $user_id = $_SESSION['user_id'];
                $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                if (mysqli_num_rows($result) >= 1) {
                    ?>
                    <thead>
                        <tr>
                            <th>NO ITEM</th>
                            <th>NAMA ITEM</th>
                            <th>HARGA</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $sum+= $row["Price"];
                            $id="";
                            $id .= $row["id"] . ",";
                            echo "<tr>
                            <td>" . "#" . $row["id"] . "</td>
                            <td>" . $row["Name"] . "</td>
                            <td>Rp " . $row["Price"] . "</td>
                            <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                            </tr>";
                        }
                        $id = rtrim($id, ",");
                        echo "<tr>
                        <td></td>
                        <td>Total</td>
                        <td>Rp " . $sum . "</td>
                        <td><a href='cekongkir.php?itemsid=".$id."'class='btn btn-primary'>Checkout</a></td>
                        </tr>";
                        ?>
                    </tbody>
                    <?php
                } else {
                    echo "<center><h2><br>TAMBAH BELANJA DI HALAMAN PERTAMA!</h2><p><a href='products.php'>KLIK DISINI</a> CARI BUNGA</p></center>";
                }
                ?>
                <?php
                ?>
            </table>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
</body>
</html>