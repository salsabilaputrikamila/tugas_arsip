<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
          <h1 class="section-title">Arsip Surat / Unggah</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item">Unggah</div>
            </div>
          </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
                    <div class="callout callout-info">
                    <!-- <h5>Data Arsip &nbsp;<i class="fas fa-piggy-bank"></i></h5> -->
                    </div>
                    <div class="alert alert-primary" role="alert">
                    Unggah Surat yang telah terbit pada form ini untuk diarsipkan. <br>
                    Catatan: <b>Gunakan file berformat PDF</b>
                  </div>
                </div>
          <div class="col">
              <div class ="card card-primary">
                    
                    <div class ="card-body"x>

                    <!-- Main content -->
        
          <!-- Small boxes (Stat box) -->
        
                <?= form_open_multipart('menu/create') ?>
                <form enctype="multipart/form-data" method="post" class="form-horizontal">
                  <div class="card-body">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nomor Surat</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan nomor surat" name="nomor_surat">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kategori</label>

                      <div class="col-sm-10">
                        <select name="kategori" class="form-control">
                          <option value="Undangan">Undangan</option>
                          <option value="Pengumuman">Pengumuman</option>
                          <option value="Nota Dinas">Nota Dinas</option>
                          <option value="Pemberitahuan">Pemberitahuan</option>
                        </select>
                      </div>

                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan judul surat" name="judul">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">File Surat (PDF)</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file_surat" >
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer">
                  <a href="<?= base_url("menu/index") ?>" class="btn btn-primary float-left">
                      <i class="fa fa-arrow-left" aria-hidden="true"></i>
                      <span>Kembali</span>
                    </a>

                    <button class="btn btn-success float-right" type="submit" class="btn btn-success">Simpan</button>
<br>
                    
                  </div>
                </form>
                <?= form_close() ?>
              </div>
            </div>
            <!-- ./col -->
      
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
  <!-- /.content-wrapper -->