<?php 
$id = $_GET['id_services'];
$tes = mysqli_query($conn,"SELECT * FROM services WHERE id_services = '$id'");
$row = mysqli_fetch_array($tes,MYSQLI_ASSOC);

?>


 <!-- Start Form Kemampuan -->
 <h1>Hapus Services</h1>
 <div class="box box-primary">
        <form role="form" name="formservices" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=services&act=hapus'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?= $row['nama'];?>" disabled>
               <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_services" value="<?= $row['id_services']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan" value="<?= $row['keterangan'];?>" disabled>
            </div>
                <div class="form-group">
              <label for="exampleInputEmail1">Icon</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Waktu" name="icon" value="<?= $row['icon'];?>" disabled>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
<!-- End Form Kemampuan -->