<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Home | Pedalling Kultura</title>
</head>

<body>
    <!-- php -->
    <?php
    session_start();
    if (!isset($_SESSION['is_login'])) {
        header('location:login.php');
        $user_id = $_SESSION['id'];
        $nama = $_SESSION['nama'];
    }
    ?>
    <!-- php -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/img/Asset 1.png" width="240" height="20" alt=""></a>
            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php
                        $hide = " "; // default visible
                        if ($_SESSION['email'] == 'admin@pedallingkultura.us') :
                            $hide = "hide";
                        ?>
                            <a class="nav-link" href="admin.php">Admin Page</a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item">
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
    <!-- jumbotron -->
    <div class="jumbotron img-fluid shadow" style="background-image: url(assets/img/indexjumbo.jpg); background-size: cover; height: 1080px; width: auto;">
        <div class="container">
            <br><br><br>
            <h1 class="display-4"><b>RIDE FURTHER</b></h1>
            <h1 class="display-4"><b>CLIMB HIGHER</b></h1>
            <br><br>
            <h3>Selamat datang <b> <?php echo $_SESSION['nama'];  ?></b> !</h3>
            <br>
            <a href="#shop" class="btn btn-light">Shop Now</a>
        </div>
    </div>
    <!-- jumbotron -->
    <br><br>
    <!-- card -->
    <section id="shop" class="shadow">
        <div class="container">
            <center>
                <img src="assets/img/Asset 1.png" alt="logo" class="" height="50">
            </center>
            <h5 style="text-align: center;">COMFORT IN CHAOS</h5>
            <hr>
            <h4 style="text-align: center;">SHOP NOW</h4>
            <br><br>
            <div class="row">
                <div class="col-sm">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                        <img src="assets/img/bib_olive.jpg" class="card-img-top img-fluid" alt="..." height="250" width="250">
                        <div class="card-body text-centre">
                            <h5>Olive Mechanism Bib Short</h5>
                            <br>
                            <hr>
                            <p>Rp. 5.500.000</p>
                            <form method="post" action="process_cart.php?action=add">
                                <input class="form-control" type="hidden" name="user_id" value="<?php $user_id ?>">
                                <input class="form-control" type="hidden" name="nama_barang" placeholder="Olive Mechanism Bib Short" value="Olive Mechanism Bib Short" readonly>
                                <input class="form-control" type="hidden" name="harga" placeholder="5500000" value="5500000" readonly>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Tambah ke Keranjang</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                        <img src="assets/img/falconner_white.jpg" class=" card-img-top img-fluid" alt="..." height="250" width="250">
                        <div class="card-body text-centre">
                            <h5>Sweet Protection MIPS Helmet</h5>
                            <br>
                            <hr>
                            <p>Rp. 3.500.000</p>
                            <form method="post" action="process_cart.php?action=add">
                                <input class="form-control" type="hidden" name="user_id" value="<?php $user_id ?>">
                                <input class="form-control" type="hidden" name="nama_barang" placeholder="Sweet Protection MIPS Helmet" value="Sweet Protection MIPS Helmet" readonly>
                                <input class="form-control" type="hidden" name="harga" placeholder="3500000" value="3500000" readonly>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Tambah ke Keranjang</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                        <img src="assets/img/mechanism_white.jpg" class="card-img-top img-fluid" alt="..." height="250" width="250">
                        <div class="card-body text-centre">
                            <h5>Mechanism White Jersey</h5>
                            <br>
                            <hr>
                            <p>Rp. 4.500.000</p>
                            <form method="post" action="process_cart.php?action=add">
                                <input class="form-control" type="hidden" name="user_id" value="<?php $user_id ?>">
                                <input class="form-control" type="hidden" name="nama_barang" placeholder="Mechanism White Jersey" value="Mechanism White Jersey" readonly>
                                <input class="form-control" type="hidden" name="harga" placeholder="4500000" value="4500000" readonly>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Tambah ke Keranjang</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- card -->
    <!-- Optional JavaScript; choose one of the two! -->


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