<?php 
$id = $_GET['id_kemampuan'];
$tes = mysqli_query($conn,"SELECT * FROM kemampuan WHERE id_kemampuan = '$id' ");
$row = mysqli_fetch_array($tes,MYSQLI_ASSOC);
?>


 <!-- Start Form Kemampuan -->
 <h1>Hapus Kemampuan</h1>
 <div class="box box-primary">
        <form role="form" name="formresume" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=kemampuan&act=hapus'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?= $row['nama'];?>" disabled>
               <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_kemampuan" value="<?= $row['id_kemampuan']; ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Persentasi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Persentasi" name="persentasi" value="<?= $row['persentasi'];?>" disabled>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
<!-- End Form Kemampuan -->