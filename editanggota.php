<?php

include('koneksi.php');

//ambildata di url
$id = $_GET["id"];
//query data siswa berdasarkan id
$ambildata= mysqli_query($konek,"SELECT * FROM siswa WHERE id=$id");
$data=mysqli_fetch_array($ambildata);

if(isset($_POST['save'])){

    $id =$_POST['id'];
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $kelas =$_POST['kelas'];
    $jurusan =$_POST['jurusan'];
    $tgllhr =$_POST['tgllhr'];
    $tlpn =$_POST['tlpn'];
    $almt =$_POST['almt'];
    $jk =$_POST['jk'];
    $query= mysqli_query($konek,"UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan',
    tgllhr='$tgllhr', tlpn='$tlpn', almt='$almt', jk='$jk' WHERE id='$id'");
    if($query)
    {
        ?>
    <div class="alert alert-success"><center>
    Data berhasil diubah
    </div>
        <?php
    header('refresh:3;URL=http://localhost/18_mywebsite_12rpl1/admin.php?page=anggota');
    }
}

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
            <div class="modal-body">
            <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
                <div class="form-group mt-2 ">
                <label for="nis">NIS</label><br>
                    <input class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required
                    value="<?php echo $data['nis']?>" autocomplete="off">
                </div>
                <div class="form-group mt-2">
                <label for="nama">Nama</label><br>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required
                    value="<?php echo $data['nama']?>" autocomplete="off">
                </div>
                <div class="form-group mt-2">
                <label for="kelas">Kelas</label><br>
                    <select class="form-control" name="kelas" required>
                    <option name="">Pilih Kelas</option> 
                    <option name="X" >X</option> 
                    <option name="XI" >XI</option> 
                    <option name="XII" >XII</option> 
                    </select>
                </div>
                <div class="form-group mt-2">
                <label for="jurusan">Jurusan</label><br>
                <select class="form-control" name="jurusan" required>
                    <option value="">Pilih Jurusan</option> 
                    <option value="RPL">Rekayasa Perangkat Lunak</option> 
                    <option value="TAV">Teknik Audio Video</option> 
                    <option value="TKR">Teknik Kendaraan Ringan</option> 
                    <option value="TITL">Teknik Instalasi Tenaga Listrik</option> 
                    </select>
                </div>
                <div class="form-group mt-2">
                <label for="date">Tanggal Lahir</label><br>
                    <input class="form-control" type="date" name="tgllhr" required
                    >
                </div>
                <div class="form-group mt-2">
                <label for="tlpn">Telpon</label><br>
                    <input class="form-control" type="id" name="tlpn" placeholder="No Telpon"
                    value="<?php echo $data['tlpn']?>" autocomplete="off">
                </div>
                <div class="form-group mt-2">
                <label for="alamat">Alamat</label><br>
                    <input class="form-control" type="text" name="almt" placeholder="Alamat" required
                    value="<?php echo $data['almt']?>" autocomplete="off">
                </div>
                <div class="form-group mt-2">
                <label for="gender">Jenis Kelamin</label><br>
                <select class="form-control" name="jk" required>
                    <option value="">Pilih Jenis Kelamin</option> 
                    <option value="L">Laki-laki</option> 
                    <option value="P">Perempuan</option>  
                    </select>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Edit changes</button>
            </form>
        </div>
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['save'])){

    $id =$_POST['id'];
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $kelas =$_POST['kelas'];
    $jurusan =$_POST['jurusan'];
    $tgllhr =$_POST['tgllhr'];
    $tlpn =$_POST['tlpn'];
    $almt =$_POST['almt'];
    $jk =$_POST['jk'];
    $query= mysqli_query($konek,"UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan',
    tgllhr='$tgllhr', tlpn='$tlpn', almt='$almt', jk='$jk' WHERE id='$id'");
    if($query_insert)
    {
        ?>
    <div class="alert alert-success"><center>
    Data berhasil diubah
    </div>
        <?php
    header('refresh:3;URL=http://localhost/18_mywebsite_12rpl1/admin.php?page=anggota');
    }
}
?>