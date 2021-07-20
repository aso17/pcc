<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-light">
                <h6 class="m-0 font-weight-bold text-dark">Data User</h6>
                <a href="<?php echo base_url('Users/create') ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus text-success"></i>
                    </span>
                    <span class="text">Creat User</span></a>
            </div>

            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-sm" id="" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="">Nik</th>
                                <th class="">username</th>
                                <th class="">Nama Lengkap</th>
                                <th class="">Departemen</th>
                                <th class="">Devisi</th>
                                <th class="text-center" style="width: 15%;">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  ?>
                            <?php foreach ($users as $use) : ?>
                            <tr>
                                <td class=""></td>
                                <td class=""><?= $use->nikKaryawan ?></td>
                                <td class=""><?= $use->username ?></td>
                                <td class=""><?= $use->namaLengkap ?></td>
                                <td class=""><?= $use->departemen ?></td>
                                <td class=""><?= $use->devisi ?></td>
                                <td class="">
                                    <a onclick="deleteConfirm('<?= base_url('User/delete/') ?>" href="#!"
                                        class="btn btn-success btn-sm btn-icon-split float-right  mr-1"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <span class="icon text-white-5">
                                            <i class="fas fa-trash text-light"></i>
                                        </span></a>
                                    <a href="<?= base_url('User/edit/') ?>">
                                        <button class="btn btn-success btn-sm float-right mr-2 "><i
                                                class="fas fa-edit text-light"></i></button>
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