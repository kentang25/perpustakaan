<?= $this->extend('layout_admin/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container">

    <div class="row">
        <div class="col">
            <h1 class="mt-4">Daftar Buku</h1>


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Buku
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin_perpus/save" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pengarang" class="form-label">Pengarang</label>
                                    <input type="text" class="form-control" id="pengarang" name="pengarang" required>
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" id="penerbit" name="penerbit" required>
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
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" required>
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
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-bordered">
                    <thead class="table-dark text-center align-middle text-white">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Kategori</th>
                            <th>Gambar</th>
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
                            <td><?= $b['penerbit'] ?></td>
                            <td><?= $b['kategori'] ?></td>
                            <td><img src="/img/<?= $b['gambar'] ?>" alt="<?= $b['judul'] ?>" class="img-fluid" style="max-width: 100px; max-height: 100px;"></td>
                            <td>
                                <div class="table-group">
                                <?= anchor('/admin_perpus/detail/' . $b['id'], '<div class="btn btn-info btn-sm">Detail</div>') ?>
                                <?= anchor('/admin_perpus/edit/' . $b['id'], '<div class="btn btn-warning btn-sm">Edit</div>') ?>
                                <?= anchor('/admin_perpus/delete/' . $b['id'], '<div class="btn btn-danger btn-sm">Delete</div>', ['onclick' => "return confirm('Are you sure you want to delete this item?');"]) ?>
                                </div>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>


                </table>
            </div>
        </div>

        <?= $this->endSection(); ?>