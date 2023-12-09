<!doctype html>

<?php
  include 'koneksi.php';
  session_start();

  $query = "SELECT * FROM barang;";
  $sql = mysqli_query($conn, $query);
  $nomor = 0;
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--Fontawesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    
    <!--Data Tables-->
    <link href="datatables/datatables.min.css" rel="stylesheet">
    <script src="datatables/datatables.min.js"></script>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    <!--End of Navbar-->
    <!--Card-->
    <div class="card p-3 mb-5" style="margin-top: 50px;">
        <div class="card-body">
          <h5 class="card-title">Data Barang</h5>
          <p class="card-text">Tabel data barang yang tersedia.</p>
          <a href="kelola.php" class="btn btn-primary">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        </div>
      </div>
    <!--End of Card-->
    <!--Alert-->
    <?php 
      if (isset($_SESSION['alert'])):
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo $_SESSION['alert']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
      session_destroy();
      endif;
    ?>
    <!--End Of Alert-->
    <!--Table-->
    <div class="container-fluid mb-5">
        <table class="table table-striped table-hover" id="dt">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($result = mysqli_fetch_assoc($sql)){
              ?>
              <tr>
                <th scope="row"> <?php echo ++$nomor; ?> </th>
                <td> <?php echo $result['nama']; ?> </td>
                <td> <?php echo $result['harga']; ?> </td>
                <td>
                    <a href="kelola.php?ubah=<?php echo $result['id']; ?>" class="btn btn-success">
                        <i class="fa fa-pencil"></i> Edit
                    </a>
                    <a href="proses.php?hapus=<?php echo $result['id']; ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus ?')">
                        <i class="fa fa-trash"></i> Hapus
                    </a>
                </td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
    </div>
    <!--End of Table-->
    <script>
      new DataTable('#dt');
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>