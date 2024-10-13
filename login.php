<?php

    include "service/database.php";

    if(isset($_POST['login'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];

        $sql = "SELECT * FROM users WHERE nama='$nama' AND nim ='$nim'";
        $result = $db->query($sql);

        if($result->num_rows > 0){
            echo "data ada";
        }else {
            echo "akun tidak ada";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html"?>
    <h3>Masuk Mahasiswa</h3>
    <form action="login.php", method="POST">
        <input type="text" placeholder="nama" name="nama"/>
        <input type="nim" placeholder="nim" name="nim"/>
        <button type="submit" name="login">ok</button>
</form>
</body>
</html>