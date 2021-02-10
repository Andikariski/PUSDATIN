<body class="hold-transition login-page">
    <div class="login mt-5 m-4">
        <!-- /.login-logo -->
        <div class="card mt-5 card-shadow-lg">
            <div class="card-body login-card-body">
                <h5 class="text-center"><strong>SISTEM INFORMASI & PENCATATAN DATA KEPENDUDUKAN<BR> DUSUN NGAJARAN</strong></h5>
                <p class="login-box-msg m-2">Login ke halaman Admin</p>
                <div class="flash-gagal-login" data-flashdata="<?= $this->session->flashdata('flash-gagal-login') ?>"></div>
                <form action="<?= base_url('Login') ?>" method="post">
                    <div>
                        <?= form_error('username', '<small class="text-danger mt-2">', '</small>') ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <br>
                        </div>
                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-key"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-4">
                        <div class="col">
                            <a href="<?= base_url('Home') ?>" class="btn btn-block btn-danger"><strong>Kembali</strong></a>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-block btn-primary"><strong>Masuk</strong></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>