<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Backend</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>

        <label for="profile">Foto Profile:</label><br>
        <input type="file" id="profile" name="profile" required><br><br>

        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaLengkap = $_POST["nama_lengkap"];
        $namaFile = $_FILES["profile"]["name"];

        echo "<h3>Informasi yang telah di-submit:</h3>";
        echo "<p>Nama Lengkap: $namaLengkap</p>";
        echo "<p>Foto Profile: $namaFile</p>";
    }
    ?>
</body>

</html>