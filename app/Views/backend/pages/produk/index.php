<?= $this->extend('backend/index'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Top Navigation</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <div class="col-lg-3">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Nama Barang</h3>
                                <div class="card-tools">
                                    <span class="badge badge-primary">Stock Barang</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <img src="<?= base_url('assets/images'); ?>/jamtangan.jpg" class="img-fluid mb-2" alt="">
                                <h5>Harga</h5>
                                <p class="card-text">
                                    Deskripsi
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
                <?php endfor; ?>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>