<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <!-- Judul dan Deskripsi -->
    <div class="text-center mb-5">
        <h1 class="fw-bold mb-3"><?= esc($title); ?></h1>
        <p class="lead text-muted">
            Hello friends, welcome to the <strong>dungeons</strong> — a place where books from the unknown
            can open your mind and broaden your horizons about what's happening in this world, whether it's
            about <em>space, yourself, ways of thinking, government, economics, or technology</em>.
            <mark>Read books, because reading can change the way you think.</mark>
        </p>
    </div>

    <!-- Card Container -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body py-4">
            <div class="row">
                <p>
                    <label class="h4">Newest Releases</label>
                    <a href="#" id="find_more" title="Find More">Find More</a>
                </p>
                <?php foreach ($buku as $b) : ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 d-flex mt-3 flex-column align-items-center">
                    <div class="book-card text-center">
                        <a href="/dungeons/detail-book/<?= $b['id'] ?>">
                            <img src="/img/<?= esc($b['gambar']); ?>" alt="<?= esc($b['judul']); ?>"
                                class="img-fluid rounded-3 shadow-sm mb-3"
                                style="width: 160px; height: 230px; object-fit: cover;">
                            <p class="fw-semibold small text-dark mb-0">
                                <?= esc($b['judul']); ?>
                            </p>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3 justify-content-center mt-5 mb-5">
        <?php foreach($kategori as $k) : ?>
        <div class="col">
            <div class="p-3 bg-gradient text-center rounded-4 shadow-sm kategori-item">
                <a href="#" class="text-dark" style="text-decoration: none;"><?= esc($k['kategori']); ?></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body py-4">
            <div class="row">
                <p>
                    <label class="h4">several books</label>
                    <a href="#" id="find_more" title="Find More">Find More</a>
                </p>
                <?php foreach ($bukuAll as $b) : ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4 d-flex mt-3 flex-column align-items-center">
                    <div class="book-card text-center">
                        <img src="/img/<?= esc($b['gambar']); ?>" alt="<?= esc($b['judul']); ?>"
                            class="img-fluid rounded-3 shadow-sm mb-3"
                            style="width: 160px; height: 230px; object-fit: cover;">
                        <p class="fw-semibold small text-dark mb-0">
                            <?= esc($b['judul']); ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- <div class="row gap-3">
        <div class="col-5 bg-primary">
            <h4>Hallo</h4>
        </div>

        <div class="col-5 bg-danger">
            <h4>Hallo 2</h4>
        </div>
    </div> -->

    <div class="container d-flex justify-content-center align-items-start gap-3 mt-5">
    <div class="about bg-primary d-flex rounded-3 justify-content-between align-items-start gap-3 p-3 text-white" style="width: 50%;">
        <div class="group-about flex-fill">
            <h2>Dungeons</h2>
            <p><b>100% Free</b> - No fees, no registration, completely free</p>
            <p><b>No Apps Required</b> - only regular Web browsers or eBook readers needed</p>
        </div>
    </div>

    <div class="about-2 bg-primary d-flex rounded-3 justify-content-between align-items-start gap-3 p-3 text-white" style="width: 50%;">
        <div class="group-about flex-fill">
            <h2>Find Free eBooks</h2>
            
                <p><b>Main Categories</b> - The ones you'd find in any large bookstore.</p>
                <!-- <p><b>Reading Lists.</b> Hand-curated by volunteers.</p> -->
                <p><b>Search Options</b> - By author, title, subject, language, type, popularity, and more.</p>
        </div>
    </div>
</div>



</div>

<?= $this->endSection(); ?>