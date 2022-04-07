<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">
    <!--datatables-->
    



    <title>Data Murid</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand">Data Siswa</a>
    <a class="navbar-brand text-end">Fransiskus</a>
  </div>
</nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Ubah Data Murid Panduan Code</h3>
                <div class="card">
                    <div class="card-header">
                        Ubah Data Murid
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                        <input type="hidden" value="<?= $tbsiswa['id']; ?>" name="id">
                            <div class="form-group">

                                <label for="nis">NIS</label>
                                <input type="text" class="form-control" id="nis" name="nis">
                                <?= form_error('nis', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="namasiswa">Nama</label>
                                <input type="namasiswa" class="form-control" id="namasiswa" name="namasiswa">
                                <?= form_error('namasiswa', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                          
                            <div class="form-group">
                                <label for="alamatsiswa">Alamat</label>
                                <input type="text" class="form-control" id="alamatsiswa" name="alamatsiswa">
                                <?= form_error('alamatsiswa', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="namabapak">Nama Bapak</label>
                                <input type="text" class="form-control" id="namabapak" name="namabapak">
                                <?= form_error('namabapak', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="namaibu">Nama Ibu</label>
                                <input type="text" class="form-control" id="namaibu" name="namaibu">
                                <?= form_error('namaibu', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="text-end">
                            <button type="submit" class="btn btn-secondary mb-5 mt-2 " name="Ubah">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
    
</body>

</html>