<?php
include 'koneksi.php';

function tambah_data($data){

    $nama_barang = $data["nama_barang"];
    $harga_barang = $data["harga_barang"];
    $query = "INSERT INTO barang VALUES (null,'$nama_barang','$harga_barang');";
    $sql = mysqli_query($GLOBALS['conn'],$query);

    return true;
}

function edit_data($data){

    $id_barang = $data["id_barang"];
    $nama_barang = $data["nama_barang"];
    $harga_barang = $data["harga_barang"];
    $query = "UPDATE barang SET nama='$nama_barang',harga='$harga_barang' WHERE id='$id_barang';";
    $sql = mysqli_query($GLOBALS['conn'], $query);
    header("location: index.php");

    return true;
}

function hapus_data($data){

    $id_barang = $data['hapus'];
    $query = "DELETE FROM barang WHERE id = $id_barang;";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

?>