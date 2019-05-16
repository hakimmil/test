 <h1>Tambah Sosmed</h1>
 <!-- Start Tambah -->
      <div class="box box-primary">
        <form role="form" name="formsosmed" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=sosmed&act=tambah'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
              <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_sosmed">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Link</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Link" name="link">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Icon</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Icon" name="icon">
            </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-info">Simpan</button>
          </div>
        </form>
      </div>
<!-- End Tambah -->