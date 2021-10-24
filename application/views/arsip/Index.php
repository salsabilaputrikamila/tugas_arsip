<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1 class="section-title">Arsip Surat</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"> <a href="home">Menu</a></div>
              <div class="breadcrumb-item ">Arsip Surat</div>
            </div>
          </div>

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                    <!-- <h5>Data Arsip &nbsp;<i class="fas fa-piggy-bank"></i></h5> -->
                    </div>
                    <div class="alert alert-primary" role="alert">
                    Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br>
                    Klik "Lihat" pada kolom aksi untuk menampilkan surat.
                  </div>
                </div>
                </div>
            </div>

            <!-- Main content -->
      
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-primary">
                <div class="card-header">
                  <div class="card-body p-0">
                    
                    <form method="POST">
                      <div class="input-group mb-2">
                        <input type="text" name="search" placeholder="Search. . . " class="form-control" value="<?= $searchVal ?>">
                        <div class="input-group-append">
                          <button class="btn btn-outline-info" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <span>Cari Surat</span>
                          </button>
                        </div>
                      </div>
                    </form>
                    <br>
                    <table class="table table-sm table-bordered table-hover" id="arsipTable">
                      <thead align="center" >
                        <!-- <th>No</th> -->
                        <th>Nomor Surat</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Waktu Pengarsipan</th>
                        <th style="width:30%;">Aksi</th>
                      </thead>
                      <tbody>
                        <?php $no = 1;
                        foreach ($dataSurat as $data) : ?>
                          <tr id="<?= $data->id; ?>">
                            <!-- <td><?= $no++ ?></td> -->
                            <td><?= $data->nomor_surat ?></td>
                            <td><?= $data->kategori ?></td>
                            <td><?= $data->judul ?></td>
                            <td><?= $data->waktu_pengarsipan ?></td>
                            <td>
                              <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '<?=site_url('Menu/hapus/'. $data->id)?>')" class='btn btn-danger' >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                <span>Hapus</span>
                              </a>
                              <a href="<?= base_url("menu/download/" . $data->id) ?>" class="btn btn-warning download">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <span>Unduh</span>
                              </a>
                              <a href="<?= base_url("menu/show/$data->id"); ?>" class="btn btn-primary">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>Lihat</span>
                              </a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                        
                      </tbody>
                    </table>
                    <br>
                    <a href="<?= base_url("menu/create") ?>" class="btn btn-success">
                      <i class="fa fa-plus" aria-hidden="true"></i>
                      &nbsp;&nbsp;
                      <span>Arsipkan Surat</span>
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </div><!-- /.container-fluid -->
      
            </section><br>

            
            
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal fade" id="modalDelete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Konfirmasi Hapus Data</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus arsip surat ini?
      </div>
      <div class="modal-footer">
        <form id="formDelete" action="" method="post">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>