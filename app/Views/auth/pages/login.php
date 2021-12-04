<?= $this->extend('auth/index'); ?>
<?= $this->section('content'); ?>

<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>Putra</b>E-Commerce</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?= route_to('login') ?>" method="post">
                <?= csrf_field() ?>
                <?php if ($config->validFields === ['email']) : ?>
                    <div class="form-group">
                        <input type="email" name="login" class="form-control <?= session('errors.login') ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.email') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="form-group">
                        <input type="text" name="login" class="form-control <?= session('errors.login') ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <input type="password" name="password" class="form-control <?= session('errors.password') ? 'is-invalid' : ''; ?>" placeholder="<?= lang('Auth.password') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>
                <div class="row">
                    <?php if ($config->allowRemembering) : ?>
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    <?php else : ?>
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    <?php endif; ?>
                </div>
            </form>
            <?php if ($config->allowRegistration) : ?>
                <p class="mt-3 mb-0 text-center">
                    <a href="<?= route_to('register') ?>" class="text-center">Register</a>
                </p>
            <?php endif; ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<?= $this->endSection(); ?>