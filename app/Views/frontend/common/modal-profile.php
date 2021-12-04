<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal px-3">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">No. Telepon</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="upgrade">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upgrade Keanggotaan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/profile" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Merchant</h3>
                        </div>
                        <div class="card-body">
                            <?= form_hidden('user_id', user_id());; ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input name="merchant_fullname" type="text" class="form-control <?= $validation->hasError('merchant_fullname') ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap" value="<?= old('merchant_fullname'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('merchant_fullname'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="merchant_email" type="email" class="form-control <?= $validation->hasError('merchant_email') ? 'is-invalid' : ''; ?>" placeholder="Email" value="<?= old('merchant_email'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('merchant_email'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input <?= $validation->hasError('merchant_gender') ? 'is-invalid' : ''; ?>" type="radio" id="male" name="merchant_gender" value="male" <?= old('merchant_gender') == 'male' ? 'checked=true' : ''; ?>>
                                                    <label for="male" class="custom-control-label">Pria</label>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('merchant_gender'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input <?= $validation->hasError('merchant_gender') ? 'is-invalid' : ''; ?>" type="radio" id="female" name="merchant_gender" value="female" <?= old('merchant_gender') == 'female' ? 'checked=true' : ''; ?>>
                                                    <label for="female" class="custom-control-label">Wanita</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>No. Telepon</label>
                                        <input name="merchant_phone" type="text" class="form-control <?= $validation->hasError('merchant_phone') ? 'is-invalid' : ''; ?>" placeholder="No. Telepon" value="<?= old('merchant_phone'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('merchant_phone'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Data Toko</h3>
                        </div>
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="store_name" class="col-sm-2 col-form-label">Nama Toko</label>
                                <div class="col-sm-10">
                                    <input name="store_name" type="text" class="form-control <?= $validation->hasError('store_name') ? 'is-invalid' : ''; ?>" id="store_name" placeholder="Nama Toko" value="<?= old('store_name'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('store_name'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="store_address" class="col-sm-2 col-form-label">Alamat Toko</label>
                                <div class="col-sm-10">
                                    <textarea name="store_address" class="form-control <?= $validation->hasError('store_address') ? 'is-invalid' : ''; ?>" rows="3" id="store_address" placeholder="Alamat"><?= old('store_address'); ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('store_address'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="store_image" class="col-sm-2 col-form-label">Gambar Toko</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input name="store_image" type="file" class="custom-file-input <?= $validation->hasError('store_image') ? 'is-invalid' : ''; ?>" id=" store_image">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('store_image'); ?>
                                        </div>
                                        <label class="custom-file-label" for="store_image">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ktp_image" class="col-sm-2 col-form-label">KTP</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input name="ktp_image" type="file" class="custom-file-input <?= $validation->hasError('ktp_image') ? 'is-invalid' : ''; ?>" id="ktp_image">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('ktp_image'); ?>
                                        </div>
                                        <label class="custom-file-label" for="ktp_image">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="store_logo" class="col-sm-2 col-form-label">Logo Toko</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input name="store_logo" type="file" class="custom-file-input <?= $validation->hasError('store_logo') ? 'is-invalid' : ''; ?>" id="store_logo">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('store_logo'); ?>
                                        </div>
                                        <label class="custom-file-label" for="store_logo">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button name="upgrade" value="upgrade" type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="tambah-produk">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/produk/add" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Produk</h3>
                        </div>
                        <div class="card-body">
                            <?php if ($profile_status) : ?>
                                <?= form_hidden('merchant_id', $profile_status['id']); ?>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input name="product_name" type="text" class="form-control <?= $validation->hasError('product_name') ? 'is-invalid' : ''; ?>" placeholder="Nama Produk" value="<?= old('product_name'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('product_name'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="category_id" class="custom-select">
                                            <?php foreach ($categories as $category) : ?>
                                                <option value="<?= $category['id']; ?>"><?= $category['category_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('merchant_email'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Harga Produk</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input name="product_price" type="text" class="form-control <?= $validation->hasError('product_price') ? 'is-invalid' : ''; ?>" placeholder="Harga Produk" value="<?= old('product_price'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('product_price'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Product Status</label>
                                        <div class="row">
                                            <div class="col">
                                                <div class="custom-control custom-radio">
                                                    <input name="product_status" class="custom-control-input <?= $validation->hasError('product_status') ? 'is-invalid' : ''; ?>" type="radio" id="published" value="published" <?= old('product_status') == 'published' ? 'checked=true' : ''; ?>>
                                                    <label for="published" class="custom-control-label">Published</label>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('product_status'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-control custom-radio">
                                                    <input name="product_status" class="custom-control-input <?= $validation->hasError('product_status') ? 'is-invalid' : ''; ?>" type="radio" id="hidden" value="hidden" <?= old('product_status') == 'hidden' ? 'checked=true' : ''; ?>>
                                                    <label for="female" class="custom-control-label">Hidden</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="custom-control custom-radio">
                                                    <input name="product_status" class="custom-control-input <?= $validation->hasError('product_status') ? 'is-invalid' : ''; ?>" type="radio" id="out-of-stock" value="out-of-stock" <?= old('product_status') == 'out-of-stock' ? 'checked=true' : ''; ?>>
                                                    <label for="out-of-stock" class="custom-control-label">Out Of Stock</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_description" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                                <div class="col-sm-10">
                                    <textarea name="product_description" class="form-control <?= $validation->hasError('product_description') ? 'is-invalid' : ''; ?>" rows="3" id="product_description" placeholder="Deskripsi Produk"><?= old('product_description'); ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('product_description'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stock" class="col-sm-2 col-form-label">Stok Produk</label>
                                <div class="col-sm-10">
                                    <input name="stock" type="text" class="form-control <?= $validation->hasError('stock') ? 'is-invalid' : ''; ?>" placeholder="Stok Produk" value="<?= old('stock'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('stock'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="product_thumbnail" class="col-sm-2 col-form-label">Gambar Produk</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input name="product_thumbnail" type="file" class="custom-file-input <?= $validation->hasError('product_thumbnail') ? 'is-invalid' : ''; ?>" id="product_thumbnail">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('product_thumbnail'); ?>
                                        </div>
                                        <label class="custom-file-label" for="product_thumbnail">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button name="tambah-produk" type="submit" class="btn btn-primary" value="tambah-produk">Tambah Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>