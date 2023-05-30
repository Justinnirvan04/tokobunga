    <nav class="navbar navbar-inverse navbar-fixed-top" style="background: rgb(250,243,221);background: linear-gradient(90deg, rgba(250,243,221,1) 0%, rgba(100,149,143,1) 35%, rgba(6,92,111,1) 77%, rgba(255,187,145,1) 100%);">
            <div class="container">
                <div class="navbar-header" style="margin-bottom: 10px; margin-top: 10px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><b style="color: #07164a; font-family:montserrat; font-size: 28px;">TOKO BUNGA ABC</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;">
                        <?php
                        if(isset($_SESSION['email'])) {
                            ?>
                        <li><a href="cart.php"><span style="color: white; "class="glyphicon glyphicon-shopping-cart"></span><b style="color: white; "> Keranjang</b></a></li>
                        <li><a href="settings.php"><span style="color: white; " class="glyphicon glyphicon-user"></span><b style="color: white; "> Pengaturan</b></a></li>
                        <li><a href="logout_script.php"><span style="color: white; " class="glyphicon glyphicon-log-in"></span><b style="color: white; "> Logout</b></a></li>                          
                        <?php
                        }else {
                            ?>
                        <li><a href="signup.php" target="_blank"><span class="glyphicon glyphicon-user"></span><b> Sign Up</b></a></li>
                        <li><a href="login.php" target="_blank"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
       
        </nav>

    