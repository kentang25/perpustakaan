<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">

</head>

<body>
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <!-- Pastikan sudah ada Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <footer class="bg-dark text-white pt-4 pb-3 mt-5">
        <div class="container">
            <div class="row justify-content-between align-items-start gap-4">

                <!-- Kolom Tentang -->
                <div class="col-md-4">
                    <h4 class="mb-3">About Me</h4>
                    <p>
                        We offer a wide variety of the latest and most comprehensive reading materials for all ages.
                        Find new inspiration and knowledge every day with us.
                    </p>
                </div>

                <!-- Kolom Sosial Media -->
                <div class="col-md-4 text-md-end text-center">
                    <h4 class="mb-3">Social Media</h4>
                    <div class="d-flex justify-content-md-end justify-content-center gap-3">
                        <a href="#" class="text-white fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

            </div>

            <hr class="border-light my-4">

            <!-- Bagian bawah footer -->
            <div class="text-center small">
                &copy; <?= date('Y'); ?> Dungeons | All Rights Reserved
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>