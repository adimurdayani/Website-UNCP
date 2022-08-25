<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>
                        <h4 class="page-title"><?= $title; ?></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <?= form_open('dosen/update') ?>
                            <div class="form-group mb-3">
                                <label for="nip">NIP <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nip" id="nip" value="<?= $get_data->nip ?>" placeholder="Input NIP" require>
                                <input type="hidden" name="id" value="<?= $get_data->id ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama">Nama Dosen <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $get_data->nama ?>" placeholder="Input nama dosen" require>
                            </div>

                            <div class="form-group mb-3">
                                <label for="kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                                <select name="kelamin" id="kelamin" class="form-control" require>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Perempuan" <?php if ($get_data->kelamin == "Perempuan") : ?> selected <?php endif; ?>>Perempuan</option>
                                    <option value="Laki-Laki" <?php if ($get_data->kelamin == "Laki-Laki") : ?> selected <?php endif; ?>>Laki-Laki</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><?= $get_data->alamat ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 float-right"><i class="fe-save"></i> Simpan</button>
                            <a href="<?= base_url('dosen') ?>" class="btn btn-secondary mt-4 float-right mr-2"><i class="fe-arrow-left"></i> Kembali</a>
                            <?= form_close() ?>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->