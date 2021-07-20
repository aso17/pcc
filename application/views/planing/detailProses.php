<!-- Main content -->


<div class="row ">
    <!-- left column -->
    <div class="col-md ">
        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between  bg-danger">
                <h6 class="m-0 font-weight-bold text-light">Data detail Proses Planing</h6>

            </div>


            <div class="card-body bg-danger ">
                <div class="table table-responsive">
                    <table class="table table-sm text-light" cellspacing="0">
                        <thead>
                            <tr class=" border">

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
                                <td class="text-center"><?= $spk->bom_id ?></td>
                                <td class="text-center"><?= $spk->kategori ?></td>
                                <td class="text-center"><?= $spk->type_sample ?></td>
                                <td class="text-center"><?= $spk->model_name ?></td>
                                <td class="text-center"><?= $spk->size ?></td>
                                <td class="text-center"><?= $spk->code_product ?></td>
                                <td class="text-center"><?= $spk->qty_product ?></td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row bg-danger mx-0 pb-2 ">
                <div class="col-md-10 ml-2 bg-dark">

                    <div class="card-body ">
                    </div>
                    <div class="table table-responsive">
                        <h5 class="m-0 font-weight-bold text-light mb-2 ml-2">Proses yang sedang berlangsung</h5>
                        <table class="table table-sm  bg-secondary text-light" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="" style="width: 5%;">No</th>
                                    <th class="text-center " style="">Nama Proses</th>
                                    <th class="text-center " style="">Tanggal Proses</th>
                                    <th class="text-center " style="">Tanggal Approve</th>
                                    <th class="text-center " style="">Tanggal SPB</th>
                                    <th class="text-center " style="">Tanggal SPK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php
                                foreach ($detail_proses as $d) : ?>
                                <tr>
                                    <td class="">
                                        <?= $i++; ?>.
                                    </td>
                                    <td class="text-center"><?= $d->nama_proses ?></td>
                                    <td class="text-center"><?= $d->tgl_proses ?></td>
                                    <td class="text-center"><?= $d->submit_date ?></td>
                                    <td class="text-center"><?= $d->order_date ?></td>
                                    <td class="text-center"><?= $d->tgl_spk ?></td>

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
                        class="btn btn-secondary btn-icon-split btn-sm float-right" style="margin-bottom: 5px;"><span
                            class="icon text-white-5">
                            <i class="fas fa-arrow-circle-left"></i></span>
                        <span class="font-weight-bold text">Back</span></a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>