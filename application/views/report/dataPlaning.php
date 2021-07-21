<!-- Main content -->
<style>

</style>

<div class="row">
    <!-- left column -->
    <div class="col-md">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class=" card-header" style="margin: 0%;">
                <h7 class="m-0 font-weight-bold text-dark text-center mt-1">PT. ADIS DIMENSION
                    FOOWEAR</h7>
                <h5 class="m-0  text-dark text-center " style="text-align: center; margin-top:0%">DATA PLANING</h5>
                <p class="m-0  text-dark text-center " style="text-align: center; margin-top:0px">Tanggal</p>
                <p class="m-0  text-dark text-center " style="text-align: center; margin-top:0px"><?= $tgl_awal ?></p>
                <p class="m-0  text-dark text-center " style="text-align: center; margin-top:0">s/d</p>
                <p class="m-0  text-dark text-center " style="text-align: center; margin-top:0"><?= $tgl_ahir ?></p>
                <p class="   " style="text-align:right; margin-top:0;margin-right:1%;margin:1%">User :
                    <?= $this->session->userdata('username') ?></p>
                <p class="m-0  text-dark text-right " style="text-align:right; margin-top:0">Tanggal cetak :
                    <?= date('d/m/y') ?></p>

            </div>



            <div class="card-body">
                <a href="<?= ('cetak/') . $tgl_awal . "/" . $tgl_ahir ?>" class="btn btn-dark btn-icon-split btn-sm"
                    target="_BLANK">
                    <span class="icon text-white-10"><i class="fa fa-file-pdf text-light"></i>
                    </span>
                    <span class="font-weight-bold text">PDF</span></a>
                <div class="table table-responsive">
                    <table class="table table-sm" id="tabel_" cellspacing="0" style="text-align: center;">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 10px; height: 50px;">No</th>
                                <th class="text-center" style="width: 150px;">BOM ID</th>
                                <th class="text-center" style="width: 150px;">Kategori</th>
                                <th class="text-center" style="width: 150px;">Type Sample</th>
                                <th class="text-center" style="width: 150px;">Model Name</th>
                                <th class="text-center" style="width: 150px;">Size</th>
                                <th class="text-center" style="width: 150px;">Tanggal Spk</th>
                                <th class="text-center" style="width: 150px;">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($spk as $sp) : ?>
                            <tr>
                                <td class="text-center" style="width: 10px; height:auto"><?= $i++ ?>.</td>
                                <td class="text-center" style="width: 150px;"><?= $sp->bom_id ?></td>
                                <td class="text-center" style="width: 150px;"><?= $sp->kategori ?></td>
                                <td class="text-center" style="width: 150px;"><?= $sp->type_sample ?></td>
                                <td class="text-center" style="width: 150px;"><?= $sp->model_name ?></td>
                                <td class="text-center" style="width: 150px;"><?= $sp->size ?></td>
                                <td class="text-center" style="width: 150px;"><?= $sp->tgl_spk ?></td>
                                <td class="text-center" style="width: 150px;"><?= $sp->status ?></td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>