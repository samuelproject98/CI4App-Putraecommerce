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
                                        <div class="active tab-pane" id="cart">
                                            <div class="timeline timeline-inverse">
                                                <div class="time-label">
                                                    <span class="bg-danger">
                                                        10 Feb. 2014
                                                    </span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-envelope bg-primary"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                        <div class="timeline-body">
                                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                            quora plaxo ideeli hulu weebly balihoo...
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <i class="fas fa-user bg-info"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div>
                                                    <i class="fas fa-comments bg-warning"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                                        <div class="timeline-body">
                                                            Take me to your leader!
                                                            Switzerland is small and neutral!
                                                            We are more like Germany, ambitious and misunderstood!
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="time-label">
                                                    <span class="bg-success">
                                                        3 Jan. 2014
                                                    </span>
                                                </div>
                                                <div>
                                                    <i class="fas fa-camera bg-purple"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                                        <div class="timeline-body">
                                                            <img src="https://placehold.it/150x100" alt="...">
                                                            <img src="https://placehold.it/150x100" alt="...">
                                                            <img src="https://placehold.it/150x100" alt="...">
                                                            <img src="https://placehold.it/150x100" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <i class="far fa-clock bg-gray"></i>
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