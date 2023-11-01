<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $baju = $_POST["baju"];
    $jumlah = $_POST["jumlah"];
    $alamat = $_POST["alamat"];
    $no_wa = $_POST["no_wa"];
    $email = $_POST["email"];

    if ($_FILES["gambar"]["name"] != "") {
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

        $query = mysqli_query($koneksi, "UPDATE pemesanan SET nama = '$nama', baju = '$baju', jumlah = $jumlah, alamat = '$alamat', email = '$email', no_wa = '$no_wa', gambar = '$nm_gambar' WHERE `id` = $id");
        if ($query) {
            $msg = 'Updated Successfully!';
        }
    } else {
        $query = mysqli_query($koneksi, "UPDATE pemesanan SET nama = '$nama', baju = '$baju', jumlah = $jumlah, alamat = '$alamat', email = '$email', no_wa = '$no_wa' WHERE `id` = $id");
        if ($query) {
            $msg = 'Updated Successfully!';
        }
    }
}
$stmt = $pdo->prepare('SELECT * FROM pemesanan WHERE id = ?');
$stmt->execute([$_GET['id']]);
$order = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$order) {
    exit('order doesnt exist with that ID!');
}
?>



<?= template_header('Update') ?>

<div class="content update">
    <h2>Update Order #<?= $order['id'] ?></h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="id">ID</label>
        <input type="text" name="id" value="<?= $order['id'] ?>" readonly id="id">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $order['nama'] ?>" id="nama">
        <label for="baju">Baju</label>
        <input type="text" name="baju" value="<?= $order['baju'] ?>" id="baju">
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" value="<?= $order['jumlah'] ?>" id="jumlah">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="<?= $order['alamat'] ?>" id="alamat">
        <label for="no_wa">No. Wa</label>
        <input type="text" name="no_wa" value="<?= $order['no_wa'] ?>" id="no_wa">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?= $order['email'] ?>" id="email">
        <label for="gambar">Kartu Identitas</label>
        <input type="file" name="gambar" id="gambar">
        <input type="submit" name="submit" value="Update">
    </form>
    <?php if ($msg) : ?>
        <p><?= $msg ?></p>
        <script>
            window.location = "read.php";
        </script>
    <?php endif; ?>
</div>