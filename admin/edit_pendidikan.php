<?php 
$id = $_GET['id_pendidikan'];
$tes = mysqli_query($conn,"SELECT * FROM pendidikan WHERE id_pendidikan = '$id'");
$row = mysqli_fetch_array($tes,MYSQLI_ASSOC);

?>


 <!-- Start Form Kemampuan -->
 <h1>Edit Pendidikan</h1>
 <div class="box box-primary">
        <form role="form" name="formresume" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=pendidikan&act=edit'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Instansi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Instansi" name="nama" value="<?= $row['nama_instansi'];?>">
               <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_pendidikan" value="<?= $row['id_pendidikan']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tahun Masuk</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun Masuk" name="tahun_masuk" value="<?= $row['tahun_masuk'];?>">
            </div>
                <div class="form-group">
              <label for="exampleInputEmail1">Tahun Lulus</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun Lulus" name="tahun_lulus" value="<?= $row['tahun_lulus'];?>">
            </div>
                <div class="form-group">
              <label for="exampleInputEmail1">Prodi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Studi" name="prodi" value="<?= $row['prodi'];?>">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-warning">Ubah</button>
          </div>
        </form>
      </div>
<!-- End Form Kemampuan -->