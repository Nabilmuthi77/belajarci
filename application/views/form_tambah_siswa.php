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

        <h1 class="my-5">Tambah Data Siswa</h1>
        <form action="<?= base_url('Home/simpan_data'); ?>" method="post" enctype="multipart/form-data">
            <table border="2" class="table table-dark table-striped">
                <tr>
                    <th><label for="nama">Nama Siswa : </label> </th>
                    <td><input type="text" name="txtnama" id="nama" class="form-control text-black">
                        <?= form_error('txtnama', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="jk">Jenis Kelamin : </label></th>
                    <td>
                        <input type="radio" name="rdjeniskelamin" value="Laki-Laki" id="jk" class="form-check-input"> Laki-Laki
                        <input type="radio" name="rdjeniskelamin" value="Perempuan" class="form-check-input"> Perempuan <br>
                        <?= form_error('rdjeniskelamin', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="NA">Nama Ayah : </label></th>
                    <td><input type="text" name="txtnama_ayah" id="NA" class="form-control text-black">
                    <?= form_error('txtnama_ayah', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="NI"> Nama Ibu : </label></th>
                    <td> <input type="text" name="txtnama_ibu" id="NI" class="form-control text-black">
                    <?= form_error('txtnama_ibu', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="pict"> Gambar : </label></th>
                    <td> <input type="file" class="form-control mt-2 text-black" id="pict" name="gambar">
                    </td>
                </tr>
                <tr>
                    <th><label for="alamat">Alamat : </label></th>
                    <td> <textarea name="txtalamat" row="5" col="20" id="alamat" class="form-control text-black"></textarea>
                    <?= form_error('txtalamat', '<small class="text-white pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <td> <button type="submit" class="btn btn-success">Simpan</button></td>
                    <td> </td>
                </tr>
            </table>
        </form>

    </section>


    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>