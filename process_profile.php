<!-- proses profile -->
<?php
include('conn.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "update") {
    $koneksi->update_profile($_POST['nama'], $_POST['no_hp'], $_POST['alamat'], $_POST['password'], $_POST['id']);
    header('location:profile.php');
}
?>
<!-- proses profile -->