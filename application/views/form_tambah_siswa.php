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
    <form action="<?= base_url('Home/simpan_data'); ?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th><label for="nama">Nama Siswa : </label> </th>
            <td><input type="text" name="txtnama" id="nama"></td>
        </tr>
        <tr>
            <th><label for="jk">Jenis Kelamin : </label></th>
            <td>
                <input type="radio" name="rdjeniskelamin" value="Laki-Laki" id="jk"> Laki-Laki 
                <input type="radio" name="rdjeniskelamin" value="Perempuan"> Perempuan 
            </td>
        </tr>
        <tr>
            <th><label for="NA">Nama Ayah : </label></th>
            <td><input type="text" name="txtnama_ayah" id="NA"></td>
        </tr>
        <tr>
            <th><label for="NI"> Nama Ibu : </label></th>
            <td> <input type="text" name="txtnama_ibu" id="NI"></td>
        </tr>
        <tr>
            <th><label for="pict"> Gambar : </label></th>
            <td> <input type="file" class="custom-file-input" id="pict" name="gambar">
            <br> <label class="custom-file-label" for="pict">Choose file</label></td>
        </tr>
        <tr>
            <th><label for="alamat">Alamat : </label></th>
            <td> <textarea name="txtalamat" row="5" col="20" id="alamat"></textarea></td>
        </tr>
        <tr>
            <td> <button type="submit">Kirim</button></td>
            <td> </td>
        </tr>
    </table>
    </form>
</body>
</html>