<?php

include 'database.php';

$db = new database;

$id = $_GET['id'];
if (!is_null($id)) {
    $data = $db->detail($id);
} else {
    header('location:tampil.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
    <form action="proses.php?aksi=edit" method="post">
        <input type="text" name="id" value="<?= $data['id']; ?>" hidden>
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?= $data['nama']; ?>"><br>
        <label>Kota</label><br>
        <input type="text" name="kota" value="<?= $data['kota']; ?>"><br>
        <label>Jenis Kelamin</label><br>
        <select name="jk">
            <?php if ($data['jenis_kelamin'] == 0) { ?>
                <option value="0" selected>Laki-Laki</option>
                <option value="1">Perempuan</option>
            <?php } else { ?>
                <option value="0">Laki-Laki</option>
                <option value="1" selected>Perempuan</option>
            <?php } ?>
        </select><br>
        <label>No Telp</label><br>
        <input type="text" name="noTelp" value="<?= $data['no_telp'] ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>