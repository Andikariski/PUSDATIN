<div class="flash-hapus" data-flashdata="<?= $this->session->flashdata('flash-hapus') ?>"></div>
<div class="flash-tambah" data-flashdata="<?= $this->session->flashdata('flash-tambah') ?>"></div>
<div class="flash-ubah" data-flashdata="<?= $this->session->flashdata('flash-ubah') ?>"></div>
<div class="content-wrapper">
    <section class="content">
        <div class="row ">
            <div class="col">
                <h4 class="mt-4 m-2 ml-2"><strong>Data Jumlah KK dan Jumlah Jiwa RT 0<?= $index['rt'] ?></strong></h4>
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
                                <a href="<?= base_url('Cetak/dataRentangUsiabyRt/') ?><?= $index['rt'] ?>" target="_blank" class="btn btn-success ml-2">
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
                                    <th>Rentang Umur</th>
                                    <th>Jumlah Laki - Laki</th>
                                    <th>Jumlah Perempuan</th>
                                    <th>Kelolah Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tbl_rentang_usia as $ru) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $ru['umur'] ?> Tahun </td>
                                        <td><?= $ru['laki_laki'] ?></td>
                                        <td><?= $ru['perempuan'] ?></td>
                                        <td>
                                            <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#modal-edit<?= $ru['id'] ?>"><i class="fas fa-edit"> </i> Ubah</a>
                                            <a href="<?= base_url('admin/deleteDataRentangUsia/') ?><?= $ru['id'] ?>/<?= $ru['rt'] ?>" class="badge badge-danger tombol-hapus"><i class="fas fa-trash"> </i> Hapus</a>
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
                <h4 class="modal-title">Tambah Data Jumlah KK dan Jumlah Jiwa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url('admin/') ?>addDataRentangUsia" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Rentang Usia</label>
                                <select class="custom-select" name="umur" required>
                                    <option value="">--Pilih Rentang usia--</option>
                                    <option value="0 - 4">0 - 4</option>
                                    <option value="5 - 9">5 - 9</option>
                                    <option value="10 - 14">10 - 14</option>
                                    <option value="10 - 14">10 - 14</option>
                                    <option value="20 - 24">20 - 24</option>
                                    <option value="25 - 29">25 - 29</option>
                                    <option value="30 - 34">30 - 34</option>
                                    <option value="35 - 39">35 - 39</option>
                                    <option value="40 - 44">40 - 44</option>
                                    <option value="45 - 49">45 - 49</option>
                                    <option value="50 - 54">50 - 54</option>
                                    <option value="55 - 59">55 - 59</option>
                                    <option value="60 + ..">60 + ..</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jumlah Laki - laki</label>
                                <input type="number" class="form-control" autocomplete="none" name="laki_laki" required>
                                <input type="hidden" value="<?= $index['rt'] ?>" name="rt">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Jumlah Perempuan</label>
                                <input type="number" class="form-control" autocomplete="none" name="perempuan" required>
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
<?php foreach ($tbl_rentang_usia as $ru) : ?>
    <div class="modal fade" id="modal-edit<?= $ru['id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Jumlah KK dan Jumlah Jiwa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= base_url('admin/') ?>editDataRentangUsia" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Rentang Usia</label>
                                    <select class="custom-select" name="umur" required>
                                        <option value="<?= $ru['umur'] ?>" selected><?= $ru['umur'] ?></option>
                                        <option value="0 - 4">0 - 4</option>
                                        <option value="5 - 9">5 - 9</option>
                                        <option value="10 - 14">10 - 14</option>
                                        <option value="10 - 14">10 - 14</option>
                                        <option value="20 - 24">20 - 24</option>
                                        <option value="25 - 29">25 - 29</option>
                                        <option value="30 - 34">30 - 34</option>
                                        <option value="35 - 39">35 - 39</option>
                                        <option value="40 - 44">40 - 44</option>
                                        <option value="45 - 49">45 - 49</option>
                                        <option value="50 - 54">50 - 54</option>
                                        <option value="55 - 59">55 - 59</option>
                                        <option value="60 + ..">60 + ..</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Jumlah Laki - laki</label>
                                    <input type="number" class="form-control" autocomplete="none" name="laki_laki" required value="<?= $ru['laki_laki'] ?>">
                                    <input type="hidden" value="<?= $index['rt'] ?>" name="rt">
                                    <input type="hidden" value="<?= $ru['id'] ?>" name="id">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Jumlah Perempuan</label>
                                    <input type="number" class="form-control" autocomplete="none" name="perempuan" required value="<?= $ru['perempuan'] ?>">
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