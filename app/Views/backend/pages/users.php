<?= $this->extend('backend/index'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Merchant Name</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No. Telepon</th>
                                        <th>Nama Toko</th>
                                        <th>Alamat Toko</th>
                                        <th>Gambar Toko</th>
                                        <th>KTP</th>
                                        <th>Logo Toko</th>
                                        <th>Merchant Status</th>
                                        <th>Verified</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($merchants as $merchant) : ?>
                                        <tr>
                                            <td><?= $merchant['merchant_fullname']; ?></td>
                                            <td><?= $merchant['merchant_email']; ?></td>
                                            <td>
                                                <?php if ($merchant['merchant_gender'] == 'male') : ?>
                                                    <i class="fas fa-mars"></i>
                                                <?php else : ?>
                                                    <i class="fas fa-venus"></i>
                                                <?php endif; ?>
                                            </td>
                                            <td><?= $merchant['merchant_phone']; ?></td>
                                            <td><?= $merchant['store_name']; ?></td>
                                            <td><?= $merchant['store_address']; ?></td>
                                            <td><img src="<?= base_url('assets/images/merchants'); ?>/<?= $merchant['store_image']; ?>" class="img-fluid" alt=""></td>
                                            <td><img src="<?= base_url('assets/images/merchants'); ?>/<?= $merchant['ktp_image']; ?>" class="img-fluid" alt=""></td>
                                            <td><img src="<?= base_url('assets/images/merchants'); ?>/<?= $merchant['store_logo']; ?>" class="img-fluid" alt=""></td>
                                            <td><?= $merchant['merchant_status']; ?></td>
                                            <td><?= $merchant['verified']; ?></td>
                                            <td>
                                                <button class="btn btn-app bg-secondary"><i class="fas fa-edit"></i>Edit</button>
                                                <form action="/admin/users/<?= $merchant['id']; ?>/<?= $merchant['user_id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-app bg-danger"><i class="fas fa-trash"></i>Delete</button>
                                                </form>
                                                <form action="/admin/users/<?= $merchant['id']; ?>/<?= $merchant['user_id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <button type="submit" class="btn btn-app bg-info"><i class="fas fa-edit"></i>Verifikasi</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Merchant Name</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No. Telepon</th>
                                        <th>Nama Toko</th>
                                        <th>Alamat Toko</th>
                                        <th>Gambar Toko</th>
                                        <th>KTP</th>
                                        <th>Logo Toko</th>
                                        <th>Merchant Status</th>
                                        <th>Verified</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>