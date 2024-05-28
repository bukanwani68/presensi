<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_izin      = $_POST['id_izin'];
$nisn         = $_POST['nisn'];
$nama_siswa   = $_POST['nama_siswa'];
$keterangan   = $_POST['keterangan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_izin SET nisn = '$nisn', nama_siswa = '$nama_siswa', keterangan = '$keterangan' WHERE id_izin = '$id_izin'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: acc-izin.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>