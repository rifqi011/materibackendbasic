<?php
// Ambil nilai dari cookie
$nama = $_COOKIE['nama_cookie'];
$hobi = $_COOKIE['hobi_cookie'];
?>
<html>

<head>
    <title>Cookie</title>
</head>

<body>
    <h2>Informasi Nama dan Hobi</h2>
    <p>Nama: <?= $nama; ?></p>
    <p>Hobi: <?= $hobi; ?></p>
</body>

</html>