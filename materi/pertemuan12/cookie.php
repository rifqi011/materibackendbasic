<?php
/*
Didalam function setcookie terdapat beberapa parameter

$name = Nama dari cookie yang ingin kita buat

$value = value dari cookie kita

$expires_or_options = waktu expired cookie kita, dalam satuan detik jika kita kosongkan maka cookie akan tetap ada selama kita tidak melakukan close browser

$path = merupakan path lokasi dimana cookie itu akan muncul, jika kita kosongkan maka default adalah/yang akan tampil di semua url domain website kita

$domain = domain dari website kita

$secure = apabila kita ingin menampilkan cookie hanya ketika domain di akses menggunakan https

$httponly = kebalikan dari secure
*/

setcookie("nama", "Rifqi", 3600);
