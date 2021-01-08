<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Cart | Pedalling Kultura</title>
</head>

<body>
    <!-- php -->
    <?php
    session_start();
    if (!isset($_SESSION['is_login'])) {
        header('location:cart.php');
        $user_id = $_SESSION['id'];
        $nama = $_SESSION['nama'];
        $alamat = $_SESSION['alamat'];
    }
    ?>
    <?php
    include('conn.php');
    $db = new database();
    $data_cart = $db->show_cart();

    ?>
    <!-- php -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/img/Asset 1.png" width="240" height="20" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="cart.php" class="nav-link">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled active" href="#" tabindex="-1" aria-disabled="true">Selamat Datang</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </i><?php echo $_SESSION['nama']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="myorder.php">My Order</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="contact.php">Contact Us</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Log-out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <br><br><br>
    <section id="tablecart">
        <!-- table cart -->
        <div class="container">
            <h2>Your Cart</h2>
            <br>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $totalharga = 0;
                    foreach ($data_cart as $row) {
                    ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?php echo $row['nama_barang']; ?></td>
                            <td>Rp. <?php echo $row['harga']; ?></td>
                            <?php $totalharga += $row['harga']; ?>
                            <td>
                                <a class="btn btn-danger" href="process_cart.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <th>Total</th>
                        <td></td>
                        <th>Rp. <?php echo $totalharga ?></th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- table cart -->
    <!-- penjelasan -->
    <br>
    <hr>
    <div class="container">
        <h3>Metode Pembayaran</h3>
        <p>Pembayaran Transfer ke Rekeningn <b>BCA 123456 a.n Pamunggas Putra </b></p>
        <p>Silahkan Upload Bukti Pembayaran Terlebih Dahulu</p>
        <p>Setelah itu lakukan checkout</p>
        <br>
    </div>
    <!-- penjelasan -->

    <!-- checkout -->
    <section id="checkout">
        <div class="container">
            <?php
            $i = 1;
            $totalharga = 0;
            foreach ($data_cart as $row) {
            ?>
                <?php $totalharga += $row['harga']; ?>
                <form method="post" action="process_checkout.php?action=checkout" enctype="multipart/form-data">
                    <input class="form-control" type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>" readonly>
                    <input class="form-control" type="hidden" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" readonly>
                    <input class="form-control" type="hidden" name="totalharga" value="<?php $totalharga ?>" readonly>
                    <input class="form-control" type="hidden" name="nama" value="<?php echo $_SESSION['nama']; ?>>" readonly>
                    <input class="form-control" type="hidden" name="alamat" value="<?php echo $_SESSION['alamat']; ?>" readonly>
                <?php
            }
                ?>
                <hr>
                <label for="gambar"> Upload Bukti Bayar</label>
                <br>
                <input type="file" id="gambar" name="gambar">
                <br><br><br>
                <button type="submit" name="checkout" class="btn btn-primary text-center">Checkout</button>
                </form>
        </div>
        <br><br><br>
        </div>
    </section>
    <!-- checkout -->
    <!-- footer -->
    <section id="footer" class="bg-light shadow">
        <div class="container">
            <footer class="page-footer font-small blue pt-4">
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3 text-dark">
                            <!-- Content -->
                            <h5>Pedalling Kultura</h5>
                            <p>Comfort in Chaos</p>
                        </div>
                        <!-- Grid column -->
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3 text-dark">
                            <!-- Links -->
                            <h5 class="text-uppercase text-dark">Menu</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="profile.php" class="text-dark">Profile</a>
                                </li>
                                <li>
                                    <a href="cart.php" class="text-dark">Cart</a>
                                </li>
                                <li>
                                    <a href="index.php" class="text-dark">Shop</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
                <!-- Footer Links -->
                <br><br><br><br>
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3 text-dark">© 2020 Copyright
                    <a href="index.php" class="text-primary">Pedalling Kultura</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </section>
    <!-- footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>