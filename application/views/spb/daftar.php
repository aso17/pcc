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
                                <th class="text-center">Date Order</th>
                                <th class="text-center">Date Submit</th>
                                <th class="text-center">Qty Request</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($spb as $sp) : ?>
                            <tr>
                                <td class="text-center"><?= $i++ ?>.</td>
                                <td class="text-center"><?= $sp->bom_id ?></td>
                                <td class="text-center"><?= $sp->nama_material ?></td>
                                <td class="text-center"><?= $sp->order_date ?></td>
                                <td class="text-center">
                                    <?php if (empty($sp->submit_date)) { ?>
                                    <span class="badge badge-info">pending</span>
                                    <?php } ?>
                                    <?= $sp->submit_date ?>
                                </td>
                                <td class="text-center"><?= $sp->qty_request ?></td>
                                <td class="text-center">

                                    <a onclick="deleteConfirm('<?= base_url('karyawan/delete/') ?>')" href="#!"
                                        class="btn btn-danger btn-sm btn-icon-split float-right mr-2 "
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <span class="icon text-white-5">
                                            <i class="fas fa-trash"></i>
                                        </span></a>
                                    <a href="http://">
                                        <button class="btn btn-success btn-sm float-right mr-2"><i
                                                class="fas fa-edit"></i></button>
                                    </a>
                                    <a href="<?= base_url('Planing/show/') . $sp->id_spk ?>">
                                        <button class="btn btn-secondary btn-sm float-right mr-2 "><i
                                                class="fas fa-eye"></i></button>
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