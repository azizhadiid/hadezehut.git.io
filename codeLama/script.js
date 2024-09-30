// const mahasiswa = {
//     nama: "aziz",
//     nim: "F1E123024",
//     email: "azizalhadiid88@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// Mengambil json pakai ajax
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//     if(xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = this.responseText;
//         console.log(JSON.parse(mahasiswa));
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();


// With Jquery
$.getJSON('coba.json', function(data) {
    console.log(data);
});