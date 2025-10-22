<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <h1><?= $title ?></h1>

        <?php foreach($kategori as $k) : ?>
            <ul>
                <li><?= $k['kategori'] ?></li>
                <li class="bg-primary"><?= $k['judul'] ?></li>
            </ul>
        <?php endforeach; ?>
    </div>

<?= $this->endSection(); ?>