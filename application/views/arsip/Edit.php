<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1 class="section-title">Arsip</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item">Form Edit Data Arsip</div>
            </div>
          </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                    <div class="card-header"><h3>Form Edit Data Arsip</h3></div>
                        <div class ="card-body">
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <form enctype="multipart/form-data" method="post" class="form-horizontal">
                  <?php foreach ($dataSurat as $data) : ?>
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Surat</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Masukkan nomor surat" name="nomor_surat" value="<?= $data->nomor_surat ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kategori</label>

                        <div class="col-sm-10">
                          <select name="kategori" class="form-control">
                            <option value="Undangan" <?= $data->kategori == 'Undangan' ? 'selected' : '' ?>>Undangan</option>
                            <option value="Pengumuman" <?= $data->kategori == 'Pengumuman' ? 'selected' : '' ?>>Pengumuman</option>
                            <option value="Nota Dinas" <?= $data->kategori == 'Nota Dinas' ? 'selected' : '' ?>>Nota Dinas</option>
                            <option value="Pemberitahuan" <?= $data->kategori == 'Pemberitahuan' ? 'selected' : '' ?>>Pemberitahuan</option>
                          </select>
                        </div>

                      </div>

                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Masukkan judul surat" name="judul" value="<?= $data->judul ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">File Surat (PDF)</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="file_surat">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-warning float-right">Submit</button>

                      <a href="<?= base_url("menu/index") ?>" class="btn btn-primary float-left">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span>Kembali</span>
                      </a>
                    </div>
                  <?php endforeach ?>
                </form>
                        </div>
                    </div>
         
            </div>
          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>