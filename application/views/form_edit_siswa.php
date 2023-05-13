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
    <form action="<?= base_url('Home/update_data/' . $tampilkan_data['id']); ?>" method="post" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <td><label for="nama">Nama Siswa : </label> </td>
                <td><input type="text" name="txtnama" id="nama" value="<?= $tampilkan_data['nama']; ?>"></td>
            </tr>
            <tr>
                <td><label for="jk">Jenis Kelamin : </label></td>
                <td>
                    <input type="radio" name="rdjeniskelamin" <?php if ($tampilkan_data['jk'] == "Laki-Laki") {
                                                                    echo "checked";
                                                                } ?> value="Laki-Laki" id="jk"> Laki-Laki
                    <input type="radio" name="rdjeniskelamin" <?php if ($tampilkan_data['jk'] == "Perempuan") {
                                                                    echo "checked";
                                                                } ?> value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td><label for="NA">Nama Ayah : </label></td>
                <td><input type="text" name="txtnama_ayah" id="NA" value="<?= $tampilkan_data['nama_ayah']; ?>"></td>
            </tr>
            <tr>
                <td><label for="NI"> Nama Ibu : </label></td>
                <td> <input type="text" name="txtnama_ibu" id="NI" value="<?= $tampilkan_data['nama_ibu']; ?>"></td>
            </tr>
            <tr>
                <td><label for="pict"> Gambar : </label></td>
                <td><img src="<?= base_url('assets/gambar/').$tampilkan_data['gambar'];?>" class="img-thumbnail" width='80' height='80'>
                <?= $tampilkan_data['gambar']; ?> <br>
                <input type="file" name="gambar" id="pict">
            </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat : </label></td>
                <td> <textarea name="txtalamat" row="5" col="20" id="alamat"><?= $tampilkan_data['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td> <button type="submit">Update</button></td>
                <td> </td>
            </tr>
        </table>

    </form>

</body>

</html>