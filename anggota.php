<?php
if(isset($_GET['delete']))
{
    $id=$_GET['id'];
    $query= mysqli_query($konek,"DELETE FROM siswa WHERE id='$id'");
    ?>
    <div class="alert alert-danger"><center>
    Data berhasil dihapus
    </div>
        <?php
    header('refresh:3;URL=http://localhost/18_mywebsite_12rpl1/admin.php?page=anggota');

}


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
    $query_insert = mysqli_query($konek,"INSERT INTO siswa
    VALUES('','$nis','$nama','$kelas','$jurusan','$tgllhr','$tlpn','$almt','$jk')");
    if($query_insert)
    {
        ?>
    <div class="alert alert-success"><center>
    Data berhasil disimpan
    </div>
        <?php
    header('refresh:3;URL=http://localhost/18_mywebsite_12rpl1/admin.php?page=anggota');
    }
}
?>
<h1 class="mt-4 mb-3"><center>DATA ANGGOTA</center></h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#tambahdata">
  Tambah Data
</button>
<table class="table table-striped">
<tr>
    <th>No</th>
    <th>Nis</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>Tanggal lahir</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Action</th>
</tr>
<?php
    $query= mysqli_query($konek,"SELECT * FROM siswa");
    $no=1;
    foreach ($query as $row) {
?>
<tr>
    <td><?php echo $no;?></td>
    <td><?php echo $row ['nis'];?></td>
    <td><?php echo $row ['nama'];?></td>
    <td><?php echo $row ['kelas'];?></td>
    <td><?php echo $row ['jurusan'];?></td>
    <td><?php echo $row ['tgllhr'];?></td>
    <td><?php echo $row ['tlpn'];?></td>
    <td><?php echo $row ['almt'];?></td>
    <td>
        <?php echo $row ['jk']=='L'?'Laki-laki' : 'Perempuan'; ?>
    </td>
    <td>
        <a href="?page=anggota&delete=&id=<?php echo $row['id'];?>">
        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>        
        </a>
        <a href="editanggota.php?page=anggota&edit=&id=<?php echo $row['id'];?>">
        <button class="btn btn-warning"><i class="fas fa-edit"></i></i></button>
        </a>
    </td>
</tr>
<?php
$no++;
}
?>

</table>

<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tambahdataLabel">Form Tambah Anggota</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                <div class="form-group mt-2 ">
                <label for="nis">NIS</label><br>
                    <input class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required
                    autocomplete="off">
                </div>
                <div class="form-group mt-2">
                <label for="nama">Nama</label><br>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required
                    autocomplete="off">
                </div>
                <div class="form-group mt-2">
                <label for="kelas">Kelas</label><br>
                    <select class="form-control" name="kelas" required>
                    <option value="">Pilih Kelas</option> 
                    <option value="X">X</option> 
                    <option value="XI">XI</option> 
                    <option value="XII">XII</option> 
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
                    autocomplete="off">
                </div>
                <div class="form-group mt-2">
                <label for="no_tlp">Telpon</label><br>
                    <input class="form-control" type="id" name="tlpn" placeholder="No Telpon"
                    autocomplete="off">
                </div>
                <div class="form-group mt-2">
                <label for="alamat">Alamat</label><br>
                    <input class="form-control" type="text" name="almt" placeholder="Alamat" required
                    autocomplete="off">
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
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        </div>
    </div>
</div>