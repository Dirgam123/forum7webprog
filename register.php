<?php
include "service/database.php";

if(isset($_POST["register"])){
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];

    $sql = "INSERT INTO users (nama, nim) VALUES ('$nama', '$nim')";

if($db->query($sql)) {
    echo "data masuk";
}else{
    echo "data gagal";
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
    <h3>Daftar Mahasiswa</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="nama" name="nama"/>
        <input type="nim" placeholder="nim" name="nim"/>
        <button type="submit" name="register">ok</button>
</form>
</body>
</html>