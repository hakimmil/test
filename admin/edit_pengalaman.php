<?php 
$id = $_GET['id_pengalaman'];
$tes = mysqli_query($conn,"SELECT * FROM pengalaman WHERE id_pengalaman = '$id'");
$row = mysqli_fetch_array($tes,MYSQLI_ASSOC);

?>


 <!-- Start Form Kemampuan -->
 <h1>Edit Pendidikan</h1>
 <div class="box box-primary">
        <form role="form" name="formresume" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=pengalaman&act=edit'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Instansi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Instansi" name="nama" value="<?= $row['nama'];?>">
               <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_pengalaman" value="<?= $row['id_pengalaman']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tahun Masuk</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun Masuk" name="tahun_masuk" value="<?= $row['tahun_masuk'];?>">
            </div>
                <div class="form-group">
              <label for="exampleInputEmail1">Tahun Selesai</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun Selesai" name="tahun_selesai" value="<?= $row['tahun_selesai'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">tempat</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tempat" name="tempat" value="<?= $row['tempat'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan" value="<?= $row['keterangan'];?>">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-warning">Ubah</button>
          </div>
        </form>
      </div>
<!-- End Form Kemampuan -->