<div class="flash-all" data-flashdata="<?= $this->session->flashdata('flash-all') ?>"></div>
<div class="content-wrapper">
    <section class="content">
        <div class="row ">
            <div class="col">
                <h4 class="mt-4 m-2 ml-2"><strong>Data Warga RT 0<?= $index['rt'] ?></strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-4 m-2">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
                                    <i class="fas fa-plus"> </i> Tambah Data
                                </button>
                                <a href="<?= base_url('Cetak/dataWargabyRt/') ?><?= $index['rt'] ?>" target="_blank" class="btn btn-success ml-2">
                                    <i class="fas fa-print"> </i> Cetak Data PDF</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <?= $this->session->flashdata('message') ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Tanggl Lahir</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>BPJS</th>
                                    <th>No KK</th>
                                    <th>Kelolah Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tbl_data_warga as $dw) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $dw['nik'] ?></td>
                                        <td><?= $dw['nama'] ?></td>
                                        <td><?= date('d F Y', strtotime($dw['tanggal_lahir'])) ?></td>
                                        <td><?= date('Y') -  substr($dw['tanggal_lahir'], 0, 4); ?></td>
                                        <td><?= $dw['jenis_kelamin'] ?></td>
                                        <td><?= $dw['bpjs'] ?></td>
                                        <td><?= $dw['no_kk'] ?></td>
                                        <td>
                                            <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#modal-edit<?= $dw['id'] ?>"><i class="fas fa-edit"> </i> Ubah</a>
                                            <a href="<?= base_url('admin/deleteDataWarga/') ?><?= $dw['id'] ?>/<?= $dw['rt'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"> </i> Hapus</a>
                                            <!-- <a href="#" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"> </i> Hapus test</a> -->
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.card -->
</div>
<!-- /.col -->



<!-- Modal tambah data -->
<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Warga</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url('admin/') ?>addDataWarga" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nik</label>
                                <input type="number" class="form-control" autocomplete="none" name="nik" required>
                                <input type="hidden" class="form-control" autocomplete="none" value="<?= $index['rt'] ?>" name="rt">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" autocomplete="none" name="nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" autocomplete="none" name="tanggal_lahir" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option selected>--Pilih--</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>BPJS</label>
                                <input type="number" class="form-control" id="title" name="bpjs" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <option selected>--Pilih--</option>
                                    <option>Kepala Keluarga</option>
                                    <option>Ibu Rumah Tanggal</option>
                                    <option>Anak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <div class="form-group">
                                    <label>NO KK</label>
                                    <input type="number" class="form-control" id="title" name="no_kk">
                                    <small class="text-danger">Hanya di isi oleh Kepala Keluarga...!!</small>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="far fa-times-circle"></i> Batal</button>
                <button type="submit" class="btn btn-primary"> <i class="far fa-save"></i> Simpan Data</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!-- Modal Edit data -->
<?php foreach ($tbl_data_warga as $dw) : ?>
    <div class="modal fade" id="modal-edit<?= $dw['id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Warga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url('admin/') ?>editDataWarga" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nik</label>
                                    <input type="number" class="form-control" autocomplete="none" name="nik" required value="<?= $dw['nik'] ?>">
                                    <input type="hidden" class="form-control" autocomplete="none" value="<?= $index['rt'] ?>" name="rt">
                                    <input type="hidden" class="form-control" autocomplete="none" value="<?= $dw['id'] ?>" name="id">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" autocomplete="none" name="nama" required value="<?= $dw['nama'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" autocomplete="none" name="tanggal_lahir" required value="<?= $dw['tanggal_lahir'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" required>
                                        <option selected value="<?= $dw['jenis_kelamin'] ?>"><?= $dw['jenis_kelamin'] ?></option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>BPJS</label>
                                    <input type="number" class="form-control" id="title" name="bpjs" required value="<?= $dw['bpjs'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" required>
                                        <option selected value="<?= $dw['status'] ?>"><?= $dw['status'] ?></option>
                                        <option>Kepala Keluarga</option>
                                        <option>Ibu Rumah Tanggal</option>
                                        <option>Anak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>NO KK</label>
                                        <input type="number" class="form-control" id="title" name="no_kk" value="<?= $dw['no_kk'] ?>">
                                        <small class="text-danger">Hanya di isi oleh Kepala Keluarga...!!</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="far fa-times-circle"></i> Batal</button>
                    <button type="submit" class="btn btn-primary"> <i class="far fa-save"></i> Simpan Data</button>
                </div>
            </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php endforeach ?>