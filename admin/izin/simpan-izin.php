<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nisn           = $_POST['nisn'];
$nama_siswa     = $_POST['nama_siswa'];
$keterangan     = $_POST['keterangan'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_izin (nisn, nama_siswa, keterangan) VALUES ('$nisn', '$nama_siswa', '$keterangan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: acc-izin.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>