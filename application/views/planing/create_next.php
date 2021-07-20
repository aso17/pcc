<!-- Content Header (Page header) -->
<div class="content-header">

    <!-- Main content -->
    <section class="content bg-light">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header bg-light text-dark">
                            <h5><i class="fas fa-edit"> Form Create Surat perintah Kerja (SPK)</i></h5>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?= base_url('Planing/store_next') ?>">
                            <input type="hidden" name="id_spk" value="<?= $spk->id_spk ?>">
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="bom_id">Bom Id</label>
                                                    <input type="text" class="form-control" id="bom_id" name="bom_id"
                                                        value="<?= $spk->bom_id ?>" readonly>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kategori">Kategori</label>
                                                    <input type="text" class="form-control" id="kategori"
                                                        name="kategori" value="<?= $spk->kategori ?>" readonly>

                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="code_product">Code Product</label>
                                                    <input type="text" class="form-control " id="code_product"
                                                        name="code_product" value="<?= $spk->code_product ?>" readonly>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="qty_product">Qty Product</label>
                                                    <input type="text" class="form-control " id="qty_product"
                                                        name="qty_product" value="<?= $spk->qty_product ?>" readonly>

                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="model_name">Model Name</label>
                                                    <input type="text" class="form-control" id="model_name"
                                                        name="model_name" value="<?= $spk->model_name ?>" readonly>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_material">Material</label>
                                                    <select name="id_material" id="id_material"
                                                        class="form-control custom-form " name="id_material">

                                                        <option selected hidden value="">-- Pilih material --</option>
                                                        <?php foreach ($material as $ma) : ?>
                                                        <option value="<?= $ma->id_material ?>">
                                                            <?= $ma->nama_material ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                    </select>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="type_sample">Type Sample</label>
                                                    <input type="text" class="form-control" id="type_sample"
                                                        name="type_sample" value="<?= $spk->type_sample ?>" readonly>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_submaterial">Jenis materaial</label>
                                                    <select name="id_submaterial" id="id_submaterial"
                                                        class="form-control custom-form " name="id_submaterial">

                                                    </select>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="size">ukuran sample</label>
                                                    <input type="text" class="form-control" id="size" name="size"
                                                        value="<?= $spk->size ?>" readonly>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="request">Ukuran request</label>
                                                    <input type="text"
                                                        class="form-control <?php echo form_error('request') ? 'is-invalid' : '' ?>"
                                                        id="request" name="request" required>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('request') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="tgl_spk">Tanggal spk</label>
                                                    <input type="date" class="form-control " id="tgl_spk" name="tgl_spk"
                                                        value="<?= $spk->tgl_spk ?>">

                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="col-md-4 mt-4">

                                        <div class="col-md bg-light text-dark">
                                            <ul class="list-group">
                                                <li class="list-group-item bg-light mt-2 pb-1">Material yang dipakai
                                                </li>
                                                <table border="1" class="text-center">

                                                    <?php foreach ($detail_spk as $ds) : ?>
                                                    <tr>
                                                        <td> <?= $ds->nama_sub ?> </td>

                                                        <td> <?= $ds->jml_request . $ds->satuan ?></span>
                                                            </li>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </ul>

                                        </div>
                                    </div>

                                </div>



                            </div>
                            <!-- /.card-body -->
                            <div class="row">
                                <div class="col-md">

                                    <div class="card-footer">
                                        <a href="<?php echo base_url('Planing') ?>"
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
<script type="text/javascript">
$(document).ready(function() {
    $('#id_material').change(function() {
        var id = $(this).val();
        $.ajax({
            type: "GET",
            url: "<?= base_url('Material/get_Sub') ?>",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(sub) {

                $('#id_submaterial').html(sub);



            }

        });

    });
});
</script>