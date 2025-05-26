<?php 
header('Content-Type: application/json');

// $mahasiswa = [
//         [
//             "nama" => "Imam Yaasir",
//             "nim" => "2217020167",
//             "email" => "yasirkhairullah03@gmail.com"
//         ],
//         [
//             "nama" => "nabil",
//             "nim" => "2217020171",
//             "email" => "nabil@gmail.com"
//         ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar','root', '');

$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>      