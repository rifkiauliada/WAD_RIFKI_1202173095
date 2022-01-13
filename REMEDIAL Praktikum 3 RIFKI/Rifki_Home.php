<?php
include('Rifki_koneksi.php');
$query = "SELECT * FROM buku_table";
$hasil = mysqli_query($connection, $query);
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
        <!-- <p class="h4 mt-2 pt-5 text-center">Belum Ada Buku</p> -->
        <p class="h6 mt-2 pt-1 pb-1 text-center bg-Info"></p>
        <?php if ($hasil == '') : ?>
            <p class=" mt-2 pt-2 text-center">Silahkan Menambahkan Buku</p>
        <?php else : ?>

            <div class="row pt-3">
                <?php
                while ($data = mysqli_fetch_assoc($hasil)) {
                ?>
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/<?= $data['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data['judul_buku'] ?></h5>
                                <p class="card-text"><?= $data['deskripsi'] ?></p>
                                <a href="Rifki_DetailBuku.php?id=<?= $data['id_buku'] ?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>

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