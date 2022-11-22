<?php
session_start();
require 'functions.php';

if(isset($_POST["submit"])){
    if(tambahProduk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data produk berhasil ditambahkan');
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
                    <label for="nama_produk">nama produk</label> 
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control"> 
        
                    <label for="harga">harga</label> 
                    <input type="text" name="harga" id="harga" class="form-control">
        
                    <label for="foto">foto</label> 
                    <input type="file" name="foto" id="foto" class="form-control">
        
                    <label for="stok">stok</label> 
                    <input type="text" name="stok" id="stok" class="form-control">
        
                    <label for="deskripsi">deskripsi</label> 
                    <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
        
                    <div>
                        <button type="submit" name="submit">Tambah</button>
                    </div>
        
                </form>
            
        </div>
    </div>