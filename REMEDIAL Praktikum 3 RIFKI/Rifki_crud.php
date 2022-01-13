<?php
include('Rifki_koneksi.php')
?>


<?php
if (isset($_POST['judul_buku'])) {

    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['deskripsi'];
    $tag = implode(",", $_POST['tag']);
    $bahasa = $_POST['bahasa'];
    $rand = rand();

    $filename = $_FILES['gambar_produk']['name'];
    $tempname = $_FILES["gambar_produk"]["tmp_name"];
    $folder = "images/" . $filename;
}

if ($judul_buku != "") {
    move_uploaded_file($tempname, $folder);
    $query = "SELECT * from buku_table where judul_buku = '$judul_buku'";
    $execute = mysqli_query($connection, $query);
    $query_insert = "INSERT INTO buku_table (id_buku, judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa ) VALUES ('$rand','$judul_buku','$penulis_buku','$tahun_terbit','$deskripsi','$filename','$tag','$bahasa')";
    $execute_insert = mysqli_query($connection, $query_insert);

    if ($execute_insert == true) {
        header('location: Rifki_Home.php?success');
    }
}
?>