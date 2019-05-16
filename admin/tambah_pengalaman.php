 <h1>Tambah Pengalaman</h1>
 <!-- Start Tambah -->
      <div class="box box-primary">
        <form role="form" name="formkemampuan" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=pengalaman&act=tambah'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
              <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_pengalaman">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tahun Masuk</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun Masuk" name="tahun_masuk">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tahun Selesai</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun Selesai" name="tahun_selesai">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tempat</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tempat" name="tempat">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-info">Simpan</button>
          </div>
        </form>
      </div>
<!-- End Tambah -->