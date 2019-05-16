<?php 
$id = $_GET['id_sosmed'];
$tes = mysqli_query($conn,"SELECT * FROM sosmed WHERE id_sosmed = '$id'");
$row = mysqli_fetch_array($tes,MYSQLI_ASSOC);

?>


 <!-- Start Form Kemampuan -->
 <h1>Hapus Sosmed</h1>
 <div class="box box-primary">
        <form role="form" name="formsosmed" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=sosmed&act=hapus'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?= $row['nama'];?>" disabled>
               <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_sosmed" value="<?= $row['id_sosmed']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Link</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Link" name="link" value="<?= $row['link'];?>" disabled>
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