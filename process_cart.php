<!-- process -->
<?php
include('conn.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "add") {
    $koneksi->add_cart($_POST['user_id'], $_POST['nama_barang'], $_POST['harga']);
    header('location:cart.php');
} elseif ($action == "delete") {
    $id = $_GET['id'];
    $koneksi->delete_cart($id);
    header('location:cart.php');
}
?>
<!-- process -->