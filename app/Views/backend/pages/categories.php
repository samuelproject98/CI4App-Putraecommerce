<?= $this->extend('backend/index'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title; ?></h1>
                </div>
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
                        <div class="my-3 px-4 d-flex flex-row justify-content-between">
                            <h3 class="card-title">DataTable Kategori</h3>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addCategory">Tambah Kategori</button>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kategori</th>
                                        <th>Kategori Slug</th>
                                        <th>Kategori Icon</th>
                                        <th>Total Produk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $category['category_name']; ?></td>
                                            <td><?= $category['category_slug']; ?></td>
                                            <td><i class="<?= $category['icon']; ?>"></i></td>
                                            <td><?= $category['total_product']; ?></td>
                                            <td>
                                                <button class="btn btn-app bg-secondary edit-category-modal" data-category='{"id":"<?= $category['id']; ?>","category_name":"<?= $category['category_name']; ?>","icon":"<?= $category['icon']; ?>"}' data-toggle="modal" data-target="#updateCategory"><i class="fas fa-edit"></i>Edit</button>
                                                <button class="btn btn-app bg-danger delete-category-modal" data-id="<?= $category['id']; ?>" data-toggle="modal" data-target="#deleteCategory"><i class="fas fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kategori</th>
                                        <th>Kategori Slug</th>
                                        <th>Kategori Icon</th>
                                        <th>Nama Toko</th>
                                        <th>Total Product</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('backend/common/modal-category'); ?>
    </section>
</div>

<?= $this->endSection(); ?>