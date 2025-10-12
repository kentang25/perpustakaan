<!-- Navbar Perpustakaan -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">📚 PerpustakaanKu</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= (uri_string() == '') ? 'active' : '' ?>" href="<?= base_url('/') ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= (uri_string() == 'buku') ? 'active' : '' ?>" href="<?= base_url('buku') ?>">Daftar Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= (uri_string() == 'anggota') ? 'active' : '' ?>" href="<?= base_url('anggota') ?>">Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= (uri_string() == 'peminjaman') ? 'active' : '' ?>" href="<?= base_url('peminjaman') ?>">Peminjaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= (uri_string() == 'tentang') ? 'active' : '' ?>" href="<?= base_url('tentang') ?>">Tentang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
