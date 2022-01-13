<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>

    <div>
        <nav class="navbar-text fixed-top navbar-dark bg-success">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="home.php">Home</a>
                <a class="navbar-brand" href="order.php">Order</a>
            </div>
        </nav>
    </div>
    <div class="container pt-3">
        <p class="h5 mt-5 pt-2 pb-2 text-center text-white bg-dark">Silahkan Isi Data Diri Anda</p>

        <div class="row center">
            <?php
            if ($_POST != []) : ?>
                <div class="col-sm-6 ">
                    <img src=" <?php echo ($_POST['gambar']); ?>" style="width:414px;height:350px;">
                </div>
            <?php else : ?>
                <div class="col-sm-6 ">
                    <img src="gaming1.jpg" class="card-img-top" style="width:414px;height:350px;">
                </div>
            <?php endif; ?>


            <div class="col-sm-6">
                <form action="myorder.php" method="post">

                    <div class="mb-3">
                        <label class="form-label">No KTP</label>
                        <input type="text" name="ktp" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Order</label>
                        <input type="date" name="tgl_order" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Paket Gaming</label>
                        <select class="form-select" name="type" id="background">
                            <option>Pilih</option>
                            <option value="Gaming 1">Gaming 1</option>
                            <option value="Gaming 2">Gaming 2</option>
                            <option value="Gaming 3">Gaming 3</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="number" name="no_hp" class="form-control">
                    </div>

                    <div>
                        <label class="form-label">Tambah Pembelian</label>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="webcam" name="tambah[]">
                            <label class="form-check-label">
                                Webcam NYK Series
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Stand" name="tambah[]">
                            <label class="form-check-label">
                                Stand Headphone RGB
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="hardisk" name="tambah[]">
                            <label class="form-check-label">
                                Hardisk 5tb
                            </label>
                        </div>
                    </div>

                    <div class="mt-3 d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Book</button>
                    </div>

                </form>
            </div>

        </div>
        <nav class="navbar-text fixed-bottom navbar-light bg-light pb-0">
            <div class="container-fluid text-center">
                <p class="navbar-brand"><b>Rifki Auliada 1202173095</b></p>
            </div>
        </nav>
    </div>

</body>

<script>

</script>

</html>