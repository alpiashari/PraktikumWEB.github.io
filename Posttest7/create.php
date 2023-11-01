<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $baju = $_POST["baju"];
    $jumlah = $_POST["jumlah"];
    $alamat = $_POST["alamat"];
    $no_wa = $_POST["no_wa"];
    $email = $_POST["email"];
    $gambar = $_FILES["gambar"]["name"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    $ekstensigmbr = explode(".", $gambar);
    $ekstensigmbr = strtolower(end($ekstensigmbr));
    $nm_gambar = date('Y-m-d');
    $nm_gambar .= ".";
    $nm_gambar .= strtolower($nama) . "-file";
    $nm_gambar .= ".";
    $nm_gambar .= $ekstensigmbr;
    // menyimpan gambar yang diupload pada folder img/data/
    move_uploaded_file($tmpName, 'img/data/' . $nm_gambar);

    $query = mysqli_query($koneksi, "INSERT INTO pemesanan VALUES (NULL,'$nama', '$baju', $jumlah, '$alamat', '$email', '$no_wa', '$nm_gambar')");
    if ($query) {
        $msg = 'Created Successfully!';
    }
}
?>


<?= template_header('Create') ?>

<div class="content update">
    <h2>Create Order</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <label for="baju">Baju</label>
        <select class="option" type="text" name="baju" id="baju">
            <option value="pilih">-Pilih Tipe Baju-</option>
            <option value="home-kit">Home Kit</option>
            <option value="away-kit">Away Kit</option>
            <option value="third-kit">Third Kit</option>
            <option value="training-wear">Training Wear</option>
        </select>
        <br>
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <label for="no_wa">No. Wa</label>
        <input type="text" name="no_wa" id="no_wa">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="gambar">Kartu Identitas</label>
        <input type="file" name="gambar" id="gambar">
        <input type="submit" name="submit" value="Create">
    </form>
    <?php if ($msg) : ?>
        <p><?= $msg ?></p>
        <script>
            window.location = "read.php", sleep(10);
        </script>

    <?php endif; ?>
</div>