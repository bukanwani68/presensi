<?php

//include koneksi database
include('../../koneksi.php');

//get data dari form
$id_siswa     = $_POST['id_siswa'];
$nisn           = $_POST['nisn'];
$nama_lengkap   = $_POST['nama_lengkap'];
$kelas          = $_POST['kelas'];
$jurusan        = $_POST['jurusan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', kelas = '$kelas', jurusan = '$jurusan' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: siswa.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>