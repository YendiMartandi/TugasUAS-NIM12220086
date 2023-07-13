<!-- <div> HALAMAN LAPORAN DATA ANGGOTA </div> -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) 
            { ?><div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div><?php } ?>
            <?= $this->session->flashdata('pesan'); ?>

            <a href="<?= base_url('laporan/cetak_laporan_pinjam'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> </a>
            <a href="<?= base_url('laporan/laporan_pinjam_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> </a>
            <a href="<?= base_url('laporan/export_excel_pinjam'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> </a>

            <table class="table table-hover text-center">
    <thead>
        <tr style="background:paleturquoise">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">Foto Profil</th>
            <!-- <th scope="col">Status</th> -->
        </tr>
    </thead>
    <tbody>
    <?php
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pustaka";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mengambil data dari tabel
    $sql = "SELECT nama, alamat, email, image FROM user";
    $result = $conn->query($sql);

    // Memeriksa apakah ada data yang ditemukan
    if ($result->num_rows > 0) {
        $counter = 1;
        // Menampilkan data dalam tabel
        while ($row = $result->fetch_assoc()) {
            $nama = $row["nama"];
            $alamat = $row["alamat"];
            $email = $row["email"];
            $gambar = $row["image"];

            echo "<tr>";
            echo "<td>$counter</td>";
            echo "<td>$nama</td>";
            echo "<td>$alamat</td>";
            echo "<td>$email</td>";
            echo "<td><img src='$gambar' alt='Foto Profil'></td>";
            echo "</tr>";
            $counter++;
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data yang ditemukan.</td></tr>";
    }

    // Menutup koneksi ke database
    $conn->close();
    ?>
    </tbody>
</table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->