<?php 

$edit = mysqli_query($conn,"SELECT `id_services`, `nama`, `keterangan`, `icon` FROM `services` ");
$row = mysqli_fetch_array($edit,MYSQLI_ASSOC);

?>

      <h1>
      Services
      </h1>


<!-- Start Services -->
<div class="row">
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Services</h3>
              <a href="tambah_services" type="button" class="btn btn-danger">Tambah services</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
                  <th>Icon</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                  <?php

                      $port = mysqli_query($conn,'SELECT * FROM `services` ORDER BY id_services ASC');
                      $no = 1;
                      while ($raw = MYSQLI_FETCH_ASSOC($port)) {
                   ?>
                <tr>
                   <td><?= $no; ?></td>
                   <td><?= $raw['nama']; ?></td>
                   <td><?= $raw['keterangan']; ?></td>
                   <td><i class="<?= $raw['icon']; ?>"></i></td>
                   <td><a href="edit_services-<?=$raw['id_services'];?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="hapus_services-<?=$raw['id_services'];?>" type="button" class="btn btn-danger">Hapus</a></td>
                </tr>
              <?php 
              $no++;
             } ?>
                </tbody>
              </table>
            </div>
          </div>
</div>
<!-- End Form Services -->