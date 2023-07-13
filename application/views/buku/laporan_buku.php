<!-- <div> HALAMAN LAPORAN DATA BUKU </div> -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('laporan/cetak_laporan_pinjam'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> </a>
            <a href="<?= base_url('laporan/laporan_pinjam_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> </a>
            <a href="<?= base_url('laporan/export_excel_pinjam'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> </a>
            <table class="table table-hover">
                <thead>
                    <tr style="background:paleturquoise">
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Di Pinjam</th>
                        <th scope="col">Di Booking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($buku as $l) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $l['judul_buku']; ?></td>
                            <td><?= $l['id_kategori']; ?></td>
                            <td><?= $l['pengarang']; ?></td>
                            <td><?= $l['penerbit']; ?></td>
                            <td><?= $l['tahun_terbit']; ?></td>
                            <td><?= $l['isbn']; ?></td>
                            <td><?= $l['stok']; ?></td>
                            <td><?= $l['dipinjam']; ?></td>
                            <td><?= $l['dibooking']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->