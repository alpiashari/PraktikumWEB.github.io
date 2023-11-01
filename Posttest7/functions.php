<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$nama_db = 'posttest7';
$koneksi = mysqli_connect($host, $user, $pass, $nama_db);

if (!$koneksi) {
  die("Koneksi dengan database gagal: " . mysqli_connect_error());
}

function pdo_connect_mysql()
{
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root';
  $DATABASE_PASS = '';
  $DATABASE_NAME = 'posttest7';
  try {
    return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
  } catch (PDOException $exception) {
    exit('Failed to connect to database!');
  }
}


function template_header($title)
{
  echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="tambahan">
    <nav class="navtop">
    	<div>
    		<h1>Order</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fa fa-shopping-cart"></i>Order</a>
			<a href="index.php"> <i class="fa fa-book"></i>Web Awal</a>
    	</div>
    </nav>
EOT;
}
