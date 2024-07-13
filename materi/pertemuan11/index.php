<?php
// IF Statement
$nilai = 98;
$predikat = null;

if ($nilai >= 90) {
    $predikat = "A";
} else if ($nilai >= 80) {
    $predikat = "B";
} else if ($nilai >= 75) {
    $predikat = "C";
} else {
    $predikat = "F";
}

// Switch Statement
switch ($predikat) {
    case 'A':
        echo "Selamat Kamu dapat predikat $predikat";
        break;
    case 'B':
        echo "Selamat Kamu dapat predikat $predikat";
        break;
    case 'C':
        echo "Selamat Kamu dapat predikat $predikat";
        break;
    default:
        echo "Selamat Kamu dapat predikat $predikat";
        break;
}

// For loop
echo "\n-For Loop-\n";

for ($i = 1; $i <= 10; $i++) {
    echo "For Loop ke-$i \n";
}

// While loop
echo "-While Loop-\n";

$i = 1;
while ($i <= 10) {
    echo "While Loop ke-$i \n";
    $i++;
}

// Do While
echo "-While Loop-\n";

$j = 1;
do {
    echo "Do While ke-$j \n";
    $j++;
} while ($j <= 10);

// Function
function hello()
{
    echo "Hello World! \n";
}

hello();

// Function w/ Parameter
function woi($nama)
{
    echo "Woiii $nama\n";
}

woi("Rifqi");

// Function w/ more parameter
function data($data)
{
    echo "Nama saya {$data['nama']} Umur {$data['umur']}\n";
}

data([
    'nama' => "Rifqi",
    'umur' => 15 
]);

// Anonymous Function
$data = function ($nama, $umur) {
    return "Nama saya $nama Umur $umur\n";
};
echo $data("Rifqi", 15);

// Date
echo date('Y-M-D H:i:s');
echo "\n";
echo date('y-m-d h:i:s');