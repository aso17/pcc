<!-- Content Header (Page header) -->
<div class="content-header">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5><i class="fas fa-edit"> Form Proses Proses Permintaan barang (SPB)</i></h5>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?= base_url('Spb/store') ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="bom_id">Bom Id</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('bom_id') ? 'is-invalid' : '' ?>"
                                                id="bom_id" name="bom_id" value="<?= $spk->bom_id ?>" readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('bom_id') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="kategori">Tanggal Order</label>
                                            <input type="date"
                                                class="form-control <?php echo form_error('tgl_order') ? 'is-invalid' : '' ?>"
                                                id="tgl_order" name="tgl_order">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('kategori'); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="code_product">Code Product</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('code_product') ? 'is-invalid' : '' ?>"
                                                id="code_product" name="code_product" value="<?= $spk->code_product ?>"
                                                readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('code_product') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <?php foreach ($detail_spk as $m) : ?>

                                    <input type="hidden" name="id_material[]" value="<?= $m->id_material ?>">
                                    <div class="col-md-2">
                                        <label for="id_material" class="text-danger font-bold">Material
                                            <?= $m->nama_material ?></label>
                                        <div class="form-group">

                                            <div class="input-group">

                                                <input type="text"
                                                    class="form-control <?php echo form_error('qty_request[]') ? 'is-invalid' : '' ?>"
                                                    name="qty_request[]" placeholder="Qty">
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('qty_request[]') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>


                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="model_name">Model Name</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('model_name') ? 'is-invalid' : '' ?>"
                                                id="model_name" name="model_name" value="<?= $spk->model_name ?>"
                                                readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('model_name') ?>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="type_sample">Type Sample</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('type_sample') ? 'is-invalid' : '' ?>"
                                                id="type_sample" name="type_sample" value="<?= $spk->type_sample ?>"
                                                readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('type_sample') ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="size">Size (ukuran)</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('size') ? 'is-invalid' : '' ?>"
                                                id="size" name="size" value="<?= $spk->size ?>" readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('size') ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="row">
                                <div class="col-md">

                                    <div class="card-footer">
                                        <a href="<?php echo base_url('Spb') ?>"
                                            class="btn btn-danger btn-icon-split btn-sm float-right"
                                            style="margin-bottom: 5px;"><span class="icon text-white-5">
                                                <i class="fas fa-arrow-circle-left"></i></span>
                                            <span class="font-weight-bold text">Back</span></a>
                                        <button type="submit" class="btn btn-success btn-icon-split btn-sm float-right"
                                            style="margin-right: 5px;"><span class="icon text-white-5">
                                                <i class="fas fa-save"></i></span>
                                            <span class="font-weight-bold text">Save</span></a></button>
                                    </div>
                                </div>
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