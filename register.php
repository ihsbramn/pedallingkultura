<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Register | Pedalling Kultura</title>
</head>

<body>
    <!-- php -->
    <?php
    include_once('conn.php');
    $database = new database();
    if (isset($_POST['register'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $cpassword = password_hash($_POST['cpassword'], PASSWORD_DEFAULT);
        if ($database->register($nama, $email, $nohp, $alamat, $password, $cpassword)) {
            header('location:login.php');
        }
    }
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
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <br><br><br>
    <!-- form -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 style="text-align: center;">Registrasi</h1>
                        <hr>
                        <div class="container">
                            <form action="" method="post">

                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <label for="nohp">No. Handphone</label>
                                <input type="text" class="form-control" id="nohp" name="nohp">
                                <label for="alamat">alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <label for="cpass">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword">
                                <br><br><br><br><br>
                                <center>
                                    <button type="submit" name="register" class="btn btn-primary ml-auto">Daftar</button>
                                </center>
                                <p style="text-align: center;">Sudah punya akun ? <a href="login.php"> Login</a></p>
                            </form>
                        </div>
                    </div>
                    <br><br><br>
                </div>
            </div>
            <div class="col">
                <img src="assets/img/posterlogreg_2.jpg" class="img-fluid" alt="img">
            </div>
        </div>

    </div>
    <!-- form -->
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