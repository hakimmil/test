 
 <h1>Tambah Pendidikan</h1>
 <!-- Start Tambah -->
      <div class="box box-primary">
        <form role="form" name="formpendidikan" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=pendidikan&act=tambah'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Instansi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Instansi" name="nama">
              <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_pendidikan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tahun Masuk</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun Masuk" name="tahun_masuk">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tahun Lulus</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tahun Lulus" name="tahun_lulus">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Prodi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Studi" name="prodi">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-info">Simpan</button>
          </div>
        </form>
      </div>
<!-- End Tambah -->