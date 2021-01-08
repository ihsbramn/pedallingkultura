<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Login | Pedalling Kultura</title>
</head>

<body>
    <!-- php -->
    <?php
    session_start();
    include_once('conn.php');
    $database = new database();

    if (isset($_SESSION['is_login'])) {
        header('location:index.php');
    }

    if (isset($_COOKIE['email'])) {
        $database->relogin($_COOKIE['email']);
        header('location:index.php');
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (isset($_POST['remember'])) {
            $remember = TRUE;
        } else {
            $remember = FALSE;
        }

        if ($database->login($email, $password, $remember)) {
            header('location:index.php');
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
                        <a class="nav-link active" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
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
                        <h1 style="text-align: center;">Login</h1>
                        <hr>
                        <div class="container">
                            <form action="" method="post">
                                <br><br><br><br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Kata sandi</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <br><br><br><br><br>
                                <center>
                                    <button type="submit" class="btn btn-primary ml-auto" name="login">Login</button>
                                    <br>
                                    <div class="checkbox mx-auto">
                                        <br>
                                        <label>
                                            <input type="checkbox" value="remember-me" name="remember"> Remember me
                                        </label>
                                    </div>
                                </center>

                                <p style="text-align: center;">Belum punya akun ? <a href="register.php"> Register</a></p>
                            </form>
                        </div>
                    </div>
                    <br><br><br><br><br>
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <img src="assets/img/posterlogreg.jpg" alt="img" class="img-fluid">
                </div>
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