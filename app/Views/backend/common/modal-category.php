<div class="modal fade" id="addCategory">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal px-3" action="/admin/categories" method="post">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="category_name" class="col-sm-2 col-form-label">Nama Kategori</label>
                        <div class="col-sm-10">
                            <input name="category_name" type="text" class="form-control <?= $validation->hasError('category_name') ? 'is-invalid' : ''; ?>" id="category_name" placeholder="Nama Kategori" value="<?= old('category_name'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('category_name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                        <div class="col-sm-10">
                            <input name="icon" type="text" class="form-control <?= $validation->hasError('icon') ? 'is-invalid' : ''; ?>" id="icon" placeholder="Icon" value="<?= old('icon'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('icon'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="categories" value="categories" class="btn btn-primary">Tambah Kategori</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updateCategory">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formEditCategory" class="form-horizontal px-3" action="" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="PUT">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="category_name" class="col-sm-2 col-form-label">Nama Kategori</label>
                        <div class="col-sm-10">
                            <input name="category_name" type="text" class="form-control <?= $validation->hasError('category_name') ? 'is-invalid' : ''; ?>" id="category_name_edit" placeholder="Nama Kategori" value="<?= old('category_name'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('category_name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                        <div class="col-sm-10">
                            <input name="icon" type="text" class="form-control <?= $validation->hasError('icon') ? 'is-invalid' : ''; ?>" id="icon_edit" placeholder="Icon" value="<?= old('icon'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('icon'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="categories" value="categories" class="btn btn-primary">Simpan Kategori</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteCategory">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formDeleteCategory" class="form-horizontal px-3" action="" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <div class="modal-body">
                    <p>Yakin ingin delete kategori ini?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="categories" value="categories" class="btn btn-primary">Delete Kategori</button>
                </div>
            </form>
        </div>
    </div>
</div>