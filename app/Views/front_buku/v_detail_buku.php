<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold"><?= esc($title) ?></h1>
        <hr class="w-25 mx-auto border-primary">
    </div>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        <div class="card-body p-4">
            <div class="row g-4 align-items-center">
                <!-- Gambar Buku -->
                <div class="col-12 col-md-4 text-center">
                    <img src="/img/<?= esc($detail['gambar']) ?>" 
                         alt="<?= esc($detail['judul']) ?>" 
                         class="img-fluid rounded-4 shadow-sm"
                         style="max-height: 400px; object-fit: cover;">
                </div>

                <!-- Detail Buku -->
                <div class="col-12 col-md-8">
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle">
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-secondary" style="width: 30%;">Judul</th>
                                    <td class="fw-semibold"><?= esc($detail['judul']) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-secondary">Pengarang</th>
                                    <td><?= esc($detail['pengarang']) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-secondary">Kategori</th>
                                    <td><?= esc($detail['id_kategori']) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-secondary">Penerbit</th>
                                    <td><?= esc($detail['penerbit']) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-secondary">eBook</th>
                                    <td>
                                        <a href="<?= base_url('public/ebook/' . esc($detail['file_ebook'])) ?>" 
                                           target="_blank" 
                                           class="btn btn-sm btn-primary rounded-pill shadow-sm px-3">
                                           📘 Read Book
                                        </a>
                                        <a href="#" class="btn btn-sm btn-info rounded-pill shadow-sm px-3"> ➕ Add Book</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tombol Kembali -->
                    <div class="mt-4">
                        <a href="<?= base_url('/dungeons') ?>" 
                           class="btn btn-outline-secondary rounded-pill px-4 shadow-sm">
                            ⬅ Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
