<?php

//include koneksi database
include('../../koneksi.php');

//get data dari form
$nisn           = $_POST['nisn'];
$nama_lengkap   = $_POST['nama_lengkap'];
$kelas          = $_POST['kelas'];
$jurusan        = $_POST['jurusan'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, kelas, jurusan) VALUES ('$nisn', '$nama_lengkap', '$kelas', '$jurusan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: siswa.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>