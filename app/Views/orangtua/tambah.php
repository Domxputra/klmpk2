<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Tambah Jurusan</h4>
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
                    <label for="">Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah" placeholder="Nasukkan Nama Ayah">
                </div>
                <div class="form-group">
                    <label for="">Nik Ayah</label>
                    <input type="text" class="form-control" name="nik_ayah" placeholder="Nasukkan Nik Ayah">
                </div>
                <div class="form-group">
                    <label for="">Nama ibu</label>
                    <input type="text" class="form-control" name="nama_ibu" placeholder="Nasukkan Nama ibu">
                </div>
                <div class="form-group">
                    <label for="">Nik Ibu</label>
                    <input type="text" class="form-control" name="nik_ibu" placeholder="Nasukkan Nik Ibu">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>