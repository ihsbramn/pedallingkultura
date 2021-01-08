<!-- koneksi database -->
<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "pedal";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }


    function register($nama, $email, $no_hp, $alamat, $password)
    {
        $insert = mysqli_query($this->koneksi, "INSERT INTO user VALUES ('','$nama','$email','$no_hp','$password','$alamat')");
        return $insert;
    }

    function login($email, $password, $remember)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM user WHERE email = '$email'");
        $data_user = $query->fetch_array();
        if (password_verify($password, $data_user['password'])) {


            if ($remember) {
                setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
                setcookie('password', $data_user['password'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['alamat'] = $data_user['alamat'];
            $_SESSION['id'] = $data_user['id'];
            $_SESSION['no_hp'] = $data_user['no_hp'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($email)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM user WHERE email='$email'");
        $data_user = $query->fetch_array();
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['id'] = $data_user['id'];
        $_SESSION['alamat'] = $data_user['alamat'];
        $_SESSION['no_hp'] = $data_user['no_hp'];
        $_SESSION['is_login'] = TRUE;
    }

    function show_cart()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM cart");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function add_cart($user_id, $nama_barang, $harga)
    {
        session_start();
        $user_id = $_SESSION['id'];
        mysqli_query($this->koneksi, "INSERT INTO cart values (' ','$user_id ','$nama_barang','$harga')");
        $_SESSION['alert'] = '<div class="alert alert-warning" role="alert">Barang Berhasil ditambahkan!</div>';
    }

    function get_by_id($id_checkout)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM checkout WHERE id_checkout ='$id_checkout'");
        return $query->fetch_array();
    }

    function update_profile($nama, $no_hp, $password, $id)
    {
        session_start();
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = mysqli_query($this->koneksi, "UPDATE user SET nama='$nama', no_hp='$no_hp', password='$password' where id='$id'");
    }

    function delete_cart($id_barang)
    {
        $query = mysqli_query($this->koneksi, "DELETE from cart WHERE id='$id_barang'");
    }

    function checkout($user_id, $nama_barang, $totalharga, $nama, $alamat, $gambar)
    {
        session_start();
        $user_id = $_SESSION['id'];
        $nama = $_SESSION['nama'];
        $alamat = $_SESSION['alamat'];
        $add = mysqli_query($this->koneksi, "INSERT INTO checkout VALUES ('','$user_id','$nama_barang ','$totalharga','$nama','$alamat','$gambar',' ',' ')");
        return $add;
    }

    function update_checkout($id_checkout, $user_id, $nama_barang, $totalharga, $nama, $alamat, $gambar, $proses, $resi)
    {
        $query = mysqli_query($this->koneksi, "UPDATE checkout SET id_checkout='$id_checkout',cart='$nama_barang',nama='$nama',alamat='$alamat',proses='$proses',resi='$resi' where id_checkout='$id_checkout'");
    }

    function show_checkout()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM checkout");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}

?>
<!-- koneksi database -->