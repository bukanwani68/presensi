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

//query insert data ke dalam database
$query = "INSERT INTO tbl_pengajuan (nisn, nama_lengkap, kelas, jurusan, keterangan, detail) VALUES ('$nisn', '$nama_lengkap', '$kelas', '$jurusan', '$keterangan', '$detail')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>