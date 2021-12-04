<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte'); ?>/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <?= $this->include('frontend/common/topbar'); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content'); ?>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?= $this->include('frontend/common/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/adminlte'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/adminlte'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/adminlte'); ?>/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/adminlte'); ?>/js/demo.js"></script>

    <?php if ($validation) : ?>
        <?php if (old('upgrade')) : ?>
            <script type='text/javascript'>
                $(document).ready(function() {
                    $('#upgrade').modal('show');
                });
            </script>
        <?php elseif (old('tambah-produk')) : ?>
            <script type='text/javascript'>
                $(document).ready(function() {
                    $('#tambah-produk').modal('show');
                });
            </script>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <script>
            $(document).Toasts('create', {
                class: 'bg-success',
                title: 'Berhasil!',
                position: 'bottomLeft',
                body: '<?= session()->getFlashdata('success') ?>'
            })
        </script>
    <?php elseif (!empty(session()->getFlashdata('fail'))) : ?>
        <script>
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Gagal!',
                position: 'bottomLeft',
                body: '<?= session()->getFlashdata('fail') ?>'
            })
        </script>
    <?php endif; ?>
</body>

</html>