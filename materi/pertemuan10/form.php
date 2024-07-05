<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="file" name="userfile" id="">
        <input type="submit" value="kirim">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo $_FILES['userfile']['name'];

        $result = [
            'name' => 'nama file',
            'full_path' => 'path dari file',
            'type' => 'type',
            'tmp_name' => 'lokasi file temporary',
            'error' => '',
            'size' => 'ukuran'
        ];
    }
    ?>
</body>

</html>