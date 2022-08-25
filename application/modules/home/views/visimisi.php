<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">Visi dan Misi</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Visi dan Misi</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="<?= base_url('assets/frontend') ?>/img/uncp1.jpeg" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Visi dan Misi</h6>
                    <h1 class="display-6 mb-4"><?= $visimisi->judul ?></h1>
                    <?= $visimisi->isi ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Berita Terkait</h6>
            <h1 class="display-6 mb-4">Universitas Cokroaminoto Palopo</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item border rounded h-100 p-4" data-dot="01">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?= base_url('assets/frontend') ?>/img/uncp1.jpeg" alt="">
                    <a href="<?= base_url('assets/frontend') ?>/img/uncp1.jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>Lolos Sakura Sains Program, 7 Mahasiswa UNCP Berangkat ke Jepang</h6>
                <span>Palopo - Bertempat di Aula E Kampus 1 UNCP Jumat, 29 Juli 2022, Universitas Cokroaminoto Palopo menyelenggarakan pelepasan peserta Sakura…</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="02">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?= base_url('assets/frontend') ?>/img/uncp2.jpeg" alt="">
                    <a href="<?= base_url('assets/frontend') ?>/img/uncp2.jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>104 Mahasiswa UNCP Lolos Kampus Mengajar 4, Siap Bertugas</h6>
                <span>Palopo - Universitas Cokroaminoto Palopo melepas 104 mahasiswa dan 11 dosen pembimbing lapangan, program kampus mengajar angkatan 4. Berlangsung di…</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="03">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?= base_url('assets/frontend') ?>/img/uncp3.jpeg" alt="">
                    <a href="<?= base_url('assets/frontend') ?>/img/uncp3.jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>Rektor UNCP Lepas 160 Peserta Pertukaran Mahasiswa Merdeka Angkatan 2</h6>
                <span>Palopo - Sebanyak 160 mahasiswa Universitas Cokroaminoto Palopo yang lolos program Merdeka Belajar Kampus Merdeka, mengikuti pelepasan mahasiswa peserta pertukaran…</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="04">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="<?= base_url('assets/frontend') ?>/img/uncp4.jpeg" alt="">
                    <a href="<?= base_url('assets/frontend') ?>/img/uncp4.jpeg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UNCP dan Pemda Luwu Timur Jalin Kerjasama Tridharma Perguruan Tinggi</h6>
                <span>Luwu Timur - Universitas Cokroaminoto Palopo menjalin kerjasama dengan Pemerintah Kabupaten Luwu Timur. Kerjasama tersebut berlangsung di Rumah Jabatan Bupati…</span>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->