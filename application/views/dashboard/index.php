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
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <h1 class="h4 mb-0 font-weight-bold text-gray-800 text-uppercase mb-1">PT. ADIS DIMENSION FOOWEAR</h1>
        </div>

        <!-- Content Row -->
        <div class="row justify-content-left">

            <!-- Pelanggaran Ringan -->
            <div class="col-xl-4 col-md-5 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 mb-0 font-weight-bold text-grey-800 text-uppercase mb-1">VISI</div>
                                <div class="text-xs font-weight-bold text-primary">
                                    <a class="button" data-toggle="modal" data-target="#modal-ringan">
                                        <span class="font-weight-bold">Descriptions</span></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Ringan -->
            <div class="modal fade" id="modal-ringan" tabindex="-1" data-bs-keyboard="false"
                aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p class="page2">Visi PT. Adis Dimension footwear</p>
                            <p class="page1">1.</p>
                            <p class="page1">1.</p>
                            <p class="page1">1.</p>
                            <p class="page1">1.</p>
                            <p class="page1">1.</p>
                            <p class="page1">1.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Pelanggaran Sedang -->

            <div class="col-xl-4 col-md-5 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 mb-0 font-weight-bold text-grey-800 text-uppercase mb-1">MISI</div>
                                <div class=" text-xs font-weight-bold text-primary">
                                    <a class="button" data-toggle="modal" data-target="#modal-sedang">
                                        <span class="font-weight-bold">Description</span></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sedang -->
            <div class="modal fade" id="modal-sedang" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p class="page2">Visi PT. Adis Dimension footwear</p>
                            <p>1.</p>
                            <p>1.</p>
                            <p>1.</p>
                            <p>1.</p>
                            <p>1.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Pelanggaran Berat -->
            <div class="col-xl-4 col-md-5 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 mb-0 font-weight-bold text-grey-800 text-uppercase mb-1">MOTO</div>
                                <div class=" text-xs font-weight-bold text-primary">
                                    <a class="button" data-toggle="modal" data-target="#modal-berat">
                                        <span class="font-weight-bold">Descrption</span></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Sedang -->
            <div class="modal fade" id="modal-berat" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p class="page2">Moto PT. Adis Dimension footwear</p>
                            <p>1.</p>
                            <p>1.</p>
                            <p>1.</p>
                            <p>1.</p>
                            <p>1.</p>
                            <p>1.</p>

                        </div>

                    </div>
                </div>
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