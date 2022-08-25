<!-- Brand & Contact Start -->
<div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row align-items-center top-bar">
        <div class="col-lg-4 col-md-12 text-center text-lg-start">
            <a href="" class="navbar-brand m-0 p-0">
                <img src="<?= base_url('assets/backend/') ?>images/uncp.png" alt="Logo" width="90px">
            </a>
        </div>
        <div class="col-lg-8 col-md-7 d-none d-lg-block">
            <div class="row">
                <div class="col-4">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                            <i class="fa fa-print text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-2">Fax</p>
                            <h6 class="mb-0">0471 325 055</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                            <i class="fa fa-phone text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-2">Telpon</p>
                            <h6 class="mb-0">0471 22 111</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                            <i class="far fa-envelope text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-2">Email</p>
                            <h6 class="mb-0">cokroaminotopalopo@uncp.ac.id</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand & Contact End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-auto p-3 p-lg-0">
            <a href="<?= base_url('home') ?>" class="nav-item nav-link <?php if ($title == "Home") : ?> active <?php endif; ?>">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?php if ($title == "Tentang" || $title == "Sejarah" || $title == "Visi dan Misi") : ?> active <?php endif; ?>" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="<?= base_url('home/tentang') ?>" class="dropdown-item <?php if ($title == "Tentang") : ?> active <?php endif; ?>">Tentang</a>
                    <a href="<?= base_url('home/visimisi') ?>" class="dropdown-item <?php if ($title == "Visi dan Misi") : ?> active <?php endif; ?>">Visi dan Misi</a>
                    <a href="<?= base_url('home/sejarah') ?>" class="dropdown-item <?php if ($title == "Sejarah") : ?> active <?php endif; ?>">Sejarah</a>
                </div>
            </div>
            <a href="<?= base_url('home/mahasiswa') ?>" class="nav-item nav-link <?php if ($title == "Mahasiswa") : ?> active <?php endif; ?>">Mahasiswa</a>
            <a href="<?= base_url('home/dosen') ?>" class="nav-item nav-link <?php if ($title == "Dosen") : ?> active <?php endif; ?>">Dosen</a>
            <a href="<?= base_url('home/kontak') ?>" class="nav-item nav-link <?php if ($title == "Kontak") : ?> active <?php endif; ?>">Kontak</a>
        </div>
        <a href="<?= base_url('auth') ?>" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block">Login Admin</a>
    </div>
</nav>
<!-- Navbar End -->