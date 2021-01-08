<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Pedalling Kultura</title>
</head>

<?php
include('conn.php');
$db = new database();
$id_checkout = $_GET['id'];
if (!is_null($id_checkout)) {
    $data_barang = $db->get_by_id($id_checkout);
} else {
    header('location:edit_checkout.php');
}
?>
<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
    $user_id = $_SESSION['id'];
    $nama = $_SESSION['nama'];
}
?>

<body>

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
    <br><br><br><br>
    <!-- form edit -->
    <div class="container">
        <h3>Update Item</h3>
        <hr>
        <fieldset>
            <form method="post" action="process_checkout.php?action=update">
                <table>
                    <tr>
                        <p>No.Order</p>
                        <input class="form-control" name="id_checkout" value="<?php echo $data_barang['id_checkout']; ?>" readonly>
                    </tr>
                    <tr>
                        <p>Barang</p>
                        <input class="form-control" name="nama_barang" value="<?php echo $data_barang['cart']; ?>" readonly>
                    </tr>
                    <tr>
                        <p>Nama Penerima</p>
                        <input class="form-control" name="nama" value="<?php echo $data_barang['nama']; ?>" readonly>
                    </tr>
                    <tr>
                        <p>Alamat Penerima</p>
                        <input class="form-control" name="alamat" value="<?php echo $data_barang['alamat']; ?>" readonly>
                    </tr>
                    <tr>
                        <p>Status Proses</p>
                        <input class="form-control" name="proses" value="<?php echo $data_barang['proses']; ?>">
                    </tr>
                    <tr>
                        <p>No. Resi</p>
                        <input class="form-control" name="resi" value="<?php echo $data_barang['resi']; ?>">
                    </tr>
                    <tr>
                        <br>
                        <button class="btn btn-primary" type="submit" name="tombol">Update</button>
                    </tr>
                    <button class="btn btn-light" href="admin.php" type="cancel" name="cancel">Cancel</button>
                </table>
            </form>
        </fieldset>
    </div>
    <!-- form edit -->
    <!-- footer -->
    <div class="bottom">
        <div class="p-3 mb-2 text-black text-center fixed-bottom">Copyright 2020 © Pedalling Kultura
        </div>
    </div>
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