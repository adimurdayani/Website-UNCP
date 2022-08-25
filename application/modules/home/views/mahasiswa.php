<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">Mahasiswa</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Mahasiswa</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Daftar Mahasiswa</h6>
            <h1 class="display-6 mb-4">Data Mahasiswa</h1>
        </div>
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="table-responsive">
                <table id="table_id" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelamin</th>
                            <th>Semester</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($mahasiswa as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->nim ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->kelamin ?></td>
                                <td><?= $data->semester ?></td>
                                <td><?= $data->alamat ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->