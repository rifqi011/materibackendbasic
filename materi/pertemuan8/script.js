// Alert
function alertPopup() {
    alert('Hello')
}

// Prompt
function promptPopup() {
    const name = prompt("Masukan nama")

    alert(`Namamu: ${name}`)
}

// Confirm
function confirmPopup() {
    const yakin = confirm("Yakin")

    if(yakin) {
        alert("yaa")
    } else {
        alert("nah")
    }
}

// For loop
console.log("-----\nFor Loop")
for(let i = 1; i<= 10; i++) {
    console.log(i)
}

// For In object
let nama = {
    namaDepan: "Rifqi",
    namaTengah: "Banu",
    namaBelakang: "Safingi"
}

console.log("-----\nFor in object")
for(let key in nama) {
    console.log(nama[key])
}

// For In array
let array = [
    "Rifqi",
    "Banu",
    "Safingi"
]

console.log("-----\nFor in array");
for(let key in array) {
    console.log(array[key])
}

// While
console.log("-----\nWhile")
let i = 1
while(i <= 10) {
    console.log(i)
    i++
}

// Do While
console.log("-----\nDo While")
let j = 1
do {
    console.log(j)
    j++
} while(j <= 10)

//DOM
function withId() {
    
}