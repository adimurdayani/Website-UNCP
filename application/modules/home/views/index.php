<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-users fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Pengunjung</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up"><?= $total_pengunjung ?></h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-check fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Pengujung Online</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up"><?= $pengunjung_online ?></h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-user fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Pengujung hari ini</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up"><?= $pengunjung_hariini ?></h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-users fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Mahasiswa</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up"><?= $total_mahasiswa ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-thumbnail" src="<?= base_url('assets/backend') ?>/images/uncp.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang</h6>
                    <h1 class="display-6 mb-4">Inti pengertian logo:</h1>
                    <ul>
                        <li>Segilima menunjukkan azas negara Pancasila;</li>
                        <li>Warna dasar kuning melambangkan keluhuran budi;</li>
                        <li>Warna dasar hijau melambangkan kesuburan wilayah dan kemakmuran;</li>
                        <li>Payung Luwu menunjukkan identitas lokasi serta simbol kekuasaan dan pengayoman;</li>
                        <li>Bulan sabit melambangkan penerapan sendi-sendi kehidupan islami;</li>
                        <li>Bintang melambangkan kebersamaan dalam mewujudkan cita-cita luhur;</li>
                    </ul>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= base_url('tentang') ?>">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Website</h6>
            <h1 class="display-6 mb-4">Universitas Cokroaminoto Palopo</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="http://uncp.ac.id/" target="_blank">
                    <img class="img-fluid rounded mb-4" src="<?= base_url('assets/frontend') ?>/img/simuncp.png" alt="">
                    <h4 class="mb-0">Sistem Informasi Manajemen Universitas Cokroaminoto Palopo</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="https://www.kopertis9.or.id/" target="_blank">
                    <img class="img-fluid rounded mb-4" src="<?= base_url('assets/frontend') ?>/img/pusatinformasi.png" alt="">
                    <h4 class="mb-0">Website Resmi KOPERTIS Wilayah IX</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="http://simlitabmas.ristekdikti.go.id/" target="_blank">
                    <img class="img-fluid rounded mb-4" src="<?= base_url('assets/frontend') ?>/img/simlitabmas.png" alt="">
                    <h4 class="mb-0">Sistem Informasi Manajemen Penelitian dan Pengabdian Kepada Masyarakat</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="http://www.ristekdikti.go.id/" target="_blank">
                    <img class="img-fluid rounded mb-4" src="<?= base_url('assets/frontend') ?>/img/ristek.png" alt="">
                    <h4 class="mb-0">Website Resmi Kementrian Riset dan Teknologi</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="http://www.webmail.uncp.ac.id/" target="_blank">
                    <img class="img-fluid rounded mb-4" src="<?= base_url('assets/frontend') ?>/img/webmail.png" alt="">
                    <h4 class="mb-0">e-Email Resmi Universitas Cokroaminoto Palopo</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="http://www.journal.uncp.ac.id/" target="_blank">
                    <img class="img-fluid rounded mb-4" src="<?= base_url('assets/frontend') ?>/img/jurnal.png" alt="">
                    <h4 class="mb-0">Jurnal Elektronik Universitas Cokroaminoto Palopo</h4>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Berita</h6>
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


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Fakultas Teknik Komputer (FTKOM)</h6>
            <h1 class="display-6 mb-4">Program Studi Informatika</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="<?= base_url('assets/frontend') ?>/img/dekan.png" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Nirsal, S.Kom., M.Pd.</h5>
                            <span>Dekan FTKOM</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="<?= base_url('assets/frontend') ?>/img/wadek.png" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Syafriadi, S.Kom., M.Kom.</h5>
                            <span>Wakil Dekan FTKOM</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="<?= base_url('assets/frontend') ?>/img/lap.png" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Safwan Kasma, S.Kom., M.Pd.</h5>
                            <span>Kepala Laboratorium FTKOM</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->