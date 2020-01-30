<div class="container-fluid">
    <h3><i class="fas fa-edit">Edit Data Barang</i></h3>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_brg" value="<?= $barang['id_brg']; ?>">
        <div class="for-group">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" value="<?= $barang['nama_brg']; ?>">
            <?= form_error('nama_brg', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        <div class="for-group">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?= $barang['keterangan']; ?>">
            <?= form_error('keterangan', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        <div class="for-group">
            <label for="">Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?= $barang['kategori']; ?>">
            <?= form_error('kategori', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        <div class="for-group">
            <label for="">Harga</label>
            <input type="text" name="harga" class="form-control" value="<?= $barang['harga']; ?>">
            <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        <div class="for-group">
            <label for="">Stok</label>
            <input type="text" name="stok" class="form-control" value="<?= $barang['stok']; ?>">
            <?= form_error('stok', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        <div class="for-group">
            <img src="<?= base_url('assets/img/uploadBarang/') . $barang['gambar']; ?>" width="90px" height="100px">
            <input type="hidden" name="gambarLama" value="<?= $barang['gambar']; ?>">
            <label for="">Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
</div>