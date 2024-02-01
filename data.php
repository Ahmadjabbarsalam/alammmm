<?php 

$nama = [
    [
        "Nama Lengkap" => "Ahmad Jabbar Salam",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl jati bunder',
        'NISN' => '052232222',
        'Nomor WhatsApp' => '085776755593',
        'Hobi' => 'Maen game',
        'Cita-cita' => 'Usahawan'
    ],
    [
        "Nama Lengkap" => "Rifat",
        'Kelas' => 'XI RPL 2',
        'Alamat' => 'Jl. Roxy Mas',
        'NISN' => '065432',
        'Nomor WhatsApp' => '0876363535',
        'Hobi' => 'Nonton anime',
        'Cita-cita' => 'Programmer'
    ],
    [
        "Nama Lengkap" => "Azra babam",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Mangga besar',
        'NISN' => '0534344',
        'Nomor WhatsApp' => '08534343434',
        'Hobi' => 'Maen ml',
        'Cita-cita' => 'Pro player'
    ],
    [
        "Nama Lengkap" => "M Rafa",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. jati bunder',
        'NISN' => '089777666',
        'Nomor WhatsApp' => '0853535353',
        'Hobi' => 'Main Game',
        'Cita-cita' => 'Gamer'
    ],
    [
        "Nama Lengkap" => "Muhammad Alief",
        'Kelas' => 'X BR 1',
        'Alamat' => 'Jl. Kebon pala 1',
        'NISN' => '076545454',
        'Nomor WhatsApp' => '0854765555',
        'Hobi' => 'maen hp',
        'Cita-cita' => 'boss indomaret'
    ],
    [
        "Nama Lengkap" => "Aldo",
        'Kelas' => 'X BR 1 ',
        'Alamat' => 'Jl. Roxy',
        'NISN' => '0876534343',
        'Nomor WhatsApp' => '0897878777',
        'Hobi' => 'hacker',
        'Cita-cita' => 'boss konter hp'
    ],
    [
        "Nama Lengkap" => "Fahrezi",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Jati bunder',
        'NISN' => '09876444',
        'Nomor WhatsApp' => '08655454545',
        'Hobi' => 'men slot',
        'Cita-cita' => 'bandar slot'
    ],
    [
        "Nama Lengkap" => "Ramadani surya",
        'Kelas' => 'X BR 1',
        'Alamat' => 'Jl. Gg mess',
        'NISN' => '0875353535',
        'Nomor WhatsApp' => '08634343434',
        'Hobi' => 'nonton anime',
        'Cita-cita' => 'conten creator'
    ],
    [
        "Nama Lengkap" => "Dimas",
        'Kelas' => 'X RPL 2',
        'Alamat' => 'Jl. Mangga Besar',
        'NISN' => '0242232323',
        'Nomor WhatsApp' => '085242233',
        'Hobi' => 'ngoding',
        'Cita-cita' => 'Programmer'
    ],
    [
        "Nama Lengkap" => "Aldo rivaldi",
        'Kelas' => 'X AK 2',
        'Alamat' => 'Jl. martapura',
        'NISN' => '06353535',
        'Nomor WhatsApp' => '0888464545',
        'Hobi' => 'maen game',
        'Cita-cita' => 'Gamer'
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas array</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>NISN</th>
            <th>Nomor WhatsApp</th>
            <th>Hobi</th>
            <th>Cita-cita</th>
        </tr>
        <?php foreach($nama as $orang) : ?>
        <tr>
            <td><?= $orang["Nama Lengkap"] ?></td>
            <td><?= $orang['Kelas'] ?></td>
            <td><?= $orang['Alamat'] ?></td>
            <td><?= $orang['NISN'] ?></td>
            <td><?= $orang['Nomor WhatsApp'] ?></td>
            <td><?= $orang['Hobi'] ?></td>
            <td><?= $orang['Cita-cita'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>