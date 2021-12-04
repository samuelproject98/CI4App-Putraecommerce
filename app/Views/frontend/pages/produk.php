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
                    <div class="row <?= $products ? '' : 'justify-content-center'; ?>">
                        <?php if ($products) : ?>
                            <?php foreach ($products as $product) : ?>
                                <div class="col-lg-3">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title"><?= $product['product_name']; ?></h3>
                                            <div class="card-tools">
                                                <span class="badge badge-primary">Stock <?= $product['stock']; ?></span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="/detail">
                                                <img src="<?= base_url('assets/images/merchants'); ?>/<?= $product['product_thumbnail']; ?>" class="img-fluid mb-2" alt="">
                                            </a>
                                            <h5>Rp. <?= $product['product_price']; ?></h5>
                                            <p class="card-text">
                                                <?= $product['product_description']; ?>
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="card-link">Toko</a>
                                            <a href="#" class="card-link">Favorite</a>
                                            <a href="#" class="card-link">Add To Cart</a>
                                            <a href="#" class="card-link">Buy</a>
                                        </div>
                                    </div><!-- /.card -->
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <img src="<?= base_url('assets/images'); ?>/no-product.png" class="img-fluid" alt="">
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