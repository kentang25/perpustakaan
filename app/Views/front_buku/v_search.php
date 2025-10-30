<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container my-5">

    <!-- Judul Halaman -->
    <div class="text-center mb-5">
        <h2 class="fw-bold mb-3 text-primary">Hasil Pencarian</h2>
        <p class="text-muted">Menampilkan hasil untuk: <strong><?= esc($keyword) ?></strong></p>
    </div>

    <!-- Form Pencarian -->


    <!-- Hasil Pencarian -->
    <?php if (!empty($buku)) : ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php foreach ($buku as $b) : ?>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden buku-card">
                        <div class="position-relative">
                            <img 
                                src="/img/<?= esc($b['gambar']) ?>" 
                                class="card-img-top" 
                                alt="<?= esc($b['judul']) ?>" 
                                style="height: 250px; object-fit: cover;"
                            >
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-dark fw-semibold"><?= esc($b['judul']) ?></h5>
                            <p class="card-text text-muted mb-2">
                                <i class="bi bi-person text-primary me-1"></i> <?= esc($b['pengarang']) ?>
                            </p>
                            <?php if (!empty($b['penerbit'])) : ?>
                                <p class="card-text small text-muted mb-0">
                                    <i class="bi bi-building text-secondary me-1"></i> <?= esc($b['penerbit']) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="card-footer bg-white border-0 text-center pb-3">
                            <a href="/dungeons/detail-book/<?= esc($b['id']) ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                <i class="bi bi-book"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <div class="text-center mt-5">
            <img src="/img/empty-search.svg" alt="No results" width="180" class="mb-3 opacity-75">
            <p class="text-muted fs-5">📚 Buku yang Anda cari tidak ditemukan.</p>
            <a href="/" class="btn btn-outline-primary rounded-pill px-4 mt-2">
                <i class="bi bi-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    <?php endif; ?>

</div>

<!-- Tambahan CSS agar lebih elegan -->
<style>
    .buku-card {
        transition: all 0.3s ease-in-out;
    }

    .buku-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .buku-card img {
        transition: transform 0.4s ease;
    }

    .buku-card:hover img {
        transform: scale(1.05);
    }
</style>

<?= $this->endSection() ?>
