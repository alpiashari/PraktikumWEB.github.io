<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $baju = isset($_POST['baju']) ? $_POST['baju'] : '';
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $no_wa = isset($_POST['no_wa']) ? $_POST['no_wa'] : '';

    $stmt = $pdo->prepare('INSERT INTO pemesanan VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $baju, $jumlah, $alamat, $email, $no_wa,]);
    $msg = 'Created Successfully!';
}
?>


<?= template_header('Create') ?>

<div class="content update">
    <h2>Create Order</h2>
    <form action="" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
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
        <input type="text" name="jumlah" id="jumlah">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <label for="no_wa">No. Wa</label>
        <input type="text" name="no_wa" id="no_wa">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg) : ?>
        <p><?= $msg ?></p>
        <script>
            window.location = "read.php", sleep(10);
        </script>

    <?php endif; ?>
</div>