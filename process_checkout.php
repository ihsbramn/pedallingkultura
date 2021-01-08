<!-- process -->
<?php
include('conn.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "checkout") {
    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $ekstensi)) {
        header("location:checkout.php?alert=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
            $koneksi->checkout($_POST['user_id'], $_POST['nama_barang'], $_POST['totalharga'], $_POST['nama'], $_POST['alamat'], $xx, $_POST['proses'], $_POST['resi']);
            header('location:checkout.php');
        } else {
            header("location:cart.php?alert=gagal_ukuran");
        }
    }
}
if ($action == "update") {
    $koneksi->update_checkout($_POST['id_checkout'], $_POST['user_id'], $_POST['nama_barang'], $_POST['totalharga'], $_POST['nama'], $_POST['alamat'], $_POST['gambar'], $_POST['proses'], $_POST['resi']);
    header('location:admin.php');
}

?>
<!-- process -->