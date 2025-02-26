<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h3 class="m-0 text-dark"><?php echo $title; ?></h3><br>
                    <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan
                        Klik "Lihat" pada kolom aksi untuk menampilkan surat
                    </p>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                    <?php if (validation_errors()) { ?>
                        <div class="alert alert-danger">
                            <a class="close" data-dismiss="alert">x</a>
                            <strong><?php echo strip_tags(validation_errors()); ?></strong>
                        </div>
                    <?php } ?>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <a href="<?php echo base_url('arsip/tambah'); ?>" type="button" class="btn btn-info">
                                <i class="fa fa-plus" aria-hidden="true"> </i> Arsipkan Surat
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class=" table table-bordered table-hover" id="table-id" style="font-size:14px;">
                                    <thead>
                                        <th>#</th>
                                        <th>Nomor Surat</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Waktu Pengarsipan</th>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($surat as $srt) : ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $srt['nomor_surat']; ?></td>
                                                <td><?php echo $srt['kategori_surat']; ?></td>
                                                <td><?php echo $srt['judul_surat']; ?></td>
                                                <td><?php echo $srt['waktu_pengarsipan']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>