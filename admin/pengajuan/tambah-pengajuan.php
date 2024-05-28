<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="simpan-pengajuan.php" method="POST">
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kelas</label>
                  <br>
                  <select name="kelas">
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jurusan</label> 
                  <br>
                  <select name="jurusan">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                    <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Keterangan</label> 
                  <br>
                  <select name="keterangan">
                    <option value="sakit">Sakit</option>
                    <option value="izin">Izin</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Detail Keterangan</label>
                  <textarea class="form-control" name="detail" placeholder="Masukkan Alasan Pengajuan" rows="4"></textarea>
                </div>
                <br>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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