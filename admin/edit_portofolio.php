<?php 
$id = $_GET['id_portofolio'];
$tes = mysqli_query($conn,"SELECT * FROM portofolio WHERE id_portofolio = '$id'");
$row = mysqli_fetch_array($tes,MYSQLI_ASSOC);

?>


 <!-- Start Form Kemampuan -->
 <h1>Edit Portofolio</h1>
 <div class="box box-primary">
        <form role="form" name="formresume" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=portofolio&act=edit'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?= $row['nama'];?>">
               <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_portofolio" value="<?= $row['id_portofolio']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan" value="<?= $row['keterangan'];?>">
            </div>
                <div class="form-group">
              <label for="exampleInputEmail1">Waktu</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Waktu" name="waktu" value="<?= $row['waktu'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Foto</label>
              <input type="file" id="exampleInputFile" name="foto">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-warning">Ubah</button>
          </div>
        </form>
      </div>
<!-- End Form Kemampuan -->