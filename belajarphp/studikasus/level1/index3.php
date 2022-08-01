<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1</title>
</head>
<body>
 <h1> Level 1 (Part 3)</h1>
 
<form method="post" action="index3.php">
        <label> Bilangan 1 </label>
        <input type="number" name="nilai1">

    <p>
        <label> Bilangan 2 </label>
        <input type="number" name="nilai2">
    </p>
    <p>
        <label> Bilangan 3 </label>
        <input type="number" name="nilai3"> <br>
    </p>
    <p>
        <label> Bilangan 4 </label>
        <input type="number" name="nilai4"> <br>
    </p>
        <input type="submit" name="daftar" value= "Input">
</form>

<?php
 
@$nilai1=$_POST["nilai1"];
@$nilai2=$_POST["nilai2"];
@$nilai3=$_POST["nilai3"];
@$nilai4=$_POST["nilai4"]; 
$array = array($nilai1, $nilai2, $nilai3, $nilai4);

if(isset($_POST['daftar'])){
    if(!empty($nilai1) && !empty($nilai2) && !empty($nilai3) && !empty($nilai4)){
        if($nilai1 == $nilai2 && $nilai3 == $nilai4){
            echo"nilai yang di input sama";
            echo "yaitu: ".max($array);
        }elseif($nilai1 >= $nilai2 && $nilai1 >= $nilai3){
            if ($nilai1 >= $nilai4){
            echo "nilai yang di input adalah $nilai1, $nilai2, $nilai3 dan $nilai4 <br>";
            echo "nilai yang terbesar:  $nilai1";
            }
        }elseif($nilai2 >= $nilai3 && $nilai2 >= $nilai4){
            if($nilai2 >= $nilai1){
            echo "nilai yang di input adalah $nilai1, $nilai2, $nilai3 dan $nilai4 <br>";
            echo "nilai yang terbesar: $nilai2";
            }
        }elseif($nilai3 >= $nilai4 && $nilai3 >= $nilai1){ 
            if ($nilai3 >= $nilai2){
            echo "nilai yang di input adalah $nilai1, $nilai2, $nilai3 dan $nilai4 <br>";
            echo "nilai yang terbesar: $nilai3";
            }
        }else {
            echo "nilai yang di input adalah $nilai1, $nilai2, $nilai3 dan $nilai4 <br>";
            echo "nilai yang terbesar: $nilai4";
        }
    }else{
        echo "Data belum terisi lengkap";
    }
}
?>