<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<section class="relative-position">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-xl-6 shadow py-3 text-center">
                <h1>Login</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 shadow py-3">
                <form class="" action="/login/auth" method="POST">
                    <div class="mb-3">
                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-warning text-center" role="alert">
                                <?= session()->getFlashdata('msg'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" autofocus name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <p><a href="/forget">Forget password ?</a></p>
                        <p>Create Account <a href="/register">Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>