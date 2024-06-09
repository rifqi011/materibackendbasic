let umur = 24

let kata = `Anda berusia ${umur} tahun dan termasuk dalam kategori:`;

if (umur >= 0 && umur <= 12) {
	console.log(`${kata} Anak-anak`)
} else if (umur >= 13 && umur <= 17) {
	console.log(`${kata} Remaja`);
} else if (umur >= 18 && umur <= 59) {
	console.log(`${kata} Dewasa`);
} else if (umur >=60) {
	console.log(`${kata} Lansia`);
} else {
	console.log("Masukan umur yang valid")
}