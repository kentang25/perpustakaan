<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold"><?= esc($title ?? 'Daftar Buku per Kategori') ?></h1>
        <p class="text-muted">Kumpulan buku berdasarkan kategori</p>
    </div>

    <?php foreach($kategori as $namaKategori => $judulBuku) : ?>
    <div class="card shadow-sm border-0 mb-4 rounded-3">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="bi bi-bookmark me-2"></i><?= esc($namaKategori) ?>
            </h5>
            <span class="badge bg-light text-primary">
                <?= count($judulBuku) ?> Buku
            </span>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <?php foreach($judulBuku as $judul) : ?>
                <li class="list-group-item"><img src="/img/<?= esc($judul['gambar']) ?>" alt="<?= esc($judul['judul']) ?>"
                        class="img-fluid rounded-4 shadow-sm" style="max-height: 300px; object-fit: cover;"></li>
                <li class="list-group-item">
                    <i class="bi bi-book me-2 text-primary"></i><?= esc($judul['judul']) ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>