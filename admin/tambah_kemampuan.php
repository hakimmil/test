 
 <h1>Tambah Kemampuan</h1>
 <!-- Start Tambah -->
      <div class="box box-primary">
        <form role="form" name="formkemampuan" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=kemampuan&act=tambah'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Kemampuan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kemampuan" name="kemampuan">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-info">Simpan</button>
          </div>
        </form>
      </div>
<!-- End Tambah -->