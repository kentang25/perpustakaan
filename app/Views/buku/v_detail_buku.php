<?= $this->extend('layout_admin/template_admin'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h5>Detail Buku</h5>
                <img src="/img/<?= $buku['gambar'] ?>" alt="<?= $buku['judul'] ?>" class="img-fluid" style="max-width: 300px; max-height: 300px;">
            </div>
            <div class="col-8">
                <table class="table">
                    <tr>
                        <th>judul</th>
                        <td>:</td>
                        <td><?= $buku['judul'] ?></td>
                    </tr>
                    <tr>
                        <th>Pengarang</th>
                        <td>:</td>
                        <td><?= $buku['pengarang'] ?></td>
                    </tr>
                    <tr>
                        <th>Penerbit</th>
                        <td>:</td>
                        <td><?= $buku['penerbit'] ?></td>
                    </tr>
                </table>
        </div>
    </div>

<?= $this->endSection(); ?>