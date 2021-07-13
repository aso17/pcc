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
                            <h5><i class="fas fa-edit"> Form Create Sub Material <?= $material->nama_material ?></i>
                            </h5>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?= base_url('Submaterial/store') ?>">
                            <input type="hidden" value="<?= $material->id_material ?>" name="id_material">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="nama_sub">Nama Sub Material</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('nama_sub') ? 'is-invalid' : '' ?>"
                                                id="nama_sub" name="nama_sub" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('nama_sub') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="ukuran">Ukuran Sub Material</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('ukuran') ? 'is-invalid' : '' ?>"
                                                id="ukuran" name="ukuran" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('ukuran') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="satuan">Satuan </label>
                                            <select name="satuan" id="satuan"
                                                class="form-control custom-form <?= form_error('satuan') ? 'is-invalid' : '' ?>"
                                                name="satuan">
                                                <option selected hidden value="">-- Pilih satuan --</option>
                                                <option value="yard">Yard</option>
                                                <option value="meter">Meter</option>
                                                <option value="scorfeet">Scorfeet</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('satuan'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?php echo base_url('Submaterial/detail_material/' . $material->id_material) ?>"
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