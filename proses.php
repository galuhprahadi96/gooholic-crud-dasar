<?php

include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_data($_POST['nama'], $_POST['kota'], $_POST['jk'], $_POST['noTelp']);
    header("location:tampil.php");
} elseif ($aksi == "edit") {
    $db->edit($_POST['id'], $_POST['nama'], $_POST['kota'], $_POST['jk'], $_POST['noTelp']);
    header("location:tampil.php");
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil.php");
}
