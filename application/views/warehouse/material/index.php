<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DATA Material</h6>
                <a href="<?php echo base_url('Material/create') ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Creat</span></a>
            </div>

            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-sm" id="" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%;">No</th>
                                <th class="">Nama Material</th>
                                <th class="" style="width: 45%;"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php foreach ($material as $mate) : ?>

                            <tr>

                                <td class=""><?= $i++; ?></td>
                                <td class=""><?= $mate->nama_material ?></td>

                                <td class="">

                                    <a onclick="deleteConfirm('<?= base_url('Material/delete/' . $mate->id_material) ?>')"
                                        href="#!" class="btn btn-danger btn-sm btn-icon-split float-right mr-3"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <span class="icon text-white-5">
                                            <i class="fas fa-trash"></i>
                                        </span></a>
                                    <a href="<?= base_url('Material/edit/' . $mate->id_material) ?>">
                                        <button class="btn btn-success btn-sm float-right mr-3"><i
                                                class="fas fa-edit"></i></button>
                                    </a>
                                    <a href="<?php echo base_url('Submaterial/detail_material/' . $mate->id_material) ?>"
                                        class="btn btn-warning btn-sm text-dark btn-icon-split float-right mr-3">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus text-dark"></i>
                                        </span>
                                        <span class="text"> Sub material</span></a>
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