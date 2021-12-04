<?= $this->extend('frontend/index'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <?= $this->include('frontend/common/categories'); ?>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <?php if ($products) : ?>
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <div class="col-lg-3">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title">Nama Toko</h3>
                                        </div>
                                        <div class="card-body">
                                            <img src="<?= base_url('assets/images'); ?>/logo.png" class="img-fluid mb-2" alt="">
                                            <p class="card-text">
                                                Deskripsi
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="card-link">Visit</a>
                                            <a href="#" class="card-link">Favorite</a>
                                            <a href="#" class="card-link">Follow</a>
                                        </div>
                                    </div><!-- /.card -->
                                </div>
                            <?php endfor; ?>
                        <?php else : ?>
                            <div class="col-lg-12 text-center">
                                <img src="<?= base_url('assets/images'); ?>/no-product.png" alt="">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>