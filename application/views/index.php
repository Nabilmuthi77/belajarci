<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="<?= base_url('Home/tambah_siswa'); ?>">Tambah Siswa</a>

    <table border="2" class="table">
    
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
            <td><img src="assets/gambar/<?= $isi->gambar ?>" width='80' height='80'></td>
            <td><?= $isi->alamat; ?></td>
            <td>
                <a href="<?= base_url('Home/panggil_siswa/') . $isi->id; ?>">Edit</a> | 
                <a href="<?= base_url('Home/hapus_siswa/') . $isi->id; ?>">Hapus</a>
            </td>
        </tr>

        <?php } ?>

    </table>

<script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>
</html>