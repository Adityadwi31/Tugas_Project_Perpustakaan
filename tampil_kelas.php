<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    </nav>
    <h3>Tampil Kelas</h3>
    <a href="tambah_kelas.php"><input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-warning"></a>
    <table class="table table-hover table striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA KELAS</th>
                <th>KELOMPOK</th>
                <th>ANGKATAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_kelas = mysqli_query($conn, "select * from kelas");
            $no = 0;
            while ($data_kelas = mysqli_fetch_array($qry_kelas)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_kelas['nama_kelas'] ?></td>
                    <td><?= $data_kelas['kelompok'] ?></td>
                    <td><?= $data_kelas['angkatan'] ?></td>
                    <td>
                        <a href="ubah_kelas.php?id_kelas=<?= $data_siswa['id_kelas'] ?>" onclick="return confirm('Apakah anda yakin mengupdate data ini?')" class="btn btn-success">Ubah</a> |
                        <a href="hapus_kelas.php?id_kelas=<?= $data_siswa['id_kelas'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>