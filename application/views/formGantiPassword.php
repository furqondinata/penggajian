<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="card" style="width: 50%">
        <div class="card-body">
            <form method="POST" action="<?= base_url('gantiPassword/gantiPasswordAksi') ?>">
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="passBaru" class="form-control">
                    <?= form_error('passBaru', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <div class="form-group">
                    <label>Ulangi Password Baru</label>
                    <input type="password" name="ulangiPass" class="form-control">
                    <?= form_error('ulangiPass', '<div class="text-small text-danger"> </div>') ?>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>

            </form>
        </div>

    </div>

</div>