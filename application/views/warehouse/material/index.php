<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DATA Material</h6>
                <a href="<?php echo base_url('karyawan/add') ?>" class="btn btn-primary btn-icon-split">
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
                                <th class="text-center">Nama Material</th>
                                <th class="text-center">Ukuran</th>
                                <th class="text-center" style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>

                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center">

                                    <a onclick="deleteConfirm('<?= base_url('karyawan/delete/') ?>')" href="#!"
                                        class="btn btn-danger btn-sm btn-icon-split float-right mr-3"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <span class="icon text-white-5">
                                            <i class="fas fa-trash"></i>
                                        </span></a>
                                    <a href="http://">
                                        <button class="btn btn-success btn-sm float-right mr-3"><i
                                                class="fas fa-edit"></i></button>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>