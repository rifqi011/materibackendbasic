<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $hobi = $_POST['hobi'];

    setcookie('nama_cookie', $nama, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
    setcookie('hobi_cookie', $hobi, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

    header('Location: display.php');
}
?>