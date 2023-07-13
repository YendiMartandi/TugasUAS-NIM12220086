<!-- <div class="text-center text-primary font-weight-bold">
    <h1>HALAMAN DATA ANGGOTA</h1>
</div> -->

<table class="table table-hover text-center">
    <thead>
        <tr style="background:paleturquoise">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">Foto Profil</th>
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