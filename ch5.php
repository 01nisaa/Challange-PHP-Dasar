<?php
$datasiswa = [
    [
        "Nama" => "Joni Susanto",
        "Kelas" => "XII TKR 2",
        "Alamat" => "Pemalang"
    ],
    [
        "Nama" => "Intan Ayu",
        "Kelas" => "XI TB 1",
        "Alamat" => "Brebes"
    ],
    [
        "Nama" => "Salma Karima",
        "Kelas" => "XI RPL 1",
        "Alamat" => "Batang"
    ]
    ];
    $x = 1;
    ?>
    <table border="1" cellspacing="1" cellpadding="7">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
        </tr>
        <?php foreach ($datasiswa as $y): ?>
        <tr>
            <td><?= $x++ ?></td>
            <td><?= $y["nama"] ?></td>
            <td><?= $y["kelas"] ?></td>
            <td><?= $y["alamat"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>