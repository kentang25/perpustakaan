<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold"><?= esc($title ?? 'Daftar Buku per Kategori') ?></h1>
        <p class="text-muted">Kumpulan buku berdasarkan kategori</p>
    </div>

    <?php foreach ($kategori as $namaKategori => $judulBuku) : ?>
    <div class="card shadow-sm border-0 mb-4 rounded-3">
        <div
            class="card-header bg-primary text-white d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center rounded-top-3 px-4 py-3 shadow-sm">
            <div class="d-flex align-items-center gap-2 flex-wrap mb-2 mb-sm-0">
                <i class="bi bi-bookmark-fill fs-5"></i>
                <h5 class="mb-0 fw-semibold"><?= esc($namaKategori) ?></h5>
                <a href="/dungeons/category/<?= urlencode($namaKategori) ?>" title="Find More"
                    class="btn btn-sm btn-light text-primary fw-semibold rounded-pill px-3 py-1 shadow-sm hover-scale">
                    <i class="bi bi-arrow-right-circle me-1"></i> Find More
                </a>
            </div>
            <span class="badge bg-light text-primary fs-6 fw-bold shadow-sm">
                <?= count($judulBuku) ?> <span class="fw-normal">Book</span>
            </span>
        </div>

        <div class="card-body">
            <!-- GANTI list-group-flush ke flexbox -->
            <ul class="d-flex flex-wrap gap-3 list-unstyled mb-0">
                <?php foreach ($judulBuku as $judul) : ?>
                <div class="book-card">
                    <li class="border rounded-3 p-2 text-center" style="width: 150px;">
                        <a href="/dungeons/detail-book/ <?= $judul['id'] ?>" style="text-decoration: none;">
                            <img src="/img/<?= esc($judul['gambar']) ?>" alt="<?= esc($judul['judul']) ?>"
                                class="img-fluid rounded-4 shadow-sm mb-2" style="height: 150px; object-fit: cover;">
                            <div class="fw-semibold small">
                                <i class="bi bi-book me-1 text-primary"></i><?= esc($judul['judul']) ?>
                            </div>
                        </a>
                    </li>
                </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>