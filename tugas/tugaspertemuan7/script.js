/*
Copyright Rifqi Banu Safingi 2024

Tugas Pertemuan 5 Kelas Industri Crocodic

Kelas Web Backend Basic

link: https://github.com/rifqi011/materibackendbasic/tree/main/tugas/tugaspertemuan7

Nama: Rifqi Banu Safingi
Asal: SMK Negeri 1 Purwokerto
*/
function kalkulator(bilanganSatu, bilanganDua, operasi) {
	let hasil;
	let operasiTeks;

	switch (operasi) {
		case "tambah":
			hasil = bilanganSatu + bilanganDua;
			operasiTeks = "penjumlahan";
			break;
		case "kurang":
			hasil = bilanganSatu - bilanganDua;
			operasiTeks = "pengurangan";
			break;
		case "kali":
			hasil = bilanganSatu * bilanganDua;
			operasiTeks = "perkalian";
			break;
		case "bagi":
			hasil = bilanganSatu / bilanganDua;
			operasiTeks = "pembagian";
			break;
		default:
			console.log("Operasi tidak dikenal");
			return;
	}

	console.log(`${operasiTeks} ${bilanganSatu} dan ${bilanganDua} = ${hasil}`);

	if (hasil <= 9) {
		console.log("Hasil Satuan");
	} else if (hasil >= 10 && hasil <= 99) {
		console.log("Hasil Puluhan");
	} else if (hasil >= 100 && hasil <= 999) {
		console.log("Hasil Ratusan");
	} else if (hasil >= 1000 && hasil <= 9999) {
		console.log("Hasil Ribuan");
	} else {
		console.log("Hasil lebih besar dari ribuan");
	}
}

kalkulator(10, 10, "kali");
kalkulator(5, 3, "tambah");
kalkulator(50, 2, "kurang");
kalkulator(20, 5, "bagi");
