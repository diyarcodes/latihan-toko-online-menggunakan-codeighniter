<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <?= $this->session->flashdata('pesan'); ?>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $brg['nama_brg']; ?></td>
            <td><?= $brg['keterangan']; ?></td>
            <td><?= $brg['kategori']; ?></td>
            <td><?= $brg['harga']; ?></td>
            <td><?= $brg['stok']; ?></td>
            <td>
                <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
            </td>
            <td>
                <a href="<?= base_url('admin/Data_barang/editBarang/') . $brg['id_brg']; ?>">
                    <div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>
                </a>
            </td>
            <td>
                <a href="<?= base_url('admin/Data_barang/hapusBarang/') . $brg['id_brg']; ?>">
                    <div class="btn btn-success btn-sm"><i class="fas fa-trash"></i></div>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <div class="modal fade" id="tambah_barang" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">FORM INPUT PRODUK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/Data_barang/tambahDataBarang'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_brg" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">kategori</label>
                            <input type="text" name="kategori" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Gambar Produk</label><br>
                            <input type="file" name="gambar_brg" class="form-control">
                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>