<!-- Content Header (Page header) -->
<div class="content-header">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5><i class="fas fa-edit"> Form Create User</i></h5>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?= base_url('Users/store') ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="nikKaryawan">Nik karyawan</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('nikKaryawan') ? 'is-invalid' : '' ?>"
                                                id="nikKaryawan" name="nikKaryawan" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('nikKaryawan') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="namaLengkap">Nama lengkap</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('namaLengkap') ? 'is-invalid' : '' ?>"
                                                id="namaLengkap" name="namaLengkap" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('namaLengkap') ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="departemen">Departemen</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('departemen') ? 'is-invalid' : '' ?>"
                                                id="departemen" name="departemen" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('departemen') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="devisi">Devisi</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('devisi') ? 'is-invalid' : '' ?>"
                                                id="devisi" name="devisi" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('devisi') ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>"
                                                id="username" name="username" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('username') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>"
                                                id="password" name="password" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('password') ?>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="<?php echo base_url('Users') ?>"
                                    class="btn btn-primary btn-icon-split btn-sm float-right"
                                    style="margin-bottom: 5px;"><span class="icon text-white-5">
                                        <i class="fas fa-arrow-circle-left"></i></span>
                                    <span class="font-weight-bold text">Back</span></a>
                                <button type="submit" class="btn btn-success btn-icon-split btn-sm float-right"
                                    style="margin-right: 5px;"><span class="icon text-white-5">
                                        <i class="fas fa-save"></i></span>
                                    <span class="font-weight-bold text">Save</span></a></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>