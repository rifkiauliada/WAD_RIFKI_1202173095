<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="Rifki_Home.php"> <img src="logo-ead.png" width="120" height="40" /></a>
                <a class="btn btn-primary" href="Rifki_EditBuku.php">Edit Buku </a>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="pt-5">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <form action="Rifki_edit.php" method="POST" enctype="multipart/form-data">
                        <?php
                        $id_buku = $_GET['id_buku'];
                        include "Rifki_koneksi.php";
                        $query = mysqli_query($connection, "SELECT * FROM buku_table where id_buku = $id_buku");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>

                            <div class="card-body">
                                <h1 class="card-title text-center"><b>Edit Data Buku</b></h1>
                            </div>

                            <div class="container">

                                <div class="mb-3">
                                    <label class="form-label">Judul Buku</label>
                                    <input type="text" class="form-control" name="judul_buku" value="<?php echo $data['judul_buku'];  ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Penulis</label>
                                    <input class="form-control" type="text" name="penulis_buku" id="penulis_buku" value="Rifki Auliada 1202173095" readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tahun Terbit</label>
                                    <input type="text" class="form-control" name="tahun_terbit" value="<?php echo $data['tahun_terbit'];  ?>" placeholder="Contoh: 1922">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Contoh: Buku ini menjelaskan tentang . . . ." style="height: 100px"><?php echo $data['deskripsi'];  ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <div class="">
                                        <table>
                                            <tr>
                                                <td><label class="form-label">Bahasa</label></td>

                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="bahasa" type="radio" id="bahasa" value="Indonesia">
                                                        <label class="form-label">Indonesia</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="bahasa" type="radio" id="bahasa" value="Jepang">
                                                        <label class="form-label">Jepang</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="bahasa" type="radio" id="bahasa" value="Lainnya">
                                                        <label class="form-label">Lainnya</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-3">

                                    <table>
                                        <tr>
                                            <td><label for="formGroupExampleInput" class="form-label">Tag</label></td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="tag[]" id="tag[]" value="Pemograman">
                                                    <label for="formGroupExampleInput" class="form-label">Pemograman</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="tag[]" id="tag[]" value="Website">
                                                    <label for="formGroupExampleInput" class="form-label">Website</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="tag[]" id="tag[]" value="Java">
                                                    <label for="formGroupExampleInput" class="form-label">Java</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="tag[]" id="tag[]" value="OOP">
                                                    <label for="formGroupExampleInput" class="form-label">OOP</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="tag[]" id="tag[]" value="MVC">
                                                    <label for="formGroupExampleInput" class="form-label">MVC</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="tag[]" id="tag[]" value="Kalkulus">
                                                    <label for="formGroupExampleInput" class="form-label">Kalkulus</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="tag[]" id="tag[]" value="Lainnya">
                                                    <label for="formGroupExampleInput" class="form-label">Lainnya</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Gambar</label>
                                    <input type="file" name="new_gambar" />
                                    <input type="hidden" name="old_gambar" value="<?php echo $data['gambar'];  ?>" />
                                    <input type="hidden" name="id_buku" value="<?php echo $data['id_buku'];  ?>" />
                                </div>

                            </div>

                            <div class="d-grid gap-4 col-6 mx-auto pt-3 pb-3">
                                <input class="btn btn-primary" type="submit" value="+ Edit">
                            </div>
                        <?php } ?>
                    </form>
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