<?php
    include 'fungsi.php';
    session_start();

    if(isset($_POST['aksi'])){
        if($_POST['aksi']=="add"){

            $berhasil = tambah_data($_POST);

            if ($berhasil){
                $_SESSION['alert'] = "Data Berhasil ditambahkan";
                header("location: index.php");
            }else{
                echo $berhasil;
            }

        }else if($_POST['aksi']=="edit"){
            
            $berhasil = edit_data($_POST);

            if ($berhasil){
                $_SESSION['alert'] = "Data Berhasil diperbarui";
                header("location: index.php");
            }else{
                echo $berhasil;
            }

        }
    }

    if(isset($_GET['hapus'])){
        
        $berhasil = hapus_data($_GET);

        if ($berhasil){
            $_SESSION['alert'] = "Data Berhasil dihapus";
            header("location: index.php");
        }else{
            echo $berhasil;
        }

    }
?>