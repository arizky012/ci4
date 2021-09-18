<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<section class="relative-position">
    <div class="container  position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center shadow py-3">
                <h1>Create Account</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 shadow py-3">
                <form action="/register/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="InputForName" value="<?= set_value('name') ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="InputForEmail" value="<?= set_value('email') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="InputForPassword">
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control  <?= ($validation->hasError('confpassword')) ? 'is-invalid' : ''; ?>" id="InputForConfPassword">
                        <div class="invalid-feedback">
                            <?= $validation->getError('confpassword'); ?>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="picture">Picture</label>
                        <input type="file" class="form-control <?= ($validation->hasError('picture')) ? 'is-invalid' : ''; ?>" id="picture" name="picture">
                        <div class="invalid-feedback">
                            <?= $validation->getError('picture'); ?>
                        </div>
                    </div>
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-primary ">Register</button>
                    </div>
                </form>
                <hr>
                <p>Already Have ? <a href="/login">Click here </a></p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>