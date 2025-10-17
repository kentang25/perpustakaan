<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <h1 class="mt-4 mb-4"><?= $title; ?></h1>

        <div class="card">
            <div class="card-body">
                
                <div class="row">
                    <?php foreach($buku as $b) : ?>
                    <div class="col-md-2">
                        <img src="/img/<?= esc($b['gambar']) ?>" alt="<?= esc($b['judul']) ?>"
                            class="img-fluid rounded shadow-sm mb-3"
                            style="max-width: 150px; max-height: 150px; object-fit: cover;">
                    </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>