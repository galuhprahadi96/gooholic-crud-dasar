<?php
class database
{

    var $host = "localhost";
    var $username = "root";
    var $password = "root";
    var $database = "Crud-Biodata";
    var $koneksi = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }
    //menampilkan data
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "select * from biodata");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    //tambah data
    function tambah_data($nama, $kota, $jk, $noTelp)
    {

        $query = "INSERT INTO biodata VALUES (null,'$nama','$kota','$jk','$noTelp')";
        mysqli_query($this->koneksi, $query);
    }

    //detail data per id
    function detail($id)
    {
        $query = "SELECT * FROM biodata WHERE id = $id";
        $hasil = mysqli_query($this->koneksi, $query);
        return $hasil->fetch_array();
    }

    //edit data 
    function edit($id, $nama, $kota, $jk, $noTelp)
    {
        $query = "UPDATE biodata SET nama='$nama', kota='$kota',jenis_kelamin = '$jk', no_telp='$noTelp' WHERE id = $id";

        mysqli_query($this->koneksi, $query);
    }

    //hapus data
    function hapus($id)
    {
        $query = "DELETE FROM biodata WHERE id='$id'";
        mysqli_query($this->koneksi, $query);
    }
}
