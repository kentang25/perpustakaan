<!-- Navbar Perpustakaan -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-3">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Brand kiri -->
        <a class="navbar-brand fw-bold fs-5" href="<?= base_url('/') ?>">
            📚 <span class="text-light">Dungeons</span>
        </a>

        <!-- Toggler mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Isi navbar -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

            <!-- Form Search di Tengah -->
            <form class="d-flex mx-auto position-relative" role="search" action="<?= base_url('buku/cari') ?>"
                method="get" style="max-width: 420px; width: 100%;">
                <input class="form-control rounded-pill ps-4 pe-5 shadow-sm border-0" type="search" name="keyword"
                    placeholder="🔍  Search for title or author..." aria-label="Search" required style="height: 45px;">
                <button class="btn position-absolute end-0 me-2 text-primary" type="submit"
                    style="background: white; border-radius: 50%; width: 35px; height: 35px; top: 50%; transform: translateY(-50%);">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <!-- Menu kanan -->
            <ul class="navbar-nav ms-auto align-items-center elegant-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link text-light <?= (uri_string() == '') ? 'active fw-semibold' : '' ?>"
                        href="<?= base_url('/dungeons') ?>">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-light <?= (uri_string() == 'category') ? 'active fw-semibold' : '' ?>"
                        href="<?= base_url('/dungeons/category/') ?>">List Book</a>
                </li>
                
                <li class="nav-item mx-2">
                    <a class="nav-link text-light <?= (uri_string() == 'about') ? 'active fw-semibold' : '' ?>"
                        href="<?= base_url('dungeons/about/') ?>">About</a>
                </li>
            </ul>

        </div>
    </div>
</nav>