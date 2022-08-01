<?php

$a = 5;
$b = 2;

//Penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

//Pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

//Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

?>

<?php
//ini opertor aritmatika
$x = 83;
$x = $x + 10; //maka nilai a akan menjadi 83 + 10 = 93

//ini operator penugasan
$y = 10;
$y += 10; //sekarang nilai b akan menjadi 10 + 10 = 20
?>
<?php
$score = 0;

$score++;
$score++;
$score++;

echo $score; //hasilnya 3
?>

<?php

$a = 6;
$b = 2;

//menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";

?>
<?php

$a = true;
$b = false;

//variabel $c akan bernilai false
$c = $a && $b;
echo $c;
echo "<hr>";

//variabel $c akan bernilai true
$c = $a || $b;
echo $c;
echo "<hr>";

//variabel $c akan bernilai false
$c = !$a;
echo $c;
echo "<hr>";

?>

<?php

$suka = true;

//menggunakan operator ternary
$jawab = $suka ? "iya": "tidak";

//menampilkan jawaban
echo $jawab;

?>

<?php

    //menghitung luas segitiga
    $a = 10;
    $t = 8;

    //masukan rumus segitiga
    $luassegitiga = ($a * $t)/2;

    //tampilkan
    echo "Luas segitiga yang memiliki alas $a cm dan tinggi $t cm adalah $luassegitiga cm";

    $a = 3.14;
    $b = 8;
    $c = 2;
    $luaslingkaran = ($a * $b ** $c) ;
    echo "luas Lingkaran yang memiliki jari jari $b cm adalah $luaslingkaran cm"
?>
<?php
//perbandingan 19 dan 20
echo "<br>";
echo "1. 19 < 20 = "; var_dump(19<20);
echo "<br>";
echo "2. 19 > 20 = "; var_dump(19>20);
?>





