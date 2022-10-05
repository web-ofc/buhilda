<?php 

require "function.php";
//koneksi ke DBSM
$conn = mysqli_connect("localhost", "root", "", "db_login");


if( isset($_POST["submit"]) ) {
   
    if( tambah_petugas($_POST) > 0 ) {
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
                document.location.href = 'register.php';
            </script>
        ";
    }

}

?>


<!DOCTYPE html>
<html>
<title>Registarsi Petugas</title>
<head><link rel="stylesheet" href="style.css"> </head>
<body>
<div id="container">
<h1>PENDAFTARAN PETUGAS</h1>

<form action="" method="POST">
    <table>
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
            <td>Level</td>
            <td>:</td>
            <td>
            <select name="level">
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
                <option value="siswa">Siswa</option>
            </select>
            </td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>