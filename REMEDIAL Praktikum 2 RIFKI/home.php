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

    <p class="h2 mt-2 pt-5 text-center">Selamat Datang Di Rifki Store</p>
    <p class="h4 mt-2 pt-1 pb-1 text-center text-white bg-dark">Temukan Pilihan PC terbaik di sini!</p>

    <div class="container">
        <div class="row pt-3">
            <div class="col-sm-4">
                <div class="card" style="width: 26rem;">
                    <ul class="list-group list-group-flush">
                        <img src="gaming1.jpg" class="card-img-top" style="width:414px;height:250px;" alt="...">
                        <li class="list-group-item">
                            <h5 class="card-title">Paket Gaming 1</h5>
                            <h6 class="card-text">15jt</h6>
                            <h6 class="card-text">Fullset dengan meja dan kursi Gaming</h6>
                        </li>
                    </ul>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item text-success">Free Keyboard & Mouse Gaming</li>
                        <li class="list-group-item text-success">Free Mousepad Gaming RGB</li>
                        <li class="list-group-item text-success">Headphone Gaming RGB</li>
                        <li class="list-group-item text-success">Fan PC RGB</li>
                    </ul>
                    <div class="card-footer text-center">
                        <form action="order.php" method="POST">
                            <input type="text" name="gambar" value="gaming1.jpg" hidden>
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card" style="width: 26rem;">
                    <ul class="list-group list-group-flush">
                        <img src="gaming2.jpg" class="card-img-top" style="width:414px;height:250px;" alt="...">
                        <li class="list-group-item">
                            <h5 class="card-title">Paket Gaming 2</h5>
                            <h6 class="card-text">10jt</h6>
                            <h6 class="card-text">Tanpa Kursi Gaming</h6>
                        </li>
                    </ul>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item text-success">Free Keyboard & Mouse Gaming</li>
                        <li class="list-group-item text-danger">No Mousepad Gaming RGB</li>
                        <li class="list-group-item text-success">Free Webcam NYK Series</li>
                        <li class="list-group-item text-success">Fan PC RGB</li>
                    </ul>
                    <div class="card-footer text-center">
                        <form action="order.php" method="POST">
                            <input type="text" name="gambar" value="gaming2.jpg" hidden>
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card" style="width: 26rem;">
                    <ul class="list-group list-group-flush">
                        <img src="gaming3.jpeg" class="card-img-top" style="width:414px;height:250px;" alt="...">
                        <li class="list-group-item">
                            <h5 class="card-title">Paket Gaming 2</h5>
                            <h6 class="card-text">5jt</h6>
                            <h6 class="card-text">Tanpa Meja & Kursi Gaming</h6>
                        </li>
                    </ul>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item text-danger">No Keyboard & Mouse Gaming</li>
                        <li class="list-group-item text-success">Fan PC RGB</li>
                        <li class="list-group-item text-danger">No Mousepad Gaming RGB</li>
                        <li class="list-group-item text-danger">No Webcam NYK Series</li>
                    </ul>
                    <div class="card-footer text-center">
                        <form action="order.php" method="POST">
                            <input type="text" name="gambar" value="gaming3.jpeg" hidden>
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar-text fixed-bottom navbar-light bg-light pb-0">
            <div class="container-fluid text-center">
                <p class="navbar-brand"><b>Rifki Auliada 1202173095</b></p>
            </div>
        </nav>
    </div>
</body>


</html>