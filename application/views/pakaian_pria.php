<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slider/slider1.jpg'); ?>" class="d-block w-100" alt="..." height="550px">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider/slider2.jpg'); ?>" class="d-block w-100" alt="..." height="550px">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider/slider3.jpg'); ?>" class="d-block w-100" alt="..." height="550px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row text-center mt-3">
        <?php foreach ($pakaianPria as $brg) : ?>
        <div class="card ml-3" style="width: 16rem;">
            <img src="<?= base_url('assets/img/uploadBarang/') . $brg['gambar']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?= $brg['nama_brg']; ?></h5>
                <small><?= $brg['keterangan']; ?></small><br>
                <span class="badge badge-pill badge-success">Rp. <?= number_format($brg['harga'], 0, ',', '.'); ?></span><br>
                <a href="<?= base_url('Dashboard/tambah_ke_keranjang/') . $brg['id_brg']; ?>" class="btn btn-sm btn-primary">Tambah Ke Keranjang</a>
                <a href="<?= base_url('Dashboard/detail_barang/') . $brg['id_brg']; ?>" class="btn btn-sm btn-success">Detail</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>