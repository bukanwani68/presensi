<?php 
  
  include('../../koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_pengajuan WHERE id_siswa = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pengajuan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PENGAJUAN
            </div>
            <div class="card-body">
              <form action="update-pengajuan.php" method="POST">
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" value="<?php echo $row['nisn'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                  <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap Siswa</label>
                  <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" placeholder="Masukkan Nama Lengkap Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap Siswa</label>
                  <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" placeholder="Masukkan Nama Lengkap Siswa" class="form-control">
                </div>


                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan" rows="4"><?php echo $row['keterangan'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>