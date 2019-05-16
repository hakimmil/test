<?php 
$id = $_GET['id_sosmed'];
$tes = mysqli_query($conn,"SELECT * FROM sosmed WHERE id_sosmed = '$id'");
$row = mysqli_fetch_array($tes,MYSQLI_ASSOC);

?>


 <!-- Start Form Kemampuan -->
 <h1>Edit Sosmed</h1>
 <div class="box box-primary">
        <form role="form" name="formresume" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=sosmed&act=edit'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?= $row['nama'];?>">
               <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_sosmed" value="<?= $row['id_sosmed']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Link</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Link" name="link" value="<?= $row['link'];?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Icon</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Icon" name="icon" value="<?= $row['icon'];?>">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-warning">Ubah</button>
          </div>
        </form>
      </div>
<!-- End Form Kemampuan -->