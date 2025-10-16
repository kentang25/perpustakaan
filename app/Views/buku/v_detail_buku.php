<?= $this->extend('layout_admin/template_admin'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">Detail Buku</h4>
        </div>

        <div class="card-body">
            <div class="row align-items-center">
                <!-- Gambar Buku -->
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="/img/<?= esc($detail['gambar']) ?>" alt="<?= esc($detail['judul']) ?>"
                        class="img-fluid rounded shadow-sm"
                        style="max-width: 250px; max-height: 250px; object-fit: cover;">
                </div>

                <!-- Detail Buku -->
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped">
                            <tr>
                                <th style="width: 30%;">Judul</th>
                                <td style="width: 5%;">:</td>
                                <td><?= esc($detail['judul']) ?></td>
                            </tr>
                            <tr>
                                <th>Pengarang</th>
                                <td>:</td>
                                <td><?= esc($detail['pengarang']) ?></td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td>:</td>
                                <td><?= esc($detail['penerbit']) ?></td>
                            </tr>
                            <tr>
                                <th>Ebook</th>
                                <td>:</td>
                                <td>
                                    <?php if (!empty($detail['file_ebook'])): ?>
                                    <a href="<?= base_url('public/ebook/' . esc($detail['file_ebook'])) ?>" target="_blank">
                                        Read eBook
                                    </a>
                                    <?php else: ?>
                                    <span class="text-muted">Tidak ada file eBook</span>
                                    <?php endif; ?>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="mt-4">
                        <a href="<?= base_url('/admin_perpus'); ?>" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                        <a href="<?= base_url('/admin_perpus/edit/' . $detail['id']); ?>"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>