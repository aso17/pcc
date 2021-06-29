<!-- Main content -->


<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">DATA Material</h6>

            </div>

            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-sm" id="tabel" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%;">No</th>
                                <th class="text-center">Nama Material</th>
                                <th class="text-center">Ukuran</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php foreach ($material as $mate) : ?>

                            <tr>

                                <td class="text-center"><?= $i++; ?>.</td>
                                <td class="text-center"><?= $mate->nama_material ?></td>
                                <td class="text-center"><?= $mate->ukuran ?></td>

                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>