<?php
include('Rifki_koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM buku_table WHERE id_buku = '$id'";
$hasil = mysqli_query($connection, $query);
$detail = mysqli_fetch_assoc($hasil);
?>



<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="Rifki_Home.php"> <img src="logo-ead.png" width="120" height="40" /></a>
                <a class="btn btn-primary" href="Rifki_TambahBuku.php">Tambah Buku </a>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="pt-5">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded">


                    <div class="card-body">
                        <h1 class="card-title text-center"><b>Detail Buku</b></h1>
                    </div>
                    <div>
                        <img src="images/<?= $detail['gambar'] ?>" class="card-img-top" alt="...">
                    </div>
                    <hr>
                    <div class="container">

                        <div class="mb-3">
                            <label class="form-label"><b>Judul Buku</b></label>
                            <p><?= $detail['judul_buku'] ?></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><b>Penulis</b></label>
                            <p><?= $detail['penulis_buku'] ?></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><b>Tahun Terbit</b></label>
                            <p><?= $detail['tahun_terbit'] ?></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><b>Deskripsi</b></label>
                            <p><?= $detail['deskripsi'] ?></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><b>Bahasa</b></label>
                            <p><?= $detail['bahasa'] ?></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><b>Tag</b></label>
                            <p><?= $detail['tag'] ?></p>
                        </div>

                        <div class="text-center">
                            <a href="Rifki_EditBuku.php?id_buku=<?= $detail['id_buku']; ?>" class="btn btn-primary col-4">Sunting</a>
                            <a href="Rifki_delete.php?id_buku=<?= $detail['id_buku'] ?>" class="btn btn-Danger col-4">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div>
        <nav class="navbar-text navbar-light bg-light pt-5">
            <div class="text-center">
                <img class="navbar-brand" src="logo-ead.png" width="160" height="60" /></a>
                <p class="navbar-brand text-center mb-1" style="font-size: 20px; "><b>Perpustakaan EAD</b></p>
                <p class="navbar-brand text-center" style="font-size: 14px; ">© Rifki Auliada 1202173095</p>
            </div>
        </nav>
    </div>
</body>



</html>