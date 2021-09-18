<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<section class="main">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-6 text-center my-5">
                <img src="/img/<?= $this->data['user_picture'] ?>" alt="" class="rounded-circle shadow centered-and-cropped profpic">
            </div>
            <div class="col-xl-auto my-auto">
                <div class="row justify-content-center">
                    <div class="col">
                        <h1> Welcome back </h1>
                        <h1><b><?= $this->data['user_name'] ?></b></h1>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col my-3">
                        <h4>Your email is</h4>
                        <h4><b> <?= $this->data['user_email'] ?></b></h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <a href="/logout" class="btn btn-danger"> Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?= $this->endSection(); ?>