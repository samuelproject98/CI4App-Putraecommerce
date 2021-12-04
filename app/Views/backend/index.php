<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $meta_title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte'); ?>/plugins/fontawesome-free/css/all.min.css">

    <?php if ($pages_slug == 'dashboard') : ?>
        <?= $this->include('backend/pages/plugins/head/' . $pages_slug); ?>
    <?php elseif ($pages_slug == 'users' || $pages_slug == 'categories') : ?>
        <?= $this->include('backend/pages/plugins/head/' . $pages_slug); ?>
    <?php endif; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <?php //$this->include('backend/common/preloader'); 
        ?>

        <!-- Navbar -->
        <?= $this->include('backend/common/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('backend/common/main-sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content'); ?>

        <!-- /.content-wrapper -->
        <?= $this->include('backend/common/footer'); ?>

        <!-- Control Sidebar -->
        <?= $this->include('backend/common/control-sidebar'); ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php if ($pages_slug == 'dashboard') : ?>
        <?= $this->include('backend/pages/plugins/foot/' . $pages_slug); ?>
    <?php elseif ($pages_slug == 'users' || $pages_slug == 'categories') :  ?>

        <?= $this->include('backend/pages/plugins/foot/' . $pages_slug); ?>

        <script src="<?= base_url('assets/adminlte'); ?>/js/custom/modal-category.js"></script>

        <?php if ($validation) : ?>
            <?php if (old('categories')) : ?>
                <script type='text/javascript'>
                    $(document).ready(function() {
                        $('#addCategory').modal('show');
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
    <?php endif; ?>
</body>

</html>