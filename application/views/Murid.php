<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">
   
    <title>Data Siswa - Frasnsiskus Hadiyanto Christiono</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand">Data Siswa</a>
    <a class="navbar-brand text-end">Fransiskus</a>
  </div>
</nav>

    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-12">
                <h4>Sekolah suka suka</h4> 
       
            <div class="text-end">
                 <a href="<?= base_url('murid/tambah/'); ?>" class="btn btn-outline-secondary btn-lg mb-5 mt-2 ">Tambah Data</a>
            </div>
                <div class="table-responsive table-striped">
                    <table class="table" id="example">
                        <thead>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nama Bapak</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tbsiswa as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $m['nis']; ?></td>
                                    <td><?= $m['namasiswa']; ?></td>
                                    <td><?= $m['alamatsiswa']; ?></td>
                                    <td><?= $m['namabapak']; ?></td>
                                    <td><?= $m['namaibu']; ?></td>
                                    <td><a href="<?= base_url('murid/hapus/'); ?><?= $m['id']; ?>" class="badge badge-danger btn-danger" onclick="return confirm('Apakah kamu ingin menghapus data ini?');">Hapus</a></td>
                                    <td><a href="<?= base_url('murid/ubah/'); ?><?= $m['id']; ?>" class="badge badge-warning btn-info">Ubah</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <br>
                            </br>
                <figcaption class="blockquote-footer text-end">
                 <i>  Fransiskus Hadiyanto Christiono 20041033 4F </i>
                </figcaption>
                </figure>
            </div>
        </div>

        
    </div>

 

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
    <!--DATATABLES-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
                                    } );
    </script>
</body>

</html>