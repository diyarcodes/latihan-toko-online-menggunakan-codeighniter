<div class="container-fluid">
    <div class="card">
        <div class="card">
            <h5 class="card-header">Detail Produk</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/uploadBarang/') . $barang['gambar']; ?>" alt="" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?= $barang['nama_brg']; ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?= $barang['keterangan']; ?></strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $barang['kategori']; ?></strong></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $barang['stok']; ?></strong></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp. <?= number_format($barang['harga'], 0, ',', '.'); ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>