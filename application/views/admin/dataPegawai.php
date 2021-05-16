<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <?= $this->session->flashdata('pesan') ?>
    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?= base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus"></i>Tambah Pegawai</a>

    <table id="table_id" class="table table-striped tabel-bordered table-responsive">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Tanggal Masuk</th>
            <th class="text-center">Status</th>
            <th class="text-center">Photo</th>
            <th class="text-center">Hak Akses</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no = 1;
        foreach ($pegawai as $p) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $p->nik ?></td>
                <td><?= $p->nama_pegawai ?></td>
                <td><?= $p->jenis_kelamin ?></td>
                <td><?= $p->jabatan ?></td>
                <td><?= $p->tanggal_masuk ?></td>
                <td><?= $p->status ?></td>
                <td><img src="<?= base_url() . 'assets/photo/' . $p->photo ?>" width="65px"></td>

                <?php if ($p->hak_akses == '1') { ?>
                    <td>Admin</td>
                <?php } else { ?>
                    <td>Pegawai</td>
                <?php } ?>

                <td class="text-center">
                    <a class="btn btn-sm btn-xs btn-primary" href="<?= base_url('admin/dataPegawai/updateData/' . $p->id_pegawai) ?>"><i class="fa fa-edit"></i></a>
                    <a onClick="return confirm('Yakin Hapus...???')" class="btn btn-sm btn-xs btn-danger" href="<?= base_url('admin/dataPegawai/deleteData/' . $p->id_pegawai) ?>"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

</div>