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
                <a href="<?php echo site_url('buku') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-body">
                <h1 class="text-center">Edit Data Buku</h1>
                <form action="<?php base_url('buku/edit') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $buku->id ?>" />
                    <div class="form-group">
                        <label for="nama" style="color:blue;">Nama Buku</label>
                        <input class="form-control" type="text" name="nama" value="<?php echo $buku->nama_buku ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="npm" style="color:blue;">Pengarang</label>
                        <input class="form-control" type="text" name="pengarang" value="<?php echo $buku->pengarang ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="fakultas" style="color:blue;">Jumlah Halaman</label>
                        <input class="form-control" type="number" name="halaman" value="<?php echo $buku->jumlah_halaman ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="prodi" style="color:blue;">Penerbit</label>
                        <input class="form-control" type="text" name="penerbit" value="<?php echo $buku->penerbit ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="prodi" style="color:blue;">Tahun Terbit</label>
                        <input class="form-control" type="number" name="tahun" value="<?php echo $buku->tahun_terbit ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="prodi" style="color:blue;">Kategori Buku</label>
                        <input class="form-control" type="text" name="kategori" value="<?php echo $buku->kategori_buku ?>" required />
                    </div>
                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>