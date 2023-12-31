<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Tambah alamat</h4>
        </div>
      </div>
      <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Mahasiswa</label>
            <select name="mahasiswa_kode" class="form-control" id="exampleFormControlSelect1">
              <option value="">Pilih Mahasiswa</option>
              <?php foreach ($mahasiswa as $key => $item) : ?>
                <option value="<?= $item['kode'] ?>"><?= $item['nama_lengkap'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Jalan</label>
            <input type="text" class="form-control" name="jalan" aria-describedby="helpId" placeholder="Nama Jalan">
          </div>
          <div class="form-group">
            <label for="">Kelurahan</label>
            <input type="text" class="form-control" name="kelurahan" aria-describedby="helpId" placeholder="Kelurahan">
          </div>
          <div class="form-group">
            <label for="">RT/RW</label>
            <input type="text" class="form-control" name="rt_rw" aria-describedby="helpId" placeholder="masukan RT & RW">
          </div>
          <div class="form-group">
            <label for="">Kode Pos</label>
            <input type="text" class="form-control" name="kode_pos" aria-describedby="helpId" placeholder="masukan RT & RW">
          </div>
          <button type="submit" class="btn btn-primary btn-sm" name="ubah">Simpan</button>
      </form>
    </div>
    <!-- /.panel-body -->
  </div>

</div>
<?= $this->endSection() ?>