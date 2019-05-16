<?php 

$edit = mysqli_query($conn,"SELECT `id_sosmed`, `nama`, `link`, `icon` FROM `sosmed` WHERE 1");
$row = mysqli_fetch_array($edit,MYSQLI_ASSOC);

?>

      <h1>
      Sosmed
      </h1>


<!-- Start Services -->
<div class="row">
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sosmed</h3>
              <a href="tambah_sosmed" type="button" class="btn btn-danger">Tambah Sosmed</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Link</th>
                  <th>Icon</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                  <?php

                      $sos = mysqli_query($conn,'SELECT * FROM `sosmed` ORDER BY id_sosmed ASC');
                      $no = 1;
                      while ($raw = MYSQLI_FETCH_ASSOC($sos)) {
                   ?>
                <tr>
                   <td><?= $no; ?></td>
                   <td><?= $raw['nama']; ?></td>
                   <td><?= $raw['link']; ?></td>
                   <td><i class="<?= $raw['icon']; ?>"></i></td>
                   <td><a href="edit_sosmed-<?=$raw['id_sosmed'];?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="hapus_sosmed-<?=$raw['id_sosmed'];?>" type="button" class="btn btn-danger">Hapus</a></td>
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