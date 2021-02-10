<div class="flash-all" data-flashdata="<?= $this->session->flashdata('flash-all') ?>"></div>
<div class="content-wrapper">
    <section class="content">
        <div class="row ">
            <div class="col">
                <h4 class="mt-4 m-2 ml-2"><strong>Data PUS dan Kesertaan KB RT 0<?= $index['rt'] ?></strong></h4>
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
                                <a href="<?= base_url('Cetak/dataPUSByRt/') ?><?= $index['rt'] ?>" target="_blank" class="btn btn-success ml-2">
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
                                    <th>Nama Istri</th>
                                    <th>Nama Suami</th>
                                    <th>Tanggal Lahir istri</th>
                                    <th>Tanggal Lahir suami</th>
                                    <th>Jumlah Anak</th>
                                    <th>Umur Anak terkecil</th>
                                    <th>Kesertaan KB</th>
                                    <th>Kelolah Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tbl_pusdankb as $pus) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $pus['nama_istri'] ?></td>
                                        <td><?= $pus['nama_suami'] ?></td>
                                        <td><?= $pus['ttl_istri'] ?></td>
                                        <td><?= $pus['ttl_suami'] ?></td>
                                        <td><?= $pus['jumlah_anak'] ?> orang</td>
                                        <td><?= $pus['umur_anak_terkecil'] ?> tahun</td>
                                        <td><?= $pus['kesertaan_kb'] ?></td>
                                        <td>
                                            <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#modal-edit<?= $pus['id'] ?>"><i class="fas fa-edit"> </i> Ubah</a>
                                            <a href="<?= base_url('admin/deleteDataPUSKB/') ?><?= $pus['id'] ?>/<?= $pus['rt'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"> </i> Hapus</a>
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
                <h4 class="modal-title">Tambah Data PUS dan KB</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url('admin/') ?>addDataPUSKB" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Suami</label>
                                <input type="text" class="form-control" autocomplete="none" name="nama_suami" required>
                                <input type="hidden" class="form-control" autocomplete="none" value="<?= $index['rt'] ?>" name="rt">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>TTL Suami</label>
                                <input type="date" class="form-control" name="ttl_suami" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Istri</label>
                                <input type="text" class="form-control" autocomplete="none" name="nama_istri" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>TTL Istri</label>
                                <input type="date" class="form-control" name="ttl_istri" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jumlah Anak</label>
                                <input type="number" class="form-control" id="title" name="jumlah_anak" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Umur Anak Terkecil</label>
                                <input type="number" class="form-control" id="title" name="umur_anak_terkecil" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kesertaan KB</label>
                                <select class="form-control" name="kesertaan_kb" required>
                                    <option selected>--Pilih--</option>
                                    <option>PIL</option>
                                    <option>SUNTIK</option>
                                </select>
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
<?php foreach ($tbl_pusdankb as $pus) : ?>
    <div class="modal fade" id="modal-edit<?= $pus['id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Data PUS dan KB</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url('admin/') ?>editDataPUSKB" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama Suami</label>
                                    <input type="text" class="form-control" autocomplete="none" name="nama_suami" required value="<?= $pus['nama_suami'] ?>">
                                    <input type="hidden" class="form-control" autocomplete="none" value="<?= $pus['id'] ?>" name="id">
                                    <input type="hidden" class="form-control" autocomplete="none" value="<?= $pus['rt'] ?>" name="rt">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>TTL Suami</label>
                                    <input type="date" class="form-control" name="ttl_suami" required value="<?= $pus['ttl_suami'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama Istri</label>
                                    <input type="text" class="form-control" autocomplete="none" name="nama_istri" required value="<?= $pus['nama_istri'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>TTL Istri</label>
                                    <input type="date" class="form-control" name="ttl_istri" required value="<?= $pus['ttl_suami'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Jumlah Anak</label>
                                    <input type="number" class="form-control" id="title" name="jumlah_anak" required value="<?= $pus['jumlah_anak'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Umur Anak Terkecil</label>
                                    <input type="number" class="form-control" id="title" name="umur_anak_terkecil" required value="<?= $pus['umur_anak_terkecil'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Kesertaan KB</label>
                                    <select class="form-control" name="kesertaan_kb" required>
                                        <option selected value="<?= $pus['kesertaan_kb'] ?>"><?= $pus['kesertaan_kb'] ?></option>
                                        <option>PIL</option>
                                        <option>SUNTIK</option>
                                    </select>
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
<?php endforeach; ?>
<!-- /.modal -->