<?= $this->extend('layout_admin/template_admin'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0"><?= esc($title) ?></h4>
        </div>

        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="<?= base_url('admin_perpus/update/' . $edit['id']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="gambarLama" value="<?= esc($edit['gambar']); ?>">

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="judul" 
                                name="judul" 
                                value="<?= old('judul', $edit['judul']); ?>" 
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="pengarang" class="form-label">Pengarang</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="pengarang" 
                                name="pengarang" 
                                value="<?= old('pengarang', $edit['pengarang']); ?>" 
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="penerbit" 
                                name="penerbit" 
                                value="<?= old('penerbit', $edit['penerbit']); ?>" 
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <?php foreach($kategori as $k): ?>
                                    <option value="<?= esc($k['id_kategori']) ?>" 
                                        <?= ($k['id_kategori'] == $edit['id_kategori']) ? 'selected' : ''; ?>>
                                        <?= esc($k['kategori']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
