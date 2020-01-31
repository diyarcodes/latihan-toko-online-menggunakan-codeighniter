<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');
                    ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?= base_url('Dashboard/proses_pesanan'); ?>" method="post">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">N0. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select name="" id="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POS Indonesia</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Pilih BANK</label>
                    <select name="" id="" class="form-control">
                        <option value="">BCA - xxxxxxx</option>
                        <option value="">BNI - xxxxxxx</option>
                        <option value="">BRI - xxxxxxx</option>
                        <option value="">MANDIRI - xxxxxxx</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>

            <?php
            } else {
                echo "Keranjang Belanja Anda Masih kosong";
            }
            ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>