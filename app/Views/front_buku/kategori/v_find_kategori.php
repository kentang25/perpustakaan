<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold"><?= esc($title) ?></h1>
        <a href="/dungeons/category" class="btn btn-outline-primary">← Kembali</a>
    </div>

    <div class="row g-3">
        <?php foreach($buku as $b) : ?>
        <div class="col-6 col-md-3 col-lg-2 text-center">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="book-card">
                    <a href="/dungeons/detail-book/ <?= $b['id'] ?>" style="text-decoration: none;">
                <img src="/img/<?= esc($b['gambar']) ?>" class="card-img-top rounded-4" alt="<?= esc($b['judul']) ?>"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body p-2">
                    <small class="fw-semibold"><?= esc($b['judul']) ?></small>
                </div>
                </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>