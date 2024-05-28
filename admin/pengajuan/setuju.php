<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>absensi</title>
  </head>

  <body>

  <?php 
        include('../../koneksi.php');
        $no = 1;
        $query = mysqli_query($connection,"SELECT * FROM tbl_pengajuan");
        while($row = mysqli_fetch_array($query)){
    ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Konfirmasi Pengajuan
            </div>
            <div class="card-body">
              <form action="simpan-siswa.php" method="POST">
                
                <div class="form-group">
                    <label>NISN</label> 
                    <br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['nisn'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['nama_lengkap'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Kelas</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['kelas'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Jurusan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['jurusan'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" readonly><?php echo $row['keterangan'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Detail Pengajuan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" readonly><?php echo $row['detail'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

                <?php 
                } ?>
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