<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container my-5">
    <!-- Hero Section -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5 mb-3"><?= esc($title) ?></h1>
        <p class="text-muted fs-5">
            <em>"Where imagination meets knowledge, and every page is a new adventure."</em>
        </p>
        
    </div>

    <!-- Intro Card -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-5 bg-light">
        <div class="card-body">
            <h3 class="fw-semibold mb-3 text-dark">
                <i class="bi bi-book-half me-2 text-primary"></i>Dungeons Library
            </h3>
            <p class="fs-5 text-secondary lh-lg">
                <strong class="text-primary">Dungeons</strong> — a place where books from the unknown
                can open your mind and broaden your horizons about what's happening in this world, whether it's
                about <em>space, yourself, ways of thinking, government, economics, or technology</em>.
                <br><br>
                <mark class="bg-warning-subtle px-2 rounded">Read books, because reading can change the way you think.</mark>
            </p>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
        <div class="card-body">
            <h3 class="fw-semibold mb-3 text-primary">
                <i class="bi bi-rocket-takeoff me-2"></i>Project Gutenberg Mission Statement
            </h3>
            <p class="fs-5 text-secondary lh-lg">
                To encourage the creation and distribution of eBooks, and to inspire creative generations 
                by reading books and always loving new ideas.
                <br><br>
                For those who are not yet interested in reading — <span class="fw-semibold text-dark">come on, start now!</span> 
                Because reading can <span class="text-primary fw-semibold">broaden your horizons</span> 
                and shape a brighter future.
            </p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
