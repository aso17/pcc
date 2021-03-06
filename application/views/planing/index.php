<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">DATA PLANING</h6>
                <a href="<?php echo base_url('Planing/create') ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Creat</span></a>
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
                                <th class="text-center">Tanggal Spk</th>
                                <th class="text-center">Status</th>
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
                                <td class="text-center"><?= $sp->tgl_spk ?></td>
                                <td class="text-center">
                                    <?php if (!empty($sp->status)) { ?>
                                    <a href="<?= base_url('Planing/detailProses/' . $sp->id_spk)  ?>">
                                        <button type="button" class="btn btn-sm btn-success ">
                                            <span class="badge badge-warning text-dark"><?= $sp->status ?>
                                            </span>
                                            <span class="text-light"><i class="fas fa-eye"></i>
                                            </span>
                                        </button>
                                    </a>
                                    <?php } else { ?>
                                    <button type="button" class="btn btn-sm btn-success text-dark">
                                        <span class="badge badge-warning text-dark">Null</button>
                                    </span>
                                    </button>
                                    <?php } ?>

                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('Planing/show/') . $sp->id_spk ?>">
                                        <button class="btn btn-success btn-sm mx-1 "><i class="fas fa-eye"></i></button>
                                    </a>
                                    <a href="<?= base_url('Planing/edit/' . $sp->id_spk) ?>">
                                        <button class="btn btn-success btn-sm mx-1"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <a onclick="deleteConfirm('<?= base_url('Planing/delete/' . $sp->id_spk) ?>')"
                                        href="#!" class="btn btn-success btn-sm btn-icon-split mx-1"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <span class="icon text-white-5">
                                            <i class="fas fa-trash text-light"></i>
                                        </span></a>
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