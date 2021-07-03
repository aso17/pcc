<!-- Main content -->


<div class="row text-danger">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4 bg-dark">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex  bg-primary flex-row align-items-center justify-content-between">
                <h4 class="m-0 font-weight-bold text-light">Data Planing</h4>

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
                                <th class="text-center">Decription</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="text-center"><?= $spk->bom_id ?></td>
                                <td class="text-center"><?= $spk->kategori ?></td>
                                <td class="text-center"><?= $spk->type_sample ?></td>
                                <td class="text-center"><?= $spk->model_name ?></td>
                                <td class="text-center"><?= $spk->size ?></td>
                                <td class="text-center"><?= $spk->code_product ?></td>
                                <td class="text-center"><?= $spk->qty_product ?></td>
                                <td class="text-center"><?= $spk->decription ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 bg-warning ml-4">


                    <div class="card-body bg-warning">
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
                                    <?php foreach ($spb as $sp) : ?>
                                    <tr>
                                        <td class=""><?= $i++ ?>. </td>
                                        <td class=""><?= $sp->nama_material ?></td>
                                        <td class="text-center"><?= $sp->qty_request ?></td>

                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary float-right" id="approve" data-toggle="modal"
                        data-target="#modal_approve">Approve</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md">

                    <div class="card-footer bg-dark ">
                        <a href="<?php echo base_url('Warehouse') ?>"
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
                <form action="">
                    <input type="date">

                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Send</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>