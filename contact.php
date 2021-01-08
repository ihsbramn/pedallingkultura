<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Pedalling Kultura</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['is_login'])) {
        header('location:login.php');
        $user_id = $_SESSION['id'];
    }
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/img/Asset 1.png" width="240" height="20" alt=""></a>
            <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
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
                            <a class="dropdown-item active" href="contact.php">Contact Us</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Log-out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <br><br><br><br>
    <!-- about us -->
    <section id="mapvid">
        <div class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-centre"> About Us </h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.1362013184578!2d107.65992102923107!3d-6.944874499686398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e818fa44e57b%3A0xe63a2854b49a175d!2sJl.%20Yupiter%20Bar.%20XI%2C%20Sekejati%2C%20Kec.%20Buahbatu%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040286!5e0!3m2!1sid!2sid!4v1601945395596!5m2!1sid!2sid" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                    <div class="col-sm-6">
                        <div style="overflow:hidden;position: relative;"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="500" height="450" type="text/html" src="https://www.youtube.com/embed/XmaUJvCakRM?autoplay=1&fs=1&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0"></iframe>
                            <div style="position: absolute;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
                                <small style="line-height: 1.8;font-size: 0px;background: #fff;"> <a href="https://deloge.de/" rel="nofollow">Deloge</a> </small></div>
                            <style>
                                .newst {
                                    position: relative;
                                    text-align: right;
                                    height: 420px;
                                    width: 520px;
                                }

                                #gmap_canvas img {
                                    max-width: none !important;
                                    background: none !important
                                }
                            </style>
                        </div><br />
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-centre"> Contact Us </h2>
                    <hr>
                </div>
                <div class="col-sm-12">
                    <form>
                        <div class="form-group">
                            <label for="name"> Name </label>
                        </div>
                        <input type="text" class="form-control" placeholder="Your Name">
                    </form>
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                        </div>
                        <input type="text" class="form-control" placeholder="Your Email">
                    </form>
                    <form>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Messages</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=" Your Messages"></textarea>
                    </form>
                    <br>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Send
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Notification</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Messages has been sent!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
            </div>
        </div>
    </section>
    <!-- about us -->

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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>