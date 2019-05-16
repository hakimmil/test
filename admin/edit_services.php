<?php 
$id = $_GET['id_services'];
$tes = mysqli_query($conn,"SELECT * FROM services WHERE id_services = '$id'");
$row = mysqli_fetch_array($tes,MYSQLI_ASSOC);

?>


 <!-- Start Form Kemampuan -->
 <h1>Edit Services</h1>
 <div class="box box-primary">
        <form role="form" name="formresume" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=services&act=edit'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?= $row['nama'];?>">
               <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_services" value="<?= $row['id_services']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan" value="<?= $row['keterangan'];?>">
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