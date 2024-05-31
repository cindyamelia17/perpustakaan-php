<?php
include_once ("./connect.php");

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "INSERT INTO staff (nama, telp, email) VALUES (
        '$nama', '$telp', '$email'
    )");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container w-75">
    <h1 class="my-4">Form Tambah Data Staff</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="isbn">Telepon</label>
            <input type="text" class="form-control" id="telp" name="telp">
        </div>
        <div class="mb-3">
            <label for="unit">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <button type="submit" name="submit" class="btn btn-primary my-4">Submit</button>
    </form>
    <a class="btn btn-danger" href="./staff.php">Kembali ke Halaman Buku</a>
    </div>
</body>

</html>