<?php 

$edit = mysqli_query($conn,"SELECT `id_portofolio`, `nama`, `keterangan`, `waktu`, `foto` FROM `portofolio`");
$row = mysqli_fetch_array($edit,MYSQLI_ASSOC);

?>

      <h1>
      Portofolio
      </h1>


<!-- Start Portofolio -->
<div class="row">
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Portofolio</h3>
              <a href="tambah_portofolio" type="button" class="btn btn-danger">Tambah portofolio</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
                  <th>Waktu</th>
                  <th>Foto</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                  <?php

                      $port = mysqli_query($conn,'SELECT * FROM `portofolio` ORDER BY id_portofolio ASC');
                      $no = 1;
                      while ($raw = MYSQLI_FETCH_ASSOC($port)) {
                   ?>
                <tr>
                   <td><?= $no; ?></td>
                   <td><?= $raw['nama']; ?></td>
                   <td><?= $raw['keterangan']; ?></td>
                   <td><?= $raw['waktu']; ?></td>
                   <td><img src="../img/<?php echo $raw['foto']; ?>" style="width: 200px;height: auto;"></td>
                   <td><a href="edit_portofolio-<?=$raw['id_portofolio'];?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="hapus_portofolio-<?=$raw['id_portofolio'];?>" type="button" class="btn btn-danger">Hapus</a></td>
                </tr>
              <?php 
              $no++;
             } ?>
                </tbody>
              </table>
            </div>
          </div>
</div>
<!-- End Form Portofolio -->