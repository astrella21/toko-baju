<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editProduk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data produk berhasil diubah');
            window.location = 'produk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }
}   

require '../layout/sidebar.php'; 
?>

    <div class="main">
        <div class="box">
            
        <h3>Tambah Data produk</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>">

            <label for="nama_produk">nama produk</label> 
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $produk["nama_produk"]; ?>"> 

            <label for="harga">harga</label> 
            <input type="text" name="harga" id="harga" class="form-control" value="<?= $produk["harga"]; ?>">

            <label for="foto">foto</label> 
            <input type="file" name="foto" id="foto" class="form-control" value="<?= $produk["foto"]; ?>">

            <label for="stok">stok</label> 
            <input type="text" name="stok" id="stok" class="form-control" value="<?= $produk["stok"]; ?>">

            <label for="deskripsi">deskripsi</label> 
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"><?= $produk["deskripsi"]; ?></textarea>

            <button type="submit" name="kirim">edit</button>
        </form>
        </div>
    </div>