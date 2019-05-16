 <h1>Tambah Portofolio</h1>
 <!-- Start Tambah -->
      <div class="box box-primary">
        <form role="form" name="formkemampuan" method="POST" enctype="multipart/form-data" action="<?= 'aksi.php?module=portofolio&act=tambah'?>">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
              <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="id_portofolio">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" name="keterangan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Waktu</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Waktu" name="waktu">
            </div>
            <div class="form-group">
              <input type="file" id="exampleInputFile" name="foto">
            </div>
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-info">Simpan</button>
          </div>
        </form>
      </div>
<!-- End Tambah -->