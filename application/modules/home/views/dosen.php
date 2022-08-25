<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">Dosen</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Dosen</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Dosen</h6>
            <h1 class="display-6 mb-4">Daftar Dosen</h1>
        </div>
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="table-responsive">
                <div class="row mb-4">
                    <div class="col-md-4"> </div>
                    <div class="col-md-4">
                        <p class="text-center mb-4"><strong>Cari data berdasarkan: </strong></p>
                        <form action="" method="post">
                            <div class="form-group mb-2">
                                <label for="">NIP</label>
                                <input type="number" id="nip" name="nip" class="form-control" placeholder="Input NIP">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Input nama">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4"><i class="fa fa-search"></i> Cari</button>
                        </form>
                    </div>
                    <div class="col-md-4"> </div>
                </div>
                <?php
                $nip = $this->input->post('nip');
                $nama = $this->input->post('nama');
                $semester = $this->input->post('semester');

                if (!empty($nip) || !empty($nama)) :
                    $this->db->where('nip', $nip);
                    $this->db->where('nama', $nama);
                    $get_nilai = $this->db->get('tb_dosen')->result();
                ?>
                    <table id="table_id" class="table table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($get_dosen as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->nip ?></td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->kelamin ?></td>
                                    <td><?= $data->alamat ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->