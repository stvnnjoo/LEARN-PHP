<?php
	//tipe data string menggunakan metode single quoted
  $string1 = 'Ini adalah contoh string sederhana';
  $string2 = 'Variabel juga tidak otomatis ditampilkan : $string1';
 
	  echo $string1; echo "<br>"; //br berfungsi untuk membuat baris baru
	  echo $string2; 
?>
<?php
echo "<br>";echo "<br>";
	
	//tipe data string menggunakan metode double quoted
    $stringa = "Ini adalah contoh string sederhana 2";
    $stringb = "Variabel akan otomatis ditampilkan : $stringa";
 
	echo $stringa; echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $stringb;
    ?>
    
    <?php
    	echo "<br>";echo "<br>";

        $nama = "Steven";
        $umur = 15;
      
        echo "Nama saya adalah ", $nama, " dan saya berumur ", $umur; echo "<br>";
        echo "Nama saya adalah ".$nama." dan saya berumur ".$umur; echo "<br>";
        ?>

<?php
echo "<br>";echo "<br>";

$a = "1";
$b = 2;
echo $a + $b;
?>