 <h1>Tambah Services</h1>
 <!-- Start Tambah -->
      <div class="box box-primary">
        <form role="form" name="formservices" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=services&act=tambah'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
              <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_services">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan">
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