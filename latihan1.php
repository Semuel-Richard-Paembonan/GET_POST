<?php 
//$_GET
$mahasiswa =[
    [
        "nama" => "Elon Musk",
        "nim"  => "205314083",
        "email"=> "elonmusk@gmail.com",
        "jurusan" => "Informatika",
        "gambar" => "foto1.jpeg"
    ],
    [
        "nama" => "Jeff Bezos",
        "nim"  => "205314085",
        "email"=> "jeffbezos@gmail.com",
        "jurusan" => "Industri",
        "gambar" => "foto2.jpg"
    ] 
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) :?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; 
            ?>&nim=<?= $mhs["nim"];
            ?>&email=<?= $mhs["email"];
            ?>&jurusan=<?= $mhs["jurusan"];
            ?>&gambar=<?= $mhs["gambar"]; 
            ?>"><?= $mhs["nama"]; ?> </a>
        </li>
        <?php endforeach?>
        </ul>
</body>
</html>