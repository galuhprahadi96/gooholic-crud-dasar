<?php
include('database.php');
$db = new database();
$data = $db->tampil_data();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Biodata</title>
</head>
<h1>Crud Biodata</h1>

<body>
    <a href="tambah.php">Tambah Data</a>
    <table border="1px solid black">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Kota</td>
                <td>jenis kelamin</td>
                <td>No Telp</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody align="center">

            <?php

            $no = 1;
            foreach ($data as $list) { ?>
                <?php
                if ($list['jenis_kelamin'] == 0) {
                    $jk = "laki-laki";
                } else {
                    $jk = "perempuan";
                }
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $list['nama']; ?></td>
                    <td><?php echo $list['kota']; ?></td>
                    <td><?php echo $jk; ?></td>
                    <td><?php echo $list['no_telp']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $list['id']; ?>">Edit</a> |
                        <a href="proses.php?aksi=hapus&id=<?php echo $list['id'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>