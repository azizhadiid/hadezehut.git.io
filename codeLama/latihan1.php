<?php
// $mahasiswa = [
//     [
//         "nama" => "aziz",
//         "nim" => "F1E123024",
//         "email" => "azizalhadiid88@gmail.com"
//     ],

//     [
//         "nama" => "hadiid",
//         "nim" => "F1E123024",
//         "email" => "azizalhadiid88@gmail.com"
//     ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');

$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
