<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <style type="text/css">
    .page1 {
        font-size: 16px;
        line-height: 8px;
    }

    .page2 {
        font-size: 16px;
        line-height: 15px;
    }
    </style>
</head>

<body>


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row justify-content-left">
            <div class="col-md-10">
                <form action="<?= base_url('ReportPlaning/filter') ?>" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h5>laporan Planing</h5>
                        </div>
                        <div class="row ">
                            <div class="col-md-5 ml-2 mt-2">

                                <div class="form-group ">
                                    <label for="tgl_awal">Tanggal</label>
                                    <input type="date"
                                        class="form-control <?php echo form_error('tgl_awal') ? 'is-invalid' : '' ?>"
                                        id="tgl_awal" name="tgl_awal">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tgl_awal'); ?>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-5 ml-2 mt-2">

                                <div class="form-group ">
                                    <label for="tgl_ahir">Sampai dengan Tanggal</label>
                                    <input type="date"
                                        class="form-control <?php echo form_error('tgl_ahir') ? 'is-invalid' : '' ?>"
                                        id="tgl_ahir" name="tgl_ahir">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tgl_ahir'); ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success btn-sm float-right" type="submit">preview</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<link href="<?php echo base_url('assets/chart.js/Chart.js') ?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
<?php
// var_dump($ringan);
// die;

?>
<div>

    <body>
        <div style="width: 800px; margin:0px auto;">
            <canvas id="myChart"></canvas>

        </div>
        <script>
        // var barChartData = {
        //     labels: [
        //         "Pelanggaran Ringan",
        //         "Pelanggaran Sedang",
        //         "Pelanggaran Berat",
        //     ],

        //     datasets: [{
        //             label: "Pelanggaran Karyawan",
        //             backgroundColor: "red",
        //             borderColor: "pink",
        //             borderWidth: 1,
        //             data: [


        //             ]
        //         },
        //         {
        //             label: "Pelanggaran Visitor",
        //             backgroundColor: "blue",
        //             borderColor: "lightblue",
        //             borderWidth: 1,
        //             data: [
        //                
        //             ]
        //         },
        //     ]
        // };

        // var chartOptions = {
        //     responsive: true,
        //     legend: {
        //         position: "top"
        //     },
        //     title: {
        //         display: true,
        //         text: "Grafik Pelanggaran"
        //     },
        //     scales: {
        //         yAxes: [{
        //             ticks: {
        //                 beginAtZero: true
        //             }
        //         }]
        //     }
        // }

        // var ctx = document.getElementById("myChart").getContext("2d");
        // window.myBar = new Chart(ctx, {
        //     type: "bar",
        //     data: barChartData,
        //     options: chartOptions
        // });
        </script>
    </body>
</div>
</div>
</div>

</html>