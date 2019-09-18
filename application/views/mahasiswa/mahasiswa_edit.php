<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Guided Modul 6</title>
</head>

<style>
    body {
        background-color: goldenrod;
    }
</style>

<body>
    <div class="container">
        <div class="card mb-3" style="50%; margin-top:50px;">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="card-header">
                <a href="<?php echo site_url('mahasiswa') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body">
                <h1 class="text-center">Edit Data Mahasiswa</h1>
                <form action="<?php base_url('mahasiswa/edit') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $mahasiswa->ID ?>" />
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" value="<?php echo $mahasiswa->NAMA ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input class="form-control" type="text" name="npm" value="<?php echo $mahasiswa->NPM ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="fakultas">Fakultas</label>
                        <input class="form-control" type="text" name="fakultas" value="<?php echo $mahasiswa->FAKULTAS ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi</label>
                        <input class="form-control" type="text" name="prodi" value="<?php echo $mahasiswa->PRODI ?>" required />
                    </div>
                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>