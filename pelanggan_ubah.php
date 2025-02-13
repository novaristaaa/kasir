<?php
$id = $_GET['id'];

if(isset($_POST['nama_pelanggan'])) {
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

    $query = mysqli_query($koneksi, "UPDATE pelanggan set nama_pelanggan='$nama',alamat='$alamat',no_telepon='$no_telepon' WHERE id_pelanggan=$id");
    if($query) {
        echo '<script>alert("Ubah data berhasil!")</script>';
    }else{
        echo '<script>alert("Ubah data gagal!")</script>';
    }
}

    $query = mysqli_query($koneksi, "SELECT*FROM pelanggan WHERE id_pelanggan=$id");
    $data = mysqli_fetch_array($query);

?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelanggan</li>
                        </ol>
                        <a href="?page=pelanggan" class="btn btn-danger">Kembali</a>
                        <hr>
                        
                        <form method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="200">Nama Pelanggan</td>
                                    <td width="1">:</td>
                                    <td><input class="form-control" value=<?php echo $data['nama_pelanggan']; ?> type="text" name="nama_pelanggan"></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>
                                        <textarea name="alamat" rows="5" class="form-control"><?php echo $data['alamat']; ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No. Telepon</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="number" step="0" value=<?php echo $data['no_telepon']; ?> name="no_telepon"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>