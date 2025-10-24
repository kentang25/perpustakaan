<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold"><?= esc($title ?? 'Daftar Buku per Kategori') ?></h1>
        <p class="text-muted">Kumpulan buku berdasarkan kategori</p>
    </div>

    <?php foreach ($kategori as $namaKategori => $judulBuku) : ?>
        <div class="card shadow-sm border-0 mb-4 rounded-3">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="bi bi-bookmark me-2"></i><?= esc($namaKategori) ?> <a href="#" id="find_more" title="Find More" class="text-dark">Find More</a>
                </h5>
                <span class="badge bg-light text-primary">
                    <?= count($judulBuku) ?> Buku
                </span>
            </div>
            <div class="card-body">
                <!-- GANTI list-group-flush ke flexbox -->
                <ul class="d-flex flex-wrap gap-3 list-unstyled mb-0">
                    <?php foreach ($judulBuku as $judul) : ?>
                        <div class="book-card">
                            <li class="border rounded-3 p-2 text-center" style="width: 150px;">
                            <a href="/dungeons/detail-book/ <?= $judul['id'] ?>" style="text-decoration: none;">
                            <img src="/img/<?= esc($judul['gambar']) ?>" 
                                alt="<?= esc($judul['judul']) ?>" 
                                class="img-fluid rounded-4 shadow-sm mb-2" 
                                style="height: 150px; object-fit: cover;">
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
