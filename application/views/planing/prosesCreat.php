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
                        <div class="card-header bg-light text-dark ">
                            <h5><i class="fas fa-edit"> Form Proses Planing (SPB)</i></h5>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form method="post" action="<?= base_url('Planing/prosesStore') ?>">
                            <input type="hidden" name="id_spb" value="<?= $spb->id_spb ?>">
                            <input type="hidden" name="id_spk" value="<?= $spb->id_spk ?>">
                            <div class="card-body">
                                <div class="row mb-2 ">
                                    <div class="col-md-4">
                                        <td class="text-light bg-success font-bold mb-2">Tanggal Request: <input
                                                type="text" value="<?= $spb->order_date ?>" disabled>
                                        </td>
                                    </div>
                                    <div class="col-md-4  ">
                                        <td>Tanggal submit: <input type="text" value="<?= $spb->order_date ?>" disabled>
                                        </td>
                                    </div>
                                    <?php if (!empty($proses->nama_proses)) { ?>
                                    <div class="col-md-4">
                                        <td class="float-right">Status: <input type="text"
                                                class="bg-success text-light font-weight-bold"
                                                value="<?= $proses->nama_proses ?>" disabled>
                                        </td>
                                    </div>
                                    <?php } else { ?>
                                    <td>Status: <input type="text" disabled placeholder="belum ada">
                                    </td>
                                    <?php } ?>
                                </div>

                                <div class=" row bg-light text-dark font-weight-bold">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bom_id">Bom Id</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('bom_id') ? 'is-invalid' : '' ?>"
                                                id="bom_id" name="bom_id" value="<?= $spb->bom_id ?>" readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('bom_id') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="code_product">Code Product</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('code_product') ? 'is-invalid' : '' ?>"
                                                id="code_product" name="code_product" value="<?= $spb->code_product ?>"
                                                readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('code_product') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="model_name">Model Name</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('model_name') ? 'is-invalid' : '' ?>"
                                                id="model_name" name="model_name" value="<?= $spb->model_name ?>"
                                                readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('model_name') ?>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row bg-light text-dark font-weight-bold">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="type_sample">Type Sample</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('type_sample') ? 'is-invalid' : '' ?>"
                                                id="type_sample" name="type_sample" value="<?= $spb->type_sample ?>"
                                                readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('type_sample') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="size">Size (ukuran)</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('size') ? 'is-invalid' : '' ?>"
                                                id="size" name="size" value="<?= $spb->size ?>" readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('size') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="size">Jumlah Product</label>
                                            <input type="text"
                                                class="form-control <?php echo form_error('size') ? 'is-invalid' : '' ?>"
                                                id="size" name="size" value="<?= $spb->qty_product ?>" readonly>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('size') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mt-2 bg-light text-dark font-weight-boldk">
                                    <?php foreach ($detail_spk as $m) : ?>

                                    <input type="hidden" name="id_material[]" value="<?= $m->id_submaterial ?>">
                                    <div class="col-md-3">
                                        <label for="id_material" class=""> Material
                                            <?= $m->nama_sub  ?></label>
                                        <div class="form-group">

                                            <div class="input-group">

                                                <input type="text" class="form-control" name="request"
                                                    value="<?= $m->jml_request ?>" autocomplete="off" readonly>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>


                                </div>
                                <div class="row mt-2 bg-light font-weight-bold ">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="nama_proses">Proses</label>
                                            <select name="nama_proses" id="nama_proses"
                                                class="form-control custom-form <?= form_error('nama_proses') ? 'is-invalid' : '' ?> "
                                                name="nama_proses">
                                                <div>
                                                    <option selected hidden value="">-- Pilih --</option>
                                                    <option value="Cuting" class="bg-secondary text-light">Cuting
                                                    </option>
                                                    <option value="Proses" class="bg-secondary text-light">Proses
                                                    </option>
                                                    <option value="Priper" class="bg-secondary text-light">Priper
                                                    </option>
                                                    <option value="Sawing" class="bg-secondary text-light">Sawing
                                                    </option>
                                                    <option value="Asembling" class="bg-secondary text-light">Asembling
                                                    </option>
                                                    <option value="Finishing" class="bg-secondary text-light">Finishing
                                                    </option>
                                                </div>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('nama_proses'); ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="tgl_proses">Tanggal Proses</label>
                                            <input type="date"
                                                class="form-control <?php echo form_error('tgl_proses') ? 'is-invalid' : '' ?>"
                                                id="tgl_proses" name="tgl_proses">
                                            <div class="invalid-feedback">
                                                <?php echo form_error('tgl_proses'); ?>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="row">
                                <div class="col-md">

                                    <div class="card-footer">
                                        <a href="<?php echo base_url('Planing/proses') ?>"
                                            class="btn btn-success btn-icon-split btn-sm float-right"
                                            style="margin-bottom: 5px;"><span class="icon text-white-5">
                                                <i class="fas fa-arrow-circle-left"></i></span>
                                            <span class="font-weight-bold text text-danger">Back</span></a>
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