<div class="agileits_header">
    <div class="container">
        <div class="w3l_offers">
            <p>DAPATKAN PENAWARAN MENARIK KHUSUS HARI INI, BELANJA SEKARANG!</p>
        </div>
        <div class="agile-login">
            <ul>
                <?php
                if (!isset($_SESSION['log'])) {
                    echo '
					<li><a href="registered.php"> Daftar</a></li>
					<li><a href="login.php">Masuk</a></li>
					';
                } else {

                    if ($_SESSION['role'] == 'Member') {
                        echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="logout.php">Keluar?</a></li>
					';
                    } else {
                        echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="admin">Admin Panel</a></li>
					<li><a href="logout.php">Keluar?</a></li>
					';
                    };
                }
                ?>

            </ul>
        </div>
        <div class="product_list_header">
            <a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="bg-prima-top logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>Hubungi Kami : (+6281) 222 333</li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left text-brand">
            <h1><a href="index.php">Prima Flora</a></h1>
        </div>
        <div class="w3l_search">
            <form action="#" method="post">
                <input class="search-light" type="search" name="Search" placeholder="Cari produk..." required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>