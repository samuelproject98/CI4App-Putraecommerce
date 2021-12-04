<?= $this->extend('auth/index'); ?>
<?= $this->section('content'); ?>

<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>Putra</b>E-Commerce</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control <?= session('errors.email') ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.email'); ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control <?= session('errors.username') ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.username'); ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control <?= session('errors.password') ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.password'); ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="pass_confirm" class="form-control <?= session('errors.pass_confirm') ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.pass_confirm'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
            <p class="mt-3 mb-0 text-center">
                <a href="<?= route_to('login') ?>" class="text-center">I already have a membership</a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>

<?= $this->endSection(); ?>