
<?php

date_default_timezone_set('Asia/Jakarta');
echo date('Y-m-d H:i:s');

//include koneksi database
include('../../koneksi.php');

$nisn = $_POST['nama_lengkap'];
$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$masuk = date("H:i:s");




//query insert data ke dalam database
$query = "INSERT INTO tbl_rekap (nisn, nama_lengkap, kelas, jurusan, keterangan, masuk) VALUES ('$nisn', '$nama_lengkap', '$kelas', '$jurusan', 'hadir', '$masuk')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: hadir.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>