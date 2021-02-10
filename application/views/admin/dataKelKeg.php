<div class="flash-all" data-flashdata="<?= $this->session->flashdata('flash-all') ?>"></div>

<div class="content-wrapper">
    <section class="content">
        <div class="row ">
            <div class="col">
                <h4 class="mt-4 m-2 ml-2"><strong>Data Kelompok Kegiatan RT 0<?= $index['rt'] ?></strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-4 m-2 ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">
                                    <i class="fas fa-plus"> </i> Tambah Data
                                </button>
                                <a href="<?= base_url('Cetak/dataKelKegyRt/') ?><?= $index['rt'] ?>" target="_blank" class="btn btn-success ml-2">
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
                                    <th>Kepala Keluarga</th>
                                    <th>Jumlah Anggota keluarga</th>
                                    <th>BKB</th>
                                    <th>BKR</th>
                                    <th>BKL</th>
                                    <th>UPPKS</th>
                                    <th>PIK-R</th>
                                    <th>Kelolah Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tbl_kelompok_kegiatan as $kk) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $kk['kepala_keluarga'] ?></td>
                                        <td><?= $kk['jumlah_anggota_keluarga'] ?></td>
                                        <td>
                                            <?php
                                            if ($kk['bkb'] == 'ya')
                                                echo '<i class="fas fa-check"> </i>';
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($kk['bkr'] == 'ya')
                                                echo '<i class="fas fa-check"> </i>';
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($kk['bkl'] == 'ya')
                                                echo '<i class="fas fa-check"> </i>';
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($kk['uppks'] == 'ya')
                                                echo '<i class="fas fa-check"> </i>';
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($kk['pik_r'] == 'ya')
                                                echo '<i class="fas fa-check"> </i>';
                                            ?>
                                        </td>
                                        <td>
                                            <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#modal-edit<?= $kk['id'] ?>"><i class="fas fa-edit"> </i> Ubah</a>
                                            <a href="<?= base_url('admin/deleteDataKelKeg/') ?><?= $kk['id'] ?>/<?= $kk['rt'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"> </i> Hapus</a>
                                            <!-- <a href="#" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"> </i> Hapus test</a> -->
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <hr>
                        <div class="row">
                            <div class="col-2">
                                <table class="container">
                                    <tr>
                                        <td>
                                            <h6 class="mt-2">Total BKB</h6>
                                        </td>
                                        <td class=""> : </td>
                                        <td class="mr-2">
                                            <?= $bkb['jumlahbkb'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mt-2">Total BKR</h6>
                                        </td>
                                        <td> : </td>
                                        <td>
                                            <?= $bkr['jumlahbkr'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mt-2">Total BKL</h6>
                                        </td>
                                        <td> : </td>
                                        <td>
                                            <?= $bkl['jumlahbkl'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mt-2">Total UPPKS</h6>
                                        </td>
                                        <td> : </td>
                                        <td>
                                            <?= $uppks['jumlahuppks'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mt-2">Total PIK-R</h6>
                                        </td>
                                        <td> : </td>
                                        <td>
                                            <?= $pik_r['jumlahpikr'] ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

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
            <div class="modal-header header-primary">
                <h4 class="modal-title">Tambah Data Kelompok Kegiatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url('admin/') ?>addDataKelKeg" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama Kepala Keluarga</label>
                                <input type="text" class="form-control" autocomplete="none" name="kepala keluarga" required>
                                <input type="hidden" class="form-control" autocomplete="none" value="<?= $index['rt'] ?>" name="rt">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jumlah Anggota Keluarga</label>
                                <input type="number" class="form-control" name="jumlah_anggota_keluarga" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>BKB</label>
                                <div class="custom-control custom-checkbox">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio1" name="bkb" checked value="ya">
                                        <label for="customRadio1" class="custom-control-label">Ya</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2" name="bkb" value="tidak">
                                        <label for="customRadio2" class="custom-control-label">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>BKR</label>
                                <div class="custom-control custom-checkbox">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio3" name="bkr" checked value="ya">
                                        <label for="customRadio3" class="custom-control-label">Ya</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio4" name="bkr" value="tidak">
                                        <label for="customRadio4" class="custom-control-label">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>BKL</label>
                                <div class="custom-control custom-checkbox">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio5" name="bkl" checked value="ya">
                                        <label for="customRadio5" class="custom-control-label">Ya</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio6" name="bkl" value="tidak">
                                        <label for="customRadio6" class="custom-control-label">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>UPPKS</label>
                                <div class="custom-control custom-checkbox">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio7" name="uppks" checked value="ya">
                                        <label for="customRadio7" class="custom-control-label">Ya</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio8" name="uppks" value="tidak">
                                        <label for="customRadio8" class="custom-control-label">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>PIK-R</label>
                                <div class="custom-control custom-checkbox">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio9" name="pik_r" checked value="ya">
                                        <label for="customRadio9" class="custom-control-label">Ya</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio10" name="pik_r" value="tidak">
                                        <label for="customRadio10" class="custom-control-label">Tidak</label>
                                    </div>
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
<?php foreach ($tbl_kelompok_kegiatan as $kk) : ?>
    <div class="modal fade" id="modal-edit<?= $kk['id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Kelompok Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url('admin/') ?>editDataKelKeg" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama Kepala Keluarga</label>
                                    <input type="text" class="form-control" autocomplete="none" name="kepala keluarga" required value="<?= $kk['kepala_keluarga'] ?>">
                                    <input type="hidden" class="form-control" autocomplete="none" value="<?= $index['rt'] ?>" name="rt">
                                    <input type="hidden" class="form-control" autocomplete="none" value="<?= $kk['id'] ?>" name="id">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jumlah Anggota Keluarga</label>
                                    <input type="number" class="form-control" name="jumlah_anggota_keluarga" required value="<?= $kk['jumlah_anggota_keluarga'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>BKB</label>
                                    <select class="custom-select" name="bkb">
                                        <?php if ($kk['bkb'] == 'ya') : ?>
                                            <option value="ya" selected>Ya</option>
                                        <?php else : ?>
                                            <option value="tidak" selected>Tidak</option>
                                        <?php endif ?>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>BKR</label>
                                    <select class="custom-select" name="bkr">
                                        <?php if ($kk['bkr'] == 'ya') : ?>
                                            <option value="ya" selected>Ya</option>
                                        <?php else : ?>
                                            <option value="tidak" selected>Tidak</option>
                                        <?php endif ?>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>BKL</label>
                                    <select class="custom-select" name="bkl">
                                        <?php if ($kk['bkl'] == 'ya') : ?>
                                            <option value="ya" selected>Ya</option>
                                        <?php else : ?>
                                            <option value="tidak" selected>Tidak</option>
                                        <?php endif ?>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>UPPKS</label>
                                    <select class="custom-select" name="uppks">
                                        <?php if ($kk['uppks'] == 'ya') : ?>
                                            <option value="ya" selected>Ya</option>
                                        <?php else : ?>
                                            <option value="tidak" selected>Tidak</option>
                                        <?php endif ?>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>PIK-R</label>
                                    <select class="custom-select" name="pik_r">
                                        <?php if ($kk['pik_r'] == 'ya') : ?>
                                            <option value="ya" selected>Ya</option>
                                        <?php else : ?>
                                            <option value="tidak" selected>Tidak</option>
                                        <?php endif ?>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
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
<?php endforeach; ?>