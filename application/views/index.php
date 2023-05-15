<section class="container mb-5 pb-5">

    <h1 class="mt-2 text-white">Data Siswa</h1>
    <?= $this->session->flashdata('message'); ?>
    <a href="<?= base_url('Home/tambah_siswa'); ?>" class="badge bg-primary mb-2">Tambah Siswa</a>

    <div class="table">
        <table border="2" class="table table-dark table-striped mb-5">

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
    </div>

</section>