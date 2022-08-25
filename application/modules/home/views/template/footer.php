<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Kampus 1</h5>
                <p class="mb-4"><i class="fa fa-map-marker-alt me-3"></i>Jl. Latammacelling No. 19, Kota Palopo</p>
                <h5 class="text-light mb-4">Kampus 2</h5>
                <p class="mb-4"><i class="fa fa-map-marker-alt me-3"></i>Jl. Lamaranginang, Kota Palopo</p>
                <h5 class="text-light mb-4">Kampus 3</h5>
                <p class="mb-4"><i class="fa fa-map-marker-alt me-3"></i>BTN Anggrek, Kota Palopo</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="">Tentang</a>
                <a class="btn btn-link" href="">Visi dan Misi</a>
                <a class="btn btn-link" href="">Sejarah</a>
                <a class="btn btn-link" href="">Kontak</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Lokasi</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.328273495702!2d120.19575571407644!3d-3.006068740766008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d915f1922fc8c71%3A0xa765efb0d43779e0!2sUniversitas%20Cokroaminoto%20Palopo%20(UNCP%20-%20Kampus%201)!5e0!3m2!1sid!2sid!4v1659729494315!5m2!1sid!2sid" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <?= date("Y") ?> &copy; <a href="#">Universitas Cokroaminoto Palopo</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/lib/wow/wow.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/lib/easing/easing.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend') ?>/lib/lightbox/js/lightbox.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url('assets/frontend') ?>/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
</body>

</html>