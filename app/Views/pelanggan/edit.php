<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Edit Pelanggan</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama Pelanggan</label>
            <input type="text" name="nama" class="form-control" value="<?= $pelanggan['nama']; ?>" required>
        </div>
        <div class="form-group">
             <label for="">Nomor Hp Pelanggan</label>
                <input type="text" name="nomor" class="form-control" value="<?= $pelanggan['nomor']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" value="<?= $pelanggan['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Pemesanan ID:</label>
            <select name="pemesanan_id" class="form-control">
                <?php foreach ($pemesanan as $item) : ?>
                    <option value="<?= $item['id'] ?>" <?= isset($pelanggan['pemesanan_id']) && $pelanggan['pemesanan_id'] == $item['id'] ? 'selected' : ''; ?>><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
       
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/pelanggan" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>