<?php 

$edit = mysqli_query($conn,'SELECT `id_biodata`, `nama`, `tanggal_lahir`, `Kota`, `panggilan`, `alamat`, `email`, `no_telp`, `resume`, foto FROM `biodata`');
$row = mysqli_fetch_array($edit,MYSQLI_ASSOC);

?>

      <h1>
        Resume
      </h1>


<!-- Form Biodata -->
      <div class="box box-primary">
        <form role="form" name="formresume" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=resume&act=edit'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?= $row['nama']; ?>">
              <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_biodata" value="<?= $row['id_biodata']; ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nama Panggilan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="panggilan" value="<?= $row['panggilan']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Lahir</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Kota</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kota" name="kota" value="<?= $row['Kota']; ?>">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat" name="alamat" value="<?= $row['alamat']; ?>">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="<?= $row['email']; ?>">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">No.Hp</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="No.Hp" name="no_telp" value="<?= $row['no_telp']; ?>">
            </div>
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Objective</h3>
            </div>
            <div class="box-body pad">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="resume"><?= $row['resume']; ?></textarea>
            </div>
          </div>
            <div class="form-group">
              <img src="../img/<?php echo $row['foto']; ?>" style="width: 200px;height: auto;">
              <input type="file" id="exampleInputFile" name="foto">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
<!-- End Form Biodata -->


<!-- Form Kemampuan -->
<div class="row">
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kemampuan</h3>
              <a href="tambah_kemampuan" type="button" class="btn btn-danger">Tambah Kemampuan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Persentasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                      $skill = mysqli_query($conn,'SELECT * FROM `kemampuan` ORDER BY id_kemampuan ASC');
                      $no = 1;
                      while ($rw = MYSQLI_FETCH_ASSOC($skill)) {
                   ?>
                <tr>
                   <td><?= $no; ?></td>
                   <td><?= $rw['nama']; ?></td>
                   <td><?= $rw['persentasi']; ?></td>
                   <td><a href="edit_kemampuan-<?=$rw['id_kemampuan'];?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="hapus_kemampuan-<?=$rw['id_kemampuan'];?>" type="button" class="btn btn-danger">Hapus</a></td>
                </tr>
              <?php 
              $no++;
             } ?>
                </tbody>
              </table>
            </div>
          </div>
</div>
<!-- End Form Kemampuan -->


<!-- Start Pendidikan -->
<div class="row">
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pendidikan</h3>
              <a href="tambah_pendidikan" type="button" class="btn btn-danger">Tambah Pendidikan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Tahun Masuk</th>
                  <th>Tahun Lulus</th>
                  <th>Prodi</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                  <?php

                      $edu = mysqli_query($conn,'SELECT * FROM `pendidikan` ORDER BY id_pendidikan ASC');
                      $no = 1;
                      while ($raw = MYSQLI_FETCH_ASSOC($edu)) {
                   ?>
                <tr>
                   <td><?= $no; ?></td>
                   <td><?= $raw['nama_instansi']; ?></td>
                   <td><?= $raw['tahun_masuk']; ?></td>
                   <td><?= $raw['tahun_lulus']; ?></td>
                   <td><?= $raw['prodi']; ?></td>
                   <td><a href="edit_pendidikan-<?=$raw['id_pendidikan'];?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="hapus_pendidikan-<?=$raw['id_pendidikan'];?>" type="button" class="btn btn-danger">Hapus</a></td>
                </tr>
              <?php 
              $no++;
             } ?>
                </tbody>
              </table>
            </div>
          </div>
</div>
<!-- End Pendidikan -->


<!-- Start Pengalaman -->
<div class="row">
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pengalaman</h3>
              <a href="tambah_pengalaman" type="button" class="btn btn-danger">Tambah Pengalaman</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Tahun Masuk</th>
                  <th>Tahun Selesai</th>
                  <th>Tempat</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                  <?php

                      $exp = mysqli_query($conn,'SELECT * FROM `pengalaman` ORDER BY id_pengalaman ASC');
                      $no = 1;
                      while ($rew = MYSQLI_FETCH_ASSOC($exp)) {
                   ?>
                <tr>
                   <td><?= $no; ?></td>
                   <td><?= $rew['nama']; ?></td>
                   <td><?= $rew['tahun_masuk']; ?></td>
                   <td><?= $rew['tahun_selesai']; ?></td>
                   <td><?= $rew['tempat']; ?></td>
                   <td><?= $rew['keterangan']; ?></td>
                   <td><a href="edit_pengalaman-<?=$rew['id_pengalaman'];?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="hapus_pengalaman-<?=$rew['id_pengalaman'];?>" type="button" class="btn btn-danger">Hapus</a></td>
                </tr>
              <?php 
              $no++;
             } ?>
                </tbody>
              </table>
            </div>
          </div>
</div>
<!-- End Pengalaman -->