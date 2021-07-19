<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar SPB Proses</h6>

            </div>


            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-sm" id="tabel" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">BOM ID</th>
                                <th class="text-center">Model Name</th>
                                <th class="text-center">Date Order</th>
                                <th class="text-center">tanggal approve</th>

                                <th class="text-center" style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($spb as $sp) : ?>
                            <tr>
                                <td class="text-center"><?= $i++ ?>.</td>
                                <td class="text-center"><?= $sp->bom_id ?></td>
                                <td class="text-center"><?= $sp->model_name ?></td>
                                <td class="text-center"><?= $sp->order_date ?></td>
                                <td class="text-center"><?= $sp->submit_date ?></td>

                                <td class="text-right">

                                    <a href="<?php echo base_url('Planing/prosesCreate/' . $sp->id_spk) . '/' . $sp->id_spb ?>"
                                        class="btn btn-warning btn-sm text-dark btn-icon-split float-right">
                                        <span class="icon text-dark-50">
                                            <i class="fas fa-indent"></i>
                                        </span>
                                        <span class="text"> Proses Spb </span></a>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>