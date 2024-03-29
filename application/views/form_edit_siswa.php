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

<body class="bg-dark" data-bs-theme="dark">

    <section class="container">

        <h1 class="my-5">Edit Data Siswa</h1>
        <form action="<?= base_url('Home/update_data/' . $tampilkan_data['id']); ?>" method="post" enctype="multipart/form-data">
            <table border="2" class="table table-dark table-striped">
                <tr>
                    <td><label for="nama">Nama Siswa : </label> </td>
                    <td><input type="text" name="txtnama" id="nama" value="<?= $tampilkan_data['nama']; ?>" class="form-control text-black">
                    <?= form_error('txtnama', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="jk">Jenis Kelamin : </label></td>
                    <td>

                        <input type="radio" name="rdjeniskelamin" <?php if ($tampilkan_data['jk'] == "Laki-Laki") {
                                                                        echo "checked";
                                                                    } ?> value="Laki-Laki" id="jk" class="form-check-input"> Laki-Laki
                        <input type="radio" name="rdjeniskelamin" <?php if ($tampilkan_data['jk'] == "Perempuan") {
                                                                        echo "checked";
                                                                    } ?> value="Perempuan" class="form-check-input"> Perempuan
                        <?= form_error('rdjeniskelamin', '<small class="text-white pl-3">', '</small>'); ?>
                        
                    </td>
                </tr>
                <tr>
                    <td><label for="NA">Nama Ayah : </label></td>
                    <td><input type="text" name="txtnama_ayah" id="NA" value="<?= $tampilkan_data['nama_ayah']; ?>" class="form-control text-black">
                    <?= form_error('txtnama_ayah', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="NI"> Nama Ibu : </label></td>
                    <td> <input type="text" name="txtnama_ibu" id="NI" value="<?= $tampilkan_data['nama_ibu']; ?>" class="form-control text-black">
                    <?= form_error('txtnama_ibu', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>

                <input type="hidden" value="<?= $tampilkan_data['gambar']; ?>" name="gambar_lama">

                <tr>
                    <td><label for="pict"> Gambar : </label></td>
                    <td><img src="<?= base_url('assets/gambar/') . $tampilkan_data['gambar']; ?>" class="img-thumbnail" width='80' height='80'>
                        <?= $tampilkan_data['gambar']; ?> <br>
                        <input type="file" name="gambar" id="pict" class="form-control mt-2 text-black">
                    </td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat : </label></td>
                    <td> <textarea name="txtalamat" row="5" col="20" id="alamat" class="form-control text-black"><?= $tampilkan_data['alamat']; ?></textarea>
                    <?= form_error('txtalamat', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <td> <button type="submit" class="btn btn-success">Update</button></td>
                    <td> </td>
                </tr>
            </table>

        </form>

    </section>


    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>