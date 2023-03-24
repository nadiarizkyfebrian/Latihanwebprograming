<?php

$pr = "p1";
if(isset($_GET["pg"])){
    $pr = $_GET["pg"];
}
$konten="";
$judulpage="";
switch ($pr) {
    case "p1":
        $judulpage = "Halaman 1";
        $konten = "<h3>Halaman p1</h3>" ;
        $konten .= "<p>Menampilkan halaman p1</p>" ;
        break;
    case "p2":
        $judulpage = "Halaman 2";
        $konten ="<h3>Halaman p2</h3>" ;
        $konten .="<p>Menampilkan halaman p2</p>" ;
        break;
     case "p3":
        $judulpage = "Halaman 3";
        $konten = "<h3>Halaman p3</h3>" ;
        $konten .= "<p>Menampilkan halaman p3</p>" ;
        break;
    default:
    $judulpage = "Halaman 1";
    $konten = "<h3>Halaman p1</h3>" ;
    $konten .= "<p>Menampilkan halaman p1</p>" ;
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$judulpage;?> </title>
</head>
<body>
    <a href="latihan03.php?pg=p1">Halaman1</a> <a href="latihan03.php?pg=p2">Halaman2</a> <a href="latihan03.php?pg=p3">Halaman3</a>

   <?php
   echo $konten;
   ?> 
</body>
</html>