<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PCC</title>


    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('assets/datatables/dataTables.min.js') ?>" rel="stylesheet" type="text/css">

    <!-- toastr template-->
    <link href="<?php echo base_url('assets/toastr/toastr.min.css') ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar font-weight-bold sidebar-dark accordion"
            id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-desktop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pcc controlling</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php if ($this->session->userdata('devisi') == 'planing') { ?>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Planing
            </div>
            <!-- Nav Item - Pages Collapse Menu -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-server"></i>
                    <span>Planing</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu:</h6>

                        <a class="collapse-item" href="<?php echo base_url('Planing') ?>">Spk</a>

                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php } elseif ($this->session->userdata('devisi') == 'IT sport') { ?>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Planing
            </div>
            <!-- Nav Item - Pages Collapse Menu -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-server"></i>
                    <span>Planing</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu:</h6>

                        <a class="collapse-item" href="<?php echo base_url('Planing') ?>">Spk</a>

                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php } ?>

            <?php if ($this->session->userdata('devisi') == 'workshop') { ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                Workshop
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>SPB</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu:</h6>
                        <a class="collapse-item" href="<?php echo base_url('Spb') ?>">Spb</a>
                        <a class="collapse-item" href="<?php echo base_url('Spb/daftar') ?>">Daftar Spb</a>
                        <a class="collapse-item" href="<?php echo base_url('Planing/proses') ?>">Peoses Spb</a>

                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <?php } elseif ($this->session->userdata('devisi') == 'IT sport') { ?>
            <div class="sidebar-heading">
                Workshop
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>SPB</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu:</h6>
                        <a class="collapse-item" href="<?php echo base_url('Spb') ?>">Spb</a>
                        <a class="collapse-item" href="<?php echo base_url('Spb/daftar') ?>">Daftar Spb</a>
                        <a class="collapse-item" href="<?php echo base_url('Planing/proses') ?>">Peoses Spb</a>

                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <?php } ?>
            <!-- Heading -->
            <?php if ($this->session->userdata('devisi') == 'development') { ?>
            <div class="sidebar-heading">
                Warehouse
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Warehouse/daftarSpb') ?>">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Approve</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Material') ?>">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Material</span></a>
            </li>
            <!-- workshop material -->
            <?php } elseif ($this->session->userdata('devisi') == 'workshop') { ?>
            <div class="sidebar-heading">
                Warehouse
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Material') ?>">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Material</span></a>
            </li>
            <?php } elseif ($this->session->userdata('devisi') == 'IT sport') { ?>
            <!-- Administrator -->
            <div class="sidebar-heading">
                Warehouse
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Warehouse/daftarSpb') ?>">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Approve</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Material') ?>">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Material</span></a>
            </li>
            <?php } ?>
            <?php if ($this->session->userdata('devisi') == 'IT sport') { ?>


            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Users') ?>">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>User</span></a>
            </li>

            <?php } ?>
            <?php if ($this->session->userdata('devisi') == 'planing') { ?>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>
            <!-- Nav Item - Pages Collapse Menu Laporan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-file-alt"></i>
                    <span>Laporan Periode</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">Menu:</h6>
                        <a class="collapse-item" href="<?php echo base_url('ReportPlaning') ?>">Laporan Planing</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <?php } elseif ($this->session->userdata('devisi') == 'IT sport') { ?>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>
            <!-- Nav Item - Pages Collapse Menu Laporan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-file-alt"></i>
                    <span>Laporan Periode</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu:</h6>
                        <a class="collapse-item" href="<?php echo base_url('ReportPlaning') ?>">Laporan Planing</a>

                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <?php } ?>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-success text-light topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <div class="input-group-append">
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="btn btn-sm btn-danger dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <span
                                    class="font-weight-bold d-none d-lg-inline text-light large"><?= $this->session->userdata('nama') ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <?php //foreach ($user as $us) : 
                                ?>

                                <?php //endforeach; 
                                ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<? base_url('Login/logout') ?>"
                                    data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?= $contents ?>

                </div>


            </div>
            <!-- End of Content Wrapper -->

            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
            <!-- Footer -->
            <!-- <footer class="fixed-footer bg-white mt-4">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;A_so17</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal">
                <div class="modal-dialog">
                    <div class="modal-content bg-success text-danger">
                        <div class="modal-header">
                            <h4 class="modal-title text-danger" id="exampleModalLabel">Yakin Ingin Keluar?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-light">Silahkan Klik "Logout" Untuk Mengakhiri&hellip;</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-outline-light" href="<?php echo site_url('Login/logout') ?>">Logout</a>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <!-- Delete Modal-->
            <div class="modal fade" id="deleteModal">
                <div class="modal-dialog">
                    <div class="modal-content bg-danger">
                        <div class="modal-header">
                            <h4 class="modal-title text-light" id="exampleModalLabel">Yakin Ingin Hapus?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-light">Data yang dihapus tidak dapat dikembalikan&hellip;</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Jangan</button>
                            <a class="btn btn-outline-light" id="btn-delete" href="#">Hapus</a>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <!-- Bootstrap core JavaScript-->

            <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
            <script src="<?php echo base_url('assets/datatables/dataTables.min.js') ?>"></script>

            <!-- toastr -->
            <script src="<?php echo base_url('assets/toastr/toastr.min.js') ?>"></script>

            <script type="text/javascript">
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            </script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url('assets/js/demo/datatables-demo.js') ?>"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

            <script type="text/javascript">
            $(document).ready(function() {
                $('#tabel').DataTable({
                    "bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": true,
                    "bAutowidth": true

                });
            });

            function deleteConfirm(url) {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
            $(function() {
                $("#label").DataTable();
                $('#label2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": false,
                    "info": true,
                    "autoWidth": false,
                });
            });

            <?php if ($this->session->flashdata('success')) { ?>
            toastr.success("<?php echo $this->session->flashdata('success'); ?>");
            <?php } else if ($this->session->flashdata('error')) { ?>
            toastr.error("<?php echo $this->session->flashdata('error'); ?>");
            <?php } else if ($this->session->flashdata('warning')) { ?>
            toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
            <?php } else if ($this->session->flashdata('info')) { ?>
            toastr.info("<?php echo $this->session->flashdata('info'); ?>");
            <?php } ?>
            </script>

</body>

</html>