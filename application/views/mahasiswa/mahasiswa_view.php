<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Guided Modul 6</title>
    <style>
        .bg {
            background-color: mediumturquoise;
        }
    </style>

</head>

<body class=bg>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo site_url('mahasiswa') ?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" arialabel="Togglenavigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('mahasiswa') ?>">Mahasiswa </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('buku') ?>">Buku</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Table -->
    <div class="container">

        <h1 style="color:darkmagenta;  font-weight: bold; " class="text-center mt-2">Data Mahasiswa</h1>
        <a class="btn btn-success" href="<?php echo site_url('mahasiswa/add') ?>" role="button" style="margintop:30px;
margin-bottom:5px; background-color:blue; ">Tambah</a>
        <a class="btn btn-success" href="<?php echo site_url('LaporanMahasiswa') ?>" role="button" style="margintop:30px;
margin-bottom:5px; background-color:RED; ">Cetak ke PDF</a>

        <table class="table table-striped table-primary" style="color:blue; background-color:#A41924" ;>
            <thead style="color:yellow; background-color:#A41924">
                <tr>
                    <th scope="col" style="text-align:center">ID</th>
                    <th scope="col" style="text-align:center">NAMA</th>
                    <th scope="col" style="text-align:center">NPM</th>
                    <th scope="col" style="text-align:center">FAKULTAS</th>
                    <th scope="col" style="text-align:center">PROGRAM STUDI</th>
                    <th scope="col" style="text-align:center">AKSI</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = $this->uri->segment('3') + 1;
                foreach ($mahasiswa as $mahasiswas) : ?>
                    <tr class="table-success">
                        <td style="background-color:orange; text-align:center"><?php echo $mahasiswas->ID ?></td>
                        <td style="background-color:pink"><?php echo $mahasiswas->NAMA ?></td>
                        <td style="background-color:yellow; text-align:center"><?php echo $mahasiswas->NPM ?></td>
                        <td style="background-color:pink"><?php echo $mahasiswas->FAKULTAS ?></td>
                        <td style="background-color:yellow"><?php echo $mahasiswas->PRODI ?></td>
                        <td style="text-align:center">
                            <a class="btn btn-primary" href="<?php echo site_url('mahasiswa/edit/' . $mahasiswas->ID) ?>" role="button">Edit</a>
                            <a onclick="deleteConfirm('<?php echo site_url('mahasiswa/delete/' . $mahasiswas->ID) ?>')" href="#!" id="hapus" class="btn btn-danger" role="button">Hapus</a>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
        <p><?php echo $links; ?></p>
    </div>
    <!-- Modal -->
    <!-- Delete Confirmation-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-
UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-
JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>