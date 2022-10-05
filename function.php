<?php


$conn = mysqli_connect("localhost", "root", "", "db_login");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah_petugas($data) {
    global $conn;
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $level = htmlspecialchars($data["level"]);

    $query = "INSERT INTO tabel_user
                VALUES('', '$username', '$password', '$level')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>