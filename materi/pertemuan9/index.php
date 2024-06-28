<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 9 - Backend Basic</title>
    <link rel="stylesheet" href="../../mainstyle.css">
</head>

<body>
    <h1>PHP</h1>
    <ul>
        <li>PHP adalah singkatan dari PHP Hypertext Preprocessor. Sebelumnya adalah Personal Home Page</li>
        <li>Dibuat pada tahun 1994 oleh ..</li>
        <li>Syntax PHP diapit dengan <.?php ?>
        </li>
        <li><?php echo "Output ini ditulis dengan PHP"; ?></li>
        <li><?php var_dump("ini menggunakan var_dump()") ?></li>
    </ul>

    <h1>Variable</h1>
    <ul>
        <li>Ditulis dengan awalan $</li>
        <?php
        $nama = "Rifqi Banu Safingi"
        ?>
        <li>Nama saya adalah <?php echo $nama; ?></li>
        <li>Text nama di atas disimpan di dalam variable: <?php var_dump($nama); ?></li>
    </ul>

    <h1>Tipe Data</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Tipe Data</th>
                <th>Pengertian Sederhana</th>
                <th>Contoh Tipe Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Integer</td>
                <td>Bilangan bulat</td>
                <td>42, -1, 0</td>
            </tr>
            <tr>
                <td>Float</td>
                <td>Bilangan desimal</td>
                <td>3.14, -2.5, 0.1</td>
            </tr>
            <tr>
                <td>String</td>
                <td>Kumpulan karakter</td>
                <td>'Hello, World!', "PHP"</td>
            </tr>
            <tr>
                <td>Boolean</td>
                <td>Nilai benar atau salah</td>
                <td>true, false</td>
            </tr>
            <tr>
                <td>Array</td>
                <td>Kumpulan nilai dengan indeks</td>
                <td>[1, 2, 3], ['a' => 'A', 'b' => 'B']</td>
            </tr>
            <tr>
                <td>Object</td>
                <td>Instance dari kelas</td>
                <td>$obj = new MyClass();</td>
            </tr>
            <tr>
                <td>NULL</td>
                <td>Tidak memiliki nilai</td>
                <td>NULL</td>
            </tr>
        </tbody>
    </table>

    <h1>Operator Aritmatika</h1>
    <ul>
        <li>
            <h2>Penjumlahan</h2>
        </li>
        <ul>
            <li><?php echo 8 + 1 ?></li>
        </ul>
    </ul>
</body>

</html>