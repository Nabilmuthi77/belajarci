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

<body class="bg-dark">

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar scroll</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 bg-dark" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <section class="container">

        <h1 class="mt-2 text-white">Data Siswa</h1>
        <?= $this->session->flashdata('message'); ?>
        <a href="<?= base_url('Home/tambah_siswa'); ?>" class="badge bg-primary mb-2">Tambah Siswa</a>

        <div class="table-responsive">
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
        </div>

    </section>

    <div class="container">
        <footer class="container fixed-bottom bg-dark py-3" data-bs-theme="dark">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>