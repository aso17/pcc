<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">DATA Subaterial</h6>
                <a href="<?php echo base_url('Submaterial/create/' . $material->id_material) ?>"
                    class="btn btn-success text-dark btn-icon-split ">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Creat</span></a>
            </div>

            <div class="card-body">
                <h5 class="text-dark ">Material <?= $material->nama_material ?></h5>
                <div class="table table-responsive">
                    <table class="table table-sm" id="" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%;">No</th>
                                <th class="" width: 25%;">Nama Submaterial</th>
                                <th class="" style="width: 25%;">Ukuran</th>


                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 1;
                            foreach ($submaterial as $sub) : ?>
                            <tr>
                                <td class=""><?= $i++ ?>.</td>
                                <td class=""><?= $sub->nama_sub ?></td>
                                <td class=""><?= $sub->ukuran . ' ' . $sub->satuan ?></td>
                                <td class="" style="width: 25%;">

                                    <a onclick="deleteConfirm('<?= base_url('Submaterial/delete/' . $sub->id_submaterial . '/' . $sub->id_material) ?>')"
                                        href="#!" class="btn btn-success btn-sm btn-icon-split float-right mr-3"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <span class="icon text-white-5">
                                            <i class="fas fa-trash"></i>
                                        </span></a>
                                    <a href="<?= base_url('Submaterial/edit/' . $sub->id_submaterial) ?>">
                                        <button class="btn btn-success btn-sm float-right mr-3"><i
                                                class="fas fa-edit text-"></i></button>
                                    </a>

                                </td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <a href="<?= base_url('Material') ?>">
                    <button class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-circle-left "></i></span>
                        <span class="font-weight-bold text text-danger">Back</span></button>
                </a>
            </div>
        </div>

    </div>
</div>