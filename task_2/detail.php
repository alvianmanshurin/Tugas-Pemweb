<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Detail Informasi Pendaftar</h1>
    <?php
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $alamat = $_GET['alamat'];
    ?>
    <div class="info-box">
        <p><strong>Nama: Alvian Manshurin</strong> <?php echo $nama; ?></p>
        <p><strong>Email: alvianmanshurin@gmail.com</strong> <?php echo $email; ?></p>
        <p><strong>Alamat: Serbajadi, Natar Lampung Selatan</strong> <?php echo $alamat; ?></p>
    </div>
</body>
</html>
