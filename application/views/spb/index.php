<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Proses SPB</h6>

            </div>


            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-sm" id="tabel" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">BOM ID</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Type Sample</th>
                                <th class="text-center">Model Name</th>
                                <th class="text-center">Size</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($spk as $sp) : ?>
                            <tr>
                                <td class="text-center"><?= $i++ ?></td>
                                <td class="text-center"><?= $sp->bom_id ?></td>
                                <td class="text-center"><?= $sp->kategori ?></td>
                                <td class="text-center"><?= $sp->type_sample ?></td>
                                <td class="text-center"><?= $sp->model_name ?></td>
                                <td class="text-center"><?= $sp->size ?></td>
                                <td class="text-center">
                                    <a onclick="deleteConfirm('<?= base_url('karyawan/delete/') ?>')" href="#!"
                                        class="btn btn-danger btn-sm btn-icon-split float-right mr-2"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <span class="icon text-white-5">
                                            <i class="fas fa-trash"></i>
                                        </span></a>
                                    <a href="http://">
                                        <button class="btn btn-success btn-sm float-right mr-2"><i
                                                class="fas fa-edit"></i></button>
                                    </a>

                                    <a href="<?php echo base_url('Spb/create/') . $sp->id_spk ?>"
                                        class="btn btn-primary btn-sm btn-icon-split float-right mr-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Spb</span></a>
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