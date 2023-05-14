<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <section class="container">

        <h1 class="mt-2">Data Siswa</h1>
        <?= $this->session->flashdata('message'); ?>
        <a href="<?= base_url('Home/tambah_siswa'); ?>" class="badge bg-primary mb-2">Tambah Siswa</a>

        <table border="2" class="table table-dark table-striped">

            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Gambar</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>


            <?php
            $no = 1;
            foreach ($tampilkan_data as $isi) {
            ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $isi->nama; ?></td>
                    <td><?= $isi->jk; ?></td>
                    <td><?= $isi->nama_ayah; ?></td>
                    <td><?= $isi->nama_ibu; ?></td>
                    <td><img src="assets/gambar/<?= $isi->gambar ?>" width='70' height='70' class="img-thumbnail"></td>
                    <td><?= $isi->alamat; ?></td>
                    <td>
                        <a href="<?= base_url('Home/panggil_siswa/') . $isi->id; ?>" class="badge bg-warning">Edit</a> |
                        <a href="<?= base_url('Home/hapus_siswa/') . $isi->id; ?>" class="badge bg-danger">Hapus</a>
                    </td>
                </tr>

            <?php } ?>

        </table>
    </section>


    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>