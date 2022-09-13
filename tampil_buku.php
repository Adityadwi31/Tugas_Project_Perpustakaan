<!DOCTYPE html>

<html>
<?php include 'navbar.php';

?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tampil Buku</title>
</head>

<body>
    <div class="container">
        <h3>Tampil Produk</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Buku</th>
                    <th>Deskripsi</th>
                    <th>Foto Produk</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry = mysqli_query($conn, "SELECT * FROM `buku`");
                $no = 0;
                while ($data = mysqli_fetch_array($qry)) {
                    $no++; ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data['nama_buku'] ?></td>
                        <td><?= $data['deskripsi'] ?></td>
                        <td><img src="images/<?= $data['foto'] ?>" alt="$data['nama_buku']?>" style="width:200px;height:200px;"></td>
                        <td>
                            <a href="ubah_produk.php?id_buku=<?= $data['id_buku'] ?>" class="btn btn-success">Ubah</a> |
                            <a href="hapus_produk.php?id_buku=<?= $data['id_buku'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>