<?php
    include ('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <h1>Website Buku</h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/18_mywebsite_12rpl1/admin.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=anggota">Anggota</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=buku">Buku</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" action="" method="POST">
                            <input class="form-control me-2" type="text" name="cari" placeholder="Search" aria-label="Search" autofocus
                            autocomplete="off">
                            <button class="btn btn-outline-success" type="submit" value="Cari">Search</button>
                        </form>

                        <?php
                            
                        if (isset($_GET['cari'])) {
                           $cari= $_GET['cari'];
                           echo"<b>hasil pencarian : ".$cari."</b>";
                        }

                        ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                if(isset($_GET['page'])){
                    if ($_GET['page']=="anggota") {
                        include('anggota.php');
                    }elseif($_GET['page']=="buku"){
                        include('buku.php');
                    }elseif($_GET['page']=="anggota-tambah"){
                        include('anggota-tambah.php');
                    }
                }else{
                    echo "Selamat Datang Administrator";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>