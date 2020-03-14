<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah data</h1>
    <form action="proses.php?aksi=tambah" method="post">
        <label>Nama</label><br>
        <input type="text" name="nama"><br>
        <label>Kota</label><br>
        <input type="text" name="kota"><br>
        <label>Jenis Kelamin</label><br>
        <select name="jk">
            <option>Pilih Salah satu</option>
            <option value="0">Laki-Laki</option>
            <option value="1">Perempuan</option>
        </select><br>
        <label>No Telp</label><br>
        <input type="text" name="noTelp"><br>
        <input type="submit" value="Submit">
        <input type="reset" value="reset">

    </form>
</body>

</html>