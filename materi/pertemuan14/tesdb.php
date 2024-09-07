<?php
$host = 'localhost';
$user = 'root';
$pass = ''; //password
$db = 'ki_tesdb_tugas'; //database 
$connect = mysqli_connect("$host", "$user", "$pass", "$db");

/* SELECT */
// $data = mysqli_query($connect, "SELECT * FROM mahasiswa");
// while($dataMahasiswa = mysqli_fetch_array($data)) {
//     echo $dataMahasiswa['nama'];
// }


/* Aliasing */
// $data = mysqli_query($connect, "SELECT id as user_id FROM mahasiswa");
// $dataMahasiswa = mysqli_fetch_array($data);

// echo $dataMahasiswa['user_id'];

/* WHERE */
// $data = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE semester > 2"); // =, >=, <=, !=, <, >, is not null, is null, in(), not in()
// while ($dataMahasiswa = mysqli_fetch_array($data)) {
//     echo $dataMahasiswa['nama']."\n";
// }

/* LOGIKA */
// $data = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE semester > 2 AND ipk < 4"); // AND, OR
// while ($dataMahasiswa = mysqli_fetch_array($data)) {
//     echo $dataMahasiswa['nama'] . " " . $dataMahasiswa['ipk'] . "\n";
// }

/* Sorting */
// $data = mysqli_query($connect, "SELECT * FROM mahasiswa ORDER by usia DESC"); // ASC, DESC
// while ($dataMahasiswa = mysqli_fetch_array($data)) {
//     echo $dataMahasiswa['nama'] . "\n";
// }

/* INSERT */
// $insert = mysqli_query($connect, "INSERT INTO mahasiswa SET 
//         nama           = 'AHMAD',
//         nim            = '123456789',
//         asalsekolah    = 'SMK Negeri 1 Purwokerto',
//         tahundaftar    = '2024',
//         semester       = '4',
//         ipk            = '3.6',
//         usia           = '18'");

// echo $insert ? 'Berhasil' : 'Gagal';

/* UPDATE */
// $update = mysqli_query($connect, "UPDATE mahasiswa SET 
//         tahundaftar    = '2025'
//         WHERE id       = '5'");

// echo $update ? 'Berhasil' : 'Gagal';

/* DELETE */
// $delete = mysqli_query($connect, "DELETE FROM mahasiswa WHERE id = 5");

// echo $delete ? 'Berhasil' : 'Gagal';
