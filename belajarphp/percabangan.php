<?php
//studi kasus 1//
$baju = false;

if($baju){
	echo "Variable baju bernilai true"; 
}

//jika $baju diubah menjadi false makan data tidak terbaca dikarenakan echo variable baju bernilai true//
?>

<?php
//studi kasus 2//
//$nilai=100;
//echo"Variable tesebut bernilai :{$nilai} <br>";

//if ($nilai >= 100){
    //echo "Peringkat A ";}
//elseif($nilai >= 90) {
    //echo "Peringkat B ";}
//elseif($nilai >= 80) {
    //echo "Peringkat C ";}
//elseif($nilai <= 70) {
    //echo "Peringkat D ";}
//echo"<hr>";
?>


<html>
<body>
    <head>
        <title>Percabangan</title>
    </head>
</body>
<form name="form1" action="percabangan.php" method="POST">
<label>Masukan nilai</label>
<input type="text" name="nilai"><br></br>
<input type="Submit" name="klik" value="KLIK">
</form>
</body>
<?php
if(isset ($_POST["klik"]))
$nilai =$_POST['nilai'];
if ($nilai >= 90){
    echo "Peringkat A ";}
elseif($nilai >= 80) {
    echo "Peringkat B ";}
elseif($nilai >= 70) {
    echo "Peringkat C ";}
elseif($nilai <= 70) {
    echo "Peringkat D ";}
echo"<hr>";
?>
</html>
