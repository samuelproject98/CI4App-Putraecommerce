<?= $this->extend('frontend/index'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="content-header">
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/images'); ?>/default-user.png" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= (user()->fullname) ? user()->fullname : user()->username; ?></h3>

                            <p class="text-muted text-center">
                                <?= $level['group_id'] == '2' ? 'Pembeli' : 'Penjual'; ?>
                            </p>

                            <strong><i class="fas fa-book mr-1"></i> E-mail</strong>

                            <p class="text-muted">
                                <?= user()->email; ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Nama Lengkap</strong>

                            <p class="text-muted"><?= user()->fullname ? user()->fullname : 'Edit Profile Untuk Mengganti Nama Anda'; ?></p>

                            <hr>

                            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit"><b>Edit</b></a>
                            <?php if ($profile_status) : ?>
                                <?php if ($profile_status['user_id'] != user_id()) : ?>
                                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#upgrade"><b>Upgrade Keanggotaan</b></button>
                                <?php endif; ?>
                            <?php else : ?>
                                <button class="btn btn-info btn-block" data-toggle="modal" data-target="#upgrade"><b>Upgrade Keanggotaan</b></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Produk</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="#cart" data-toggle="tab">Cart</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane" id="activity">
                                            <?php if ($profile_status) : ?>
                                                <?php if ($profile_status['merchant_status'] == 'active') : ?>
                                                    <div class="row-col-12 mb-2">
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambah-produk">Tambah Produk</button>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div class="row">
                                                <?php if ($products) : ?>
                                                    <?php foreach ($products as $product) : ?>
                                                        <div class="col-lg-3">
                                                            <div class="card card-primary card-outline">
                                                                <div class="card-header">
                                                                    <h3 class="card-title"><?= $product['product_name']; ?></h3>
                                                                    <div class="card-tools">
                                                                        <span class="badge badge-primary"><?= $product['stock']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <img src="<?= base_url('assets/images/merchants'); ?>/<?= $product['product_thumbnail']; ?>" class="img-fluid mb-2" alt="">
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
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <div class="col-lg-12 text-center">
                                                        <img src="<?= base_url('assets/images'); ?>/no-product.png" alt="">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane active" id="cart">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <img src="<?= base_url('assets/images'); ?>/no-product.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->include('frontend/common/modal-profile'); ?>
    </div>
</div>

<?= $this->endSection(); ?>