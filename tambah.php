<?php 

require "function.php";
//koneksi ke DBSM
$conn = mysqli_connect("localhost", "root", "", "aplikasi_masyarakat");


if( isset($_POST["submit"]) ) {
   
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditmbahkan!');
                document.location.href = 'login.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditmbahkan!');
                document.location.href = 'tambah.php';
            </script>
        ";
    }

}

?>


<!DOCTYPE html>
<html>
<title>Pengaduan</title>
<head><link rel="stylesheet" href="style.css"> </head>
<body>
<div id="container">
<h1>PENDAFTARAN</h1>

<form action="" method="POST">
    <table>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="number" name="nik"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Nomor Telefon</td>
            <td>:</td>
            <td><input type="number" name="telp"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>