<?php
date_default_timezone_set("Asia/Makassar");
session_start();
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 6</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="mainpage">
        <nav class="navbar">
            <img src="img/logo.png" class="logo">
            <p><?= date("l, d-m-Y e") ?></p>
            <ul>
                <li><a href="index.php"><b>Home</b></a></li>
                <li><a href="indexorder.php"><b>Order</b></a></li>
                <li><a href="#"><b>Stats</b></a></li>
                <li><a href="about.php"><b>About Me</b></a></li>
                <?php if (!isset($_SESSION["sida"])) { ?>
                    <li><a href="./login/login.php"><b>Login</b></a></li>
                <?php } else { ?>
                    <li><a href="./login/logout.php"><b>Logout</b></a></li>
                <?php } ?>
                <li><a id="darkmode-toggle"><b>Change Mode</b></a></li>
            </ul>
        </nav>
        <div class="content">
            <h1>FC BARCELONA</h1>
            <p>Barcelona Football Club, commonly referred to as Barcelona and colloquially known as Barça</p>
            <p> is a professional football club based in Barcelona, Catalonia, Spain,</p>
            <p>that competes in La Liga, the top flight of Spanish football.</p>
            <a href="https://en.wikipedia.org/wiki/FC_Barcelona" target="_blank" onclick="ppbox()">FULL WIKIPEDIA PAGE</a>
        </div>

        <div class="images">
            <img src="img/logo1.png" class="white">
            <img src="img/logo2.png" class="darkgoldenrod">
        </div>

        <div class="footer">
            <footer>
                <p>Author @Muhammad Alpi Ashari</p>
                <p>2023</p>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            const darkmodeToggle = document.getElementById('darkmode-toggle')
            darkmodeToggle.addEventListener('click', function() {
                const theme = $('html').attr('data-theme');
                if (theme == 'light') {
                    // * CHANGE TO DARK
                    $('html').css({
                        'filter': 'invert(1)'
                    })
                    $('html').attr('data-theme', 'dark');
                    $('ul').addClass('dark-mode');
                } else {
                    // * CHANGE TO LIGHT
                    $('html').removeAttr('style');
                    $('html').attr('data-theme', 'light')
                    $('ul').removeClass('dark-mode');
                }
            });
        });
    </script>
    <script>
        var modal = document.getElementById('id01');


        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        const bio = document.getElementsByClassName('datadiri');
    </script>
    <script>
        function ppbox() {
            alert("Anda akan melanjutkan ke Halaman Lain !!!")
        }
    </script>
</body>

</html>