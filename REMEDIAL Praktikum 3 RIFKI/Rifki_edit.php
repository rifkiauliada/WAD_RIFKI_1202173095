<?php
include('Rifki_koneksi.php')
?>


<?php
if (isset($_POST['judul_buku'])) {

    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['deskripsi'];
    $tag = implode(",", $_POST['tag']);
    $bahasa = $_POST['bahasa'];
    $rand = rand();

    $filename = $_FILES['new_gambar']['name'];
    $tempname = $_FILES["new_gambar"]["tmp_name"];
    $folder = "images/" . $filename;

    if ($filename != '') {
        $new_img = $filename;
    } else {
        $new_img = $_POST['old_gambar'];
    }
}

if ($judul_buku != "") {
    move_uploaded_file($tempname, $folder);
    // echo $judul_buku, $penulis_buku, $tahun_terbit, $deskripsi, $tag, $bahasa;

    mysqli_query($connection, "UPDATE buku_table SET judul_buku='$judul_buku',penulis_buku='$penulis_buku',tahun_terbit='$tahun_terbit',deskripsi='$deskripsi',tag='$tag',bahasa='$bahasa',gambar='$new_img' WHERE id_buku = $id_buku");

    header('location: Rifki_Home.php?success');
}
?>