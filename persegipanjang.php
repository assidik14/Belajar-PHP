<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <div class="container">

                    <h1>Persegi Panjang</h1>

                    <form class="luaspersegipanjang" action="" method="POST" enctype="multipart/form-data">
                      
                        <label for="panjang" id="panjang">
                          <input name="panjang" type="number" placeholder="Masukkan Panjang" required>
                        </label>

                        <br />
                      
                        <label for="lebar" id="lebar">
                          <input name="lebar" type="number" placeholder="Masukkan Lebar" required>
                        </label>

                        <br />
                        
                        <input name="hitung_luas" type="submit" value="Hitung Luas">
                        <input name="hitung_keliling" type="submit" Value="Hitung Keliling">
                        <input type="button" onclick="location.href='http://localhost/belajar-php/persegipanjang.php';" value="Reset" />

                    </form>
                </div>

                <?php                        
                        if(isset($_POST['hitung_luas'])){
                            
                            $panjang=$_POST['panjang'];
                            $lebar=$_POST['lebar'];

                            // rumus luas
                            $luas_persegi_panjang = $panjang*$lebar;
                            echo "<h3>Luas Persegi Panjang = $luas_persegi_panjang</h3>";

                        }elseif(isset($_POST['hitung_keliling'])){
                            
                            $panjang=$_POST['panjang'];
                            $lebar=$_POST['lebar'];

                            // rumus keliling
                            $keliling_persegi_panjang = 2*($panjang+$lebar);
                            echo "<h3>Keliling Persegi Panjang = $keliling_persegi_panjang</h3>";
                        }
                    ?>

</body>
</html>