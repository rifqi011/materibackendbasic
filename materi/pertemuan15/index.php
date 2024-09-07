<?php
$host = 'localhost';
$user = 'root';
$pass = ''; //password
$db = 'ki_tesdb_tugas'; //database 
$connect = mysqli_connect("$host", "$user", "$pass", "$db");

// Limit
// $data = mysqli_query($connect, "SELECT * FROM product LIMIT 2, 5");
// while($dataProduct = mysqli_fetch_array($data)) {
//     echo $dataProduct['id'] . "\n";
// }

// Aggregate Functions
// $data = mysqli_query($connect, "SELECT MIN(price) id, nama FROM product"); // MIN, MAX, SUM, COUNT, AVG
// while($dataProduct = mysqli_fetch_array($data)) {
//     echo $dataProduct['nama'] .' harga '. $dataProduct['price'] . "\n";
// }

// Grouping
// $data = mysqli_query($connect, "SELECT SUM(id) jumlah FROM product GROUP BY stock");
// while ($dataProduct = mysqli_fetch_array($data)) {
//     echo $dataProduct['nama'] . ' harga ' . $dataProduct['id'] . "\n";
// }
