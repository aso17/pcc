<!-- Main content -->
<style>
h7 {
    padding: 0;
    text-align: center;

}

h6 {

    font-family: sans-serif;
    text-align: center;
    margin-bottom: 2%;
}

p {
    font-family: sans-serif;
    text-align: center;
    margin: 0;
}

.absolute1 {
    position: absolute;
    width: 300px;
    top: 0;
    bottom: 0;
    background-color: #ff0;
}

.absolute2 {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 300px;
    right: 200px;
    background-color: #3c3c3c;
}

.table {
    justify-content: end;
}

.row {
    justify-content: end;

}

.card {
    justify-items: left;
}
</style>

<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class=" card-header">
                <h7 class="m-0 font-weight-bold text-dark text-center mt-1">PT. ADIS DIMENSION
                    FOOWEAR</h7>
                <h6 class="m-0  text-dark text-center ">DATA PLANING</h6>
                <p class="m-0  text-dark text-center ">Tanggal</p>
                <p class="m-0  text-dark text-center "><?= $tgl_awal ?></p>
                <p class="m-0  text-dark text-center ">s/d</p>
                <p class="m-0  text-dark text-center "><?= $tgl_ahir ?></p>
                <p class="m-0  text-dark text-right ">Tanggal cetak : <?= date('d/m/y') ?></p>


                <a href="<?= ('cetak/') . $tgl_awal . "/" . $tgl_ahir ?>" class="btn btn-dark btn-icon-split btn-sm"
                    target="_BLANK">
                    <span class="icon text-white-10"><i class="fa fa-file-pdf text-light"></i>
                    </span>
                    <span class="font-weight-bold text">PDF</span></a>


            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-sm" id="tabel_" cellspacing="0" border="1">
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

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($spk as $sp) : ?>
                            <tr>
                                <td class="text-center"><?= $i++ ?>.</td>
                                <td class="text-center"><?= $sp->bom_id ?></td>
                                <td class="text-center"><?= $sp->kategori ?></td>
                                <td class="text-center"><?= $sp->type_sample ?></td>
                                <td class="text-center"><?= $sp->model_name ?></td>
                                <td class="text-center"><?= $sp->size ?></td>
                                <td class="text-center"><?= $sp->tgl_spk ?></td>
                                <td class="text-center"><?= $sp->status ?></td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>