<?php
$judulpage ="Latihan php";
$Konten ="<h3>Belajar PHP</h3><p>Isi dari paragraf</p> <P>Latihan PHP Pemrograman Web</P>";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$judulpage; ?> </title>
</head>
<body>
    <?php
echo $Konten;

    ?>
</body>
</html>