<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div>
        <nav class="navbar-text fixed-top navbar-dark bg-success ">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="home.php">Home</a>
                <a class="navbar-brand" href="order.php">Order</a>
            </div>
        </nav>
    </div>

    <p class="h4 mt-2 pt-5 text-center">Terima Kasih Gan Telah berbelanja Di toko kami</p>
    <p class="h4 mt-2 pt-5 text-center">Silahkan Cek Kembali Pesanan Anda !!</p>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No KTP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Order</th>
                    <th scope="col">Paket Gaming</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Tambah Pembelian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo ($_POST['ktp']); ?>
                    </td>
                    <td>
                        <?php echo ($_POST['nama']); ?>
                    </td>
                    <td>
                        <?php echo ($_POST['tgl_order']); ?>
                    </td>
                    <td>
                        <?php echo ($_POST['type']); ?>
                    </td>
                    <td>
                        <?php echo ($_POST['no_hp']); ?>

                    </td>
                    <td>
                        <?php echo implode(',', $_POST['tambah']); ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

<nav class="navbar-text fixed-bottom navbar-light bg-light pb-0">
    <div class="container-fluid text-center">
        <p class="navbar-brand"><b>Rifki Auliada 1202173095</b></p>
    </div>
</nav>


</html>