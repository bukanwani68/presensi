<?php

//include koneksi database
include('../../koneksi.php');

//get data dari form
$id_siswa       = $_POST['id_siswa'];
$nisn           = $_POST['nisn'];
$nama_lengkap   = $_POST['nama_lengkap'];
$kelas          = $_POST['kelas'];
$jurusan        = $_POST['jurusan'];
$keterangan     = $_POST['keterangan'];
$detail         = $_POST['detail'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_pengajuan SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', kelas = '$kelas', jurusan = '$jurusan', keterangan = '$keterangan', detail = '$detail' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>