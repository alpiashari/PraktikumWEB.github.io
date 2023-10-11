<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Posttest 4</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' >
</head>
<body>
<div class="mainpage">
        <nav class="navbar">
            <img src="logo.png" class="logo">
            <ul>
                <li><a href="index.php"><b>Home</b></a></li>
                <li><a href="#"><b>Fixture</b></a></li>
                <li><a href="#"><b>Stats</b></a></li>
                <li class="right-menu">
                    <div class="navbar">
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="#"><b>Store</b></a></button>
    
                        <div id="id01" class="modal">
                          
                          <form class="modal-content animate" action="form/index.php" method="post">
                            <div class="imgcontainer">
                              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            </div>
                        
                                <h2 class="isi">Order</h2>
                                <hr align="center" size="4" color="black">
                                    <form action="form/index.php" method="POST">
                                        <label for="fullname"> Full Name </label>
                                            <input
                                                required
                                                placeholder="Input Name"
                                                id="nama"
                                                name="nama"
                                                type="text"
                                                autocomplete='off'
                                            />
                                        <br>
                                
                                        <label for="baju"> Nama Baju </label>
                                        <select name="baju">
                                            <option value="pilih">-Pilih Baju-</option>
                                            <option value="Home-Kit">Home Kit</option>
                                            <option value="Away-Kit">Away Kit</option>
                                            <option value="Third-Kit">Third Kit</option>
                                            <option value="Training-Wear">Training Wear</option>
                                        </select>
                                        <br>
                                
                                        <label for="jumlah"> Jumlah</label>
                                            <input
                                                placeholder="Jumlah"
                                                id="jumlah"
                                                name="jumlah"
                                                type="number"
                                                min="1"
                                            />
                                        <br>
                                
                                        <label for="alamat"> Alamat Rumah </label>
                                            <input
                                                required
                                                placeholder="Alamat"
                                                id="alamat"
                                                name="alamat"
                                                type="text"
                                                autocomplete='off'
                                            />
                                        <br>
                                
                                        <label for="email"> Email </label>
                                        <input
                                            required
                                            placeholder="Email"
                                            id="email"
                                            name="email"
                                            type="email"
                                            autocomplete='off'
                                        />
                                        <br>
                                
                                        <label for="wa"> No WhatsApp </label>
                                        <input
                                            required
                                            placeholder="WhatsApp"
                                            id="wa"
                                            name="wa"
                                            type="text"
                                            autocomplete='off'
                                        />
                                        <br>
                                        
                                        <div class="container" style="background-color:#f1f1f1">
                                            <input type="submit" name="submit" value="Pesan" class="inputan">
                                            <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                    </form>
    
                            </div>
                          </form>
                        </div>
                    </div>
                </li>
                <li><a href="about.php"><b>About Me</b></a></li>
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
            <img src="logo1.png" class="white">
            <img src="logo2.png" class="darkgoldenrod">
        </div>

        <div class="footer">
            <footer>
                <p>Author   @Muhammad Alpi Ashari</p>
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
            if(theme == 'light') {
              // * CHANGE TO DARK
              $('html').css({'filter': 'invert(1)'})
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
        function ppbox(){
            alert("Anda akan melanjutkan ke Halaman Lain !!!")
        }
    </script>
</body>
</html>