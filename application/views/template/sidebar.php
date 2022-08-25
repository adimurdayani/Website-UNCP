<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigasi</li>

                <li>
                    <a href="<?= base_url('dashboard') ?>">
                        <i class="fe-grid"></i>
                        <span> Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Modul Data</li>

                <li>
                    <a href="#profile" data-toggle="collapse">
                        <i data-feather="monitor"></i>
                        <span> Profil </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="profile">
                        <ul class="nav-second-level">

                            <li>
                                <a href="<?= base_url('tentang') ?>">Tentang</a>
                            </li>

                            <li>
                                <a href="<?= base_url('visimisi') ?>">Visi dan Misi</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="<?= base_url('mahasiswa') ?>">
                        <i class="fe-database"></i>
                        <span> Mahasiswa</span>
                    </a>
                </li>

                <li>
                    <a href="#banner" data-toggle="collapse">
                        <i class="fe-clipboard"></i>
                        <span> Dosen</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="banner">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('dosen') ?>">List Data</a>
                            </li>
                            <li>
                                <a href="<?= base_url('dosen/tambah') ?>">Tambah Data</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="<?= base_url('kontak') ?>">
                        <i class="fe-message-square"></i>
                        <span class="badge badge-success badge-pill float-right" id="tot_kontak">0</span>
                        <span> Kontak</span>
                    </a>
                </li>

                <li class="menu-title">Pengaturan</li>

                <?php if ($session->id == 0) : ?>
                    <li>
                        <a href="#konfig">
                            <i class="fe-user"></i>
                            <span> Profil</span>
                        </a>
                    </li>
                <?php endif; ?>

                <li>
                    <a href="#user" data-toggle="collapse">
                        <i class="fe-users"></i>
                        <span> Users Manajemen</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="user">
                        <ul class="nav-second-level">

                            <li>
                                <a href="<?= base_url('user') ?>">Users</a>
                            </li>
                            <li>
                                <a href="<?= base_url('grup') ?>">Grup User</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="<?= base_url('konfigurasi') ?>">
                        <i class="fe-settings"></i>
                        <span> Konfigurasi</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->