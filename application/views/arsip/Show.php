<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Arsip</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item">Detail Data Arsip</div>
            </div>
          </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                    <div class="card-header"><h3>Detail Data Arsip</h3></div>
                    <div class ="card-body">

                    <!-- Main content -->
                    <?php foreach ($dataSurat as $data) : ?>
                  <div class="card-body">
                    <table class="table">
                      <tr>
                        <td>Nomor Surat</td>
                        <td>:</td>
                        <td><?= $data->nomor_surat ?></td>
                      </tr>
                      <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td><?= $data->kategori ?></td>
                      </tr>
                      <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><?= $data->judul ?></td>
                      </tr>
                      <tr>
                        <td>Waktu Unggah</td>
                        <td>:</td>
                        <td><?= $data->waktu_pengarsipan ?></td>
                      </tr>
                    </table>

                    <embed src="<?= base_url() . "assets/uploads/pdf/" . $data->file ?>" width="100%" height="400"></embed>
                  </div>
                  <div class="card-footer">
                    <a href="<?= base_url("menu/index") ?>" class="btn btn-primary">
                      <i class="fa fa-arrow-left" aria-hidden="true"></i>
                      <span>Kembali</span>
                    </a>
                    <a href="<?= base_url("menu/download/" . $data->id) ?>" class="btn btn-warning download">
                      <i class="fa fa-download" aria-hidden="true"></i>
                      <span>Unduh</span>
                    </a>
                    <a href="<?= base_url("menu/update/" . $data->id) ?>" class="btn btn-info">
                      <i class="fa fa-paperclip" aria-hidden="true"></i>
                      <span>Edit / Ganti File</span>
                    </a>
                  </div>

                <?php endforeach; ?>
          
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