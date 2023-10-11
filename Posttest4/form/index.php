<!DOCTYPE html>
<html lang="en" id="bg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    

</head>

<body>
        <h2 class="terima">==== Struk Belanja ====<br>
            Pesanan anda akan segera dikirim
        </h2>
        <hr class="new4" width="95%" size="4" color="#333">
        <div class="hasil">
            <div class="atas">
                <?php
                    if(isset($_POST['submit'])){
                        $nama = $_POST['nama'];
                    }
                    echo "Hai $nama     ";
                    echo "Terimakasih telah membeli di tempat kami";
                ?>
            </div>

            <div class="tengah" align="center">
                <?php
                    if(isset($_POST['submit'])){
                        $baju = $_POST['baju'];
                        $jumlah = $_POST['jumlah'];
                        $alamat = $_POST['alamat'];
                        $wa = $_POST['wa'];
                        $email = $_POST['email'];
                    }
                    echo "<br> Data Pesanan mu :";
                    echo "<br>";
                    

                    echo "<pre> Baju : $baju";
                    echo "<br> Jumlah   : $jumlah";
                    echo "<br> Alamat   : $alamat";
                    echo "<br> Whatsapp : $wa";
                    echo "<br> Email    : $email";

                ?>

            
            </div>
            <div class="bawah">
                *Silahkan cek Email anda untuk melanjutkan ke pembayaran.
        </div>
        <hr class="new4" width="100%" size="4" color="#333">
        </div>

    </main>
        <h2 class="terima">==== Terima Kasih ====<br>
            WWW.Barça Shop.com<br>
          
        </h2>
    </footer>

<script>
    const ket = document.getElementsByClassName('hasil');
    const data = document.getElementsByTagName('pre');
    </script>
</body>

</html>