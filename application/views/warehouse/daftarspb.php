<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar SPB</h6>

            </div>


            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-sm" id="tabel" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">BOM ID</th>
                                <th class="text-center">Model Name</th>


                                <th class="text-center">Qty Product</th>
                                <th class="text-center">kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1; ?>
                            <?php foreach ($spb as $sp) : ?>
                            <tr>
                                <td class="text-center"><?= $i++ ?>.</td>
                                <td class="text-center"><?= $sp->bom_id ?></td>
                                <td class="text-center"><?= $sp->model_name ?></td>
                                <td class="text-center"><?= $sp->qty_product ?></td>
                                <td class="text-center"><?= $sp->kategori ?></td>
                                <td class="text-center">


                                    <a href="<?= base_url('Warehouse/approve/') . $sp->id_spk ?>">
                                        <button class="btn btn-success btn-sm float-right mr-2"><i
                                                class="fas fa-calendar-alt"></i> Approve</button>
                                    </a>
                                    <a href="<?= base_url('Warehouse/cetak/') . $sp->id_spk ?>">
                                        <button class="btn btn-secondary btn-sm float-right mr-2 "><i
                                                class="fas fa-file-alt"></i> Cetak</button>
                                    </a>
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