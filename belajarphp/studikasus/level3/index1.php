<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>level 3 bagian 1</title>
</head>
<body>
<h2>Level 3 bagian 1</h2>
<h3>Mengurutkan Dari Bilangan Terkecil ke Terbesar</h3>

<form action="index1.php" method="post">
    <p>
    <label>Masukan nilai</label><br>
    <input type="number" name="satu">
    </p>
    <p>
    <input type="number" name="dua"></p>
    <p>
    <input type="number" name="tiga"></p>
    <input type="submit" name="submit" value="SUBMIT">
</form>

<?php 
if(isset($_POST['submit'])){
  
    $satu = $_POST['satu'];
    $dua  = $_POST['dua'];
    $tiga = $_POST['tiga'];
    $nilai=array($satu,$dua,$tiga);

    sort($nilai); echo "</br>";

    $jumlah = count($nilai); 
    for($x=0; $x<$jumlah; $x++) {
    echo($nilai)[$x];
    echo"<br>";
    }
    
}
?>
</body>
</html>