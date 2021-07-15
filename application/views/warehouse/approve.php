<!-- Main content -->


<div class="row text-danger">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4 bg-dark">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex  bg-primary flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-light">Data Spb (Surat Permintaan Barang)</h5>

            </div>


            <div class="card-body font-weight-bold">
                <div class="table table-responsive">
                    <table class="table table-sm text-light " cellspacing="0">
                        <thead>
                            <tr class=" border bg-dark ">

                                <th class="text-center">BOM ID</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Type Sample</th>
                                <th class="text-center">Model Name</th>
                                <th class="text-center">Size</th>
                                <th class="text-center">Product Code</th>
                                <th class="text-center">Qty Product</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="text-center"><?= $spb->bom_id ?></td>
                                <td class="text-center"><?= $spb->kategori ?></td>
                                <td class="text-center"><?= $spb->type_sample ?></td>
                                <td class="text-center"><?= $spb->model_name ?></td>
                                <td class="text-center"><?= $spb->size ?></td>
                                <td class="text-center"><?= $spb->code_product ?></td>
                                <td class="text-center"><?= $spb->qty_product ?></td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 bg-light ml-4">


                    <div class="card-body bg-light">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Jenis Material yang diminta</h6>

                        </div>
                        <div class="table table-responsive">
                            <table class="table table-sm text-dark" cellspacing="0">
                                <thead>
                                    <tr>

                                        <th class="">No</th>
                                        <th class="">Nama Material</th>
                                        <th class="text-center" style="width: 35%;">Ukuran request </th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($detail_spk as $sp) : ?>
                                    <tr>
                                        <td class=""><?= $i++ ?>. </td>
                                        <td class=""><?= $sp->nama_sub ?></td>
                                        <td class="text-center"><?= $sp->jml_request ?></td>

                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary float-right mb-2" id="approve" data-toggle="modal"
                        data-target="#modal_approve">Approve</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md">

                    <div class="card-footer bg-dark ">
                        <a href="<?php echo base_url('Warehouse/daftarSpb') ?>"
                            class="btn btn-danger btn-icon-split btn-sm float-right" style="margin-bottom: 5px;"><span
                                class="icon text-white-5">
                                <i class="fas fa-arrow-circle-left"></i></span>
                            <span class="font-weight-bold text">Back</span></a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- approve Modal-->
<div class="modal fade" id="modal_approve">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h4 class="modal-title text-light" id="exampleModalLabel">Form Konfirmasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Warehouse/Store') ?>" method="post">
                    <input type="hidden" name="id_spk" value="<?= $spb->id_spk ?>">
                    <div class="form-group text-light">
                        <label for="submit_date">Tanggal konfirmasi</label>
                        <input type="date"
                            class="form-control <?php echo form_error('submit_date') ? 'is-invalid' : '' ?>"
                            id="submit_date" name="submit_date">
                        <div class="invalid-feedback">
                            <?php echo form_error('submit_date') ?>
                        </div>
                    </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-light mb-2 btn-sm">Send</button>

            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>