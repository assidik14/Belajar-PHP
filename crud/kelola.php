<!doctype html>

<?php
  include 'koneksi.php';

  $nama_barang = '';
  $harga_barang = '';

  if(isset($_GET['ubah'])){
    $id_barang = $_GET['ubah'];
    
    $query = "SELECT * FROM barang WHERE id = '$id_barang';";
    $sql = mysqli_query($conn,$query);

    $result = mysqli_fetch_assoc($sql);

    $nama_barang = $result['nama'];
    $harga_barang = $result['harga'];
  }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Fontawesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </nav>
    <!--End of Navbar-->
    <!--Card-->
    <div class="card p-3 mb-5" style="margin-top: 50px;">
        <div class="card-body">
          <?php
          if(isset($_GET['ubah'])){
          ?>
          <h5 class="card-title">Edit Barang</h5>
          <p class="card-text">Edit data barang pada form berikut ini untuk melakukan perubahan data barang</p>
        </div>
          <?php
          }else{
          ?>
          <h5 class="card-title">Tambah Barang</h5>
          <p class="card-text">Tambahkan data barang pada form berikut ini untuk melakukan penambahan data barang</p>
        </div>
          <?php
            }
          ?>
      </div>
    <!--End of Card-->
    <!--Form-->
    <div class="container">
        <form method="POST" action="proses.php">
          <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
            <div class="mb-3 row">
                <label for="namabarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                  <input required type="text" class="form-control" id="namabarang" name="nama_barang" value="<?php echo $nama_barang; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="hargabarang" class="col-sm-2 col-form-label">Harga Barang</label>
                <div class="col-sm-10">
                  <input required type="text" class="form-control" id="hargabarang" name="harga_barang" value="<?php echo $harga_barang; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <?php              
                    if(isset($_GET['ubah'])){
                  ?>
                      <button class="btn btn-success" name="aksi" type="submit" value="edit">
                        <i class="fa fa-floppy-o"></i> Simpan Perubahan
                      </button>
                  <?php
                    }else{
                  ?>
                      <button class="btn btn-success" name="aksi" type="submit" value="add">
                        <i class="fa fa-floppy-o"></i> Tambahkan
                      </button>
                    <?php
                    }
                    ?>
                    <a href="index.php" class="btn btn-danger">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </form>
    </div>
    <!--End of Form-->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>