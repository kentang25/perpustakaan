<?= $this->extend('layout_admin/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container my-5">

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">Daftar Buku</h4>
        </div>


        
        <div class="row">
            <div class="col">
                <!-- Button trigger modal -->
                

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Buku</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin_perpus/save" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text"
                                            class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>"
                                            id="judul" name="judul" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('judul') ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pengarang" class="form-label">Pengarang</label>
                                        <input type="text"
                                            class="form-control <?= ($validation->hasError('pengarang')) ? 'is-invalid' : '' ?>"
                                            id="pengarang" name="pengarang" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pengarang') ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerbit" class="form-label">Penerbit</label>
                                        <input type="text"
                                            class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : '' ?>"
                                            id="penerbit" name="penerbit" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('penerbit') ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <select name="kategori" id="kategori" class="form-control">
                                            <?php foreach($kategori as $k): ?>
                                            <option value="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ebook" class="form-label">Ebook</label>
                                        <input type="file"
                                            class="form-control <?= ($validation->hasError('ebook')) ? 'is-invalid' : '' ?>"
                                            id="ebook" name="ebook" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('ebook') ?>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <input type="file"
                                            class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''   ?>"
                                            id="gambar" name="gambar" required>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar') ?>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary mt-3 ml-3" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Tambah Buku
                </button>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover table-bordered">
                        <thead class="table-dark text-center align-middle text-white">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Kategori</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center align-middle">
                            <?php $no = 1; ?>
                            <?php foreach($buku as $b): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $b['judul'] ?></td>
                                <td><?= $b['pengarang'] ?></td>
                                <td><?= $b['kategori'] ?></td>
                                <td>

                                    <?= anchor('/admin_perpus/detail/' . $b['id'], '<div class="btn btn-info btn-sm">Detail</div>') ?>
                                    <?= anchor('/admin_perpus/delete/' . $b['id'], '<div class="btn btn-danger btn-sm">Delete</div>', ['onclick' => "return confirm('Are you sure you want to delete this item?');"]) ?>

                                </td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>


                    </table>
                </div>
                
                </div>
            </div>
        </div>

        <?= $this->endSection(); ?>