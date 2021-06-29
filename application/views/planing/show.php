<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data detail Planing</h6>

            </div>


            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-sm" cellspacing="0">
                        <thead>
                            <tr class=" border">

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
                                <td class="text-center">
                                    <?php if (empty($spk->decription)) { ?>
                                    null

                                    <?php }; ?>
                                    <?= $spk->decription ?>
                                </td>



                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">


                    <div class="card-header bg-light">
                        <h6 class="m-0 font-weight-bold text-primary">Jenis Material yang dipakai</h6>

                    </div>
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table class="table table-sm" cellspacing="0">
                                <thead>
                                    <tr>

                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Material</th>
                                        <th class="text-center">Ukuran </th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($detail_spk as $d) : ?>
                                    <tr>

                                        <td class="text-center">
                                            <?= $i++; ?>
                                        </td>
                                        <td class="text-center"><?= $d->nama_material ?></td>
                                        <td class="text-center"><?= $d->ukuran ?></td>




                                    </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">

                    <div class="card-footer">
                        <a href="<?php echo base_url('Planing') ?>"
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