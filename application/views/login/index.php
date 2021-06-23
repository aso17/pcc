<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href=<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?> rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- toastr template-->
    <link href="<?php echo base_url('assets/toastr/toastr.min.css') ?>" rel="stylesheet" type="text/css">

</head>


<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-grey-900 mb-2">Aplikasi Monitoring</h1>
                                    </div>
                                    <div class="text-center">
                                        <img src="<?= base_url('assets/logo/pcc.jpeg') ?>" alt="Image" height="200px"
                                            width="220px" class="mb-3">
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-grey-900 mb-1">LOG IN</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?= base_url('/dashboard'); ?> ">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username"
                                                placeholder="Masukkan Username" value="<?= set_value('username') ?>"
                                                name="username" autocomplete="off">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                placeholder="Masukkan Password " name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary form-control">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

<!-- toastr -->
<script src="<?php echo base_url('assets/toastr/toastr.min.js') ?>"></script>

<script>
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