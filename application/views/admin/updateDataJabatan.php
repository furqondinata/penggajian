<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>
    <div class="card" style="width: 60%; margin-bottom:100px; ">
        <div class="card-body">

            <?php foreach ($jabatan as $j) : ?>
                <form method="POST" action="<?= base_url('admin/dataJabatan/updateDataAksi') ?>">
                    <div class="form-group">
                        <label>Nama Jabatan</label>
                        <input type="hidden" name="id_jabatan" class="form-control" value="<?= $j->id_jabatan ?>">
                        <input type="text" name="nama_jabatan" class="form-control" value="<?= $j->nama_jabatan ?>">
                        <?= form_error('nama_jabatan', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Gaji Pokok</label>
                        <input type="text" name="gaji_pokok" class="form-control" value="<?= $j->gaji_pokok ?>">
                        <?= form_error('gaji_pokok', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Tunjangan Transportasi</label>
                        <input type="text" name="tj_transport" class="form-control" value="<?= $j->tj_transport ?>">
                        <?= form_error('tj_transport', '<div class="text-small text-danger"> </div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Uang Makan</label>
                        <input type="text" name="uang_makan" class="form-control" value="<?= $j->uang_makan ?>">
                        <?= form_error('uang_makan', '<div class="text-small text-danger"> </div>') ?>
                    </div>


                    <button type="submit" class="btn btn-success">Update</button>

                </form>
            <?php endforeach; ?>
        </div>
    </div>


</div>