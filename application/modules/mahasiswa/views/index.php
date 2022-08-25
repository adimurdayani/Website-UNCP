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
                <div class="col-lg">
                    <div class="card">
                        <form action="<?= base_url('mahasiswa/hapus_all/') ?>" method="POST" id="form-delete">
                            <div class="row p-3">
                                <div class="col-md-6">
                                    <a href="javascript:void(0);" data-target="#tambah" data-toggle="modal" class="btn btn-outline-blue"><i class="fe-plus"></i> Tambah Mahasiswa</a>
                                    <button type="submit" class="btn btn-danger" id="hapus"><i class="fe-trash"></i> Hapus</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <h4 class="header-title">Data <?= $title; ?></h4>
                                <table id="basic-datatable" class="table nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="chack-all"></th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Kelamin</th>
                                            <th>Semester</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php foreach ($get_mahasiswa as $data) : ?>
                                            <tr>
                                                <td><input type="checkbox" class="check-item" name="id[]" value="<?= $data->id ?>"></td>
                                                <td><?= $data->nim ?></td>
                                                <td><?= $data->nama ?></td>
                                                <td><?= $data->kelamin ?></td>
                                                <td><?= $data->semester ?></td>
                                                <td><?= $data->alamat ?></td>
                                                <td>
                                                    <a href="javascript:void(0);" data-target="#detail<?= $data->id ?>" class="btn btn-outline-info" data-toggle="modal" title="Detail Mahasiswa" data-plugin="tippy" data-tippy-placement="top"><i class="fe-eye"></i></a>
                                                    <a href="javascript:void(0);" data-target="#edit<?= $data->id ?>" class="btn btn-outline-warning" data-toggle="modal" title="Edit Mahasiswa" data-plugin="tippy" data-tippy-placement="top"><i class="fe-edit"></i></a>
                                                    <a href="<?= base_url('mahasiswa/hapus/') . $data->id ?>" class="btn btn-outline-danger hapus" title="Hapus Mahasiswa" data-plugin="tippy" data-tippy-placement="top"><i class="fe-trash"></i> </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </form>
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Tambah modal -->
    <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Mahasiswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <?php echo form_open("mahasiswa/tambah"); ?>
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label for="nim">NIM <span class="text-danger">*</span></label>
                        <input type="text" id="nim" name="nim" value="<?= set_value('nim') ?>" class="form-control" require>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Nama <span class="text-danger">*</span></label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= set_value('nama') ?>" require>
                    </div>

                    <div class="form-group mb-3">
                        <label for="kelamin">Kelamin <span class="text-danger">*</span></label>
                        <select name="kelamin" id="kelamin" class="form-control">
                            <option value="">-- Pilih Kelamin --</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="semester">Semester <span class="text-danger">*</span></label>
                        <select name="semester" id="semester" class="form-control">
                            <option value="">-- Pilih Semester --</option>
                            <option value="Semester I">Semester I</option>
                            <option value="Semester II">Semester II</option>
                            <option value="Semester III">Semester III</option>
                            <option value="Semester IV">Semester IV</option>
                            <option value="Semester V">Semester V</option>
                            <option value="Semester VI">Semester VI</option>
                            <option value="Semester VII">Semester VII</option>
                            <option value="Semester VIII">Semester VIII</option>
                            <option value="Semester IX">Semester IX</option>
                            <option value="Semester X">Semester X</option>
                            <option value="Semester XI">Semester XI</option>
                            <option value="Semester XII">Semester XII</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat">Alamat <span class="text-danger">*</span></label>
                        <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal"><i class="fe-arrow-left"></i></button>
                    <button type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i> </button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- edit modal content -->
    <?php foreach ($get_mahasiswa as $edit) : ?>
        <div id="edit<?= $edit->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Mahasiswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <?php echo form_open("mahasiswa/edit"); ?>
                    <div class="modal-body p-4">
                        <div class="form-group mb-3">
                            <label for="nim">NIM <span class="text-danger">*</span></label>
                            <input type="text" id="nim" name="nim" value="<?= $edit->nim ?>" class="form-control" require>
                            <input type="hidden" id="id" name="id" value="<?= $edit->id ?>">
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama">Nama <span class="text-danger">*</span></label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?= $edit->nama ?>" require>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kelamin">Kelamin <span class="text-danger">*</span></label>
                            <select name="kelamin" id="kelamin" class="form-control">
                                <option value="">-- Pilih Kelamin --</option>
                                <option value="Perempuan" <?php if ($edit->kelamin == "Perempuan") : ?> selected <?php endif; ?>>Perempuan</option>
                                <option value="Laki-Laki" <?php if ($edit->kelamin == "Laki-Laki") : ?> selected <?php endif; ?>>Laki-Laki</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="semester">Semester <span class="text-danger">*</span></label>
                            <select name="semester" id="semester" class="form-control">
                                <option value="">-- Pilih Semester --</option>
                                <option value="Semester I" <?php if ($edit->semester == "Semester I") : ?> selected <?php endif; ?>>Semester I</option>
                                <option value="Semester II" <?php if ($edit->semester == "Semester II") : ?> selected <?php endif; ?>>Semester II</option>
                                <option value="Semester III" <?php if ($edit->semester == "Semester III") : ?> selected <?php endif; ?>>Semester III</option>
                                <option value="Semester IV" <?php if ($edit->semester == "Semester IV") : ?> selected <?php endif; ?>>Semester IV</option>
                                <option value="Semester V" <?php if ($edit->semester == "Semester V") : ?> selected <?php endif; ?>>Semester V</option>
                                <option value="Semester VI" <?php if ($edit->semester == "Semester VI") : ?> selected <?php endif; ?>>Semester VI</option>
                                <option value="Semester VII" <?php if ($edit->semester == "Semester VII") : ?> selected <?php endif; ?>>Semester VII</option>
                                <option value="Semester VIII" <?php if ($edit->semester == "Semester VIII") : ?> selected <?php endif; ?>>Semester VIII</option>
                                <option value="Semester IX" <?php if ($edit->semester == "Semester IX") : ?> selected <?php endif; ?>>Semester IX</option>
                                <option value="Semester X" <?php if ($edit->semester == "Semester X") : ?> selected <?php endif; ?>>Semester X</option>
                                <option value="Semester XI" <?php if ($edit->semester == "Semester XI") : ?> selected <?php endif; ?>>Semester XI</option>
                                <option value="Semester XII" <?php if ($edit->semester == "Semester XII") : ?> selected <?php endif; ?>>Semester XII</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat">Alamat <span class="text-danger">*</span></label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><?= $edit->alamat ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal"><i class="fe-arrow-left"></i></button>
                        <button type="submit" class="btn btn-outline-success waves-effect waves-light"><i class="fe-save"></i></button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><!-- /.modal -->
    <?php endforeach; ?>

    <!-- detail modal content -->
    <?php foreach ($get_mahasiswa as $detail) : ?>
        <div id="detail<?= $detail->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Mahasiswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="form-group mb-3">
                            <label for="nim">NIM</label>
                            <input type="text" value="<?= $detail->nim ?>" class="form-control" disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" value="<?= $detail->nama ?>" disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kelamin">Kelamin</label>
                            <input type="text" class="form-control" value="<?= $detail->kelamin ?>" disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" value="<?= $detail->semester ?>" disabled>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" disabled><?= $detail->alamat ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal"><i class="fe-arrow-left"></i> </button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->
    <?php endforeach; ?>