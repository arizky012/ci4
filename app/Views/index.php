<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/small-logo.ico" type="image/gif">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        h1,
        h4,
        .navbar-brand {
            font-family: 'Roboto', sans-serif;
        }

        .centered-and-cropped {
            object-fit: cover
        }

        .profpic {
            width: 500px;
            height: 500px;
        }

        @media (min-height:1000px) {
            section {
                margin-top: 15vh;
            }

            .profpic {
                width: 50vw;
                height: 50vw;
            }
        }

        @media (min-width:1200px) {
            .profpic {
                width: 50vh;
                height: 50vh;
            }
        }
    </style>
    <title><?= $tittle ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/img/small-logo.ico" alt=""> <b>Coralis Studio</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link mx-3" href="/">Home</a>
                    <a class="nav-link mx-3" href="">Service</a>
                    <a class="nav-link mx-3" href="">Portofolio</a>
                    <a class="nav-link mx-3" href="">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <section class="bg-dark fixed-bottom">
        <footer class="container">
            <div class="row">
                <div class="col text-center text-light py-3">
                    Created by Muhammad Arizki
                </div>
            </div>
        </footer>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>