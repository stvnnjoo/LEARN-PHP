<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1</title>
</head>
<body>
 <h1> Level 1 (part 1)</h1> 
 
<form method="post" action="index1.php">
        <label> Bilangan 1 </label>
        <input type="number" name="bilangan1">

    <p>
        <label> Bilangan 2 </label>
        <input type="number" name="bilangan2">
    </p>
        
        <input type="submit" name="daftar" value= "Input">
</form>

<?php
    
    echo "<br>";

    @$bil1 = $_POST["bilangan1"];
    @$bil2 = $_POST["bilangan2"];
    $array = array($bil1, $bil2);

if(isset($_POST['daftar'])){
    
    if(!empty($bil1) && !empty($bil2)){
        if($bil1 > $bil2){
        echo "Nilai yang diinput yaitu $bil1 dan $bil2 ";
        echo "<br>";
        echo "Nilai terbesar yaitu: " .max($array);
        }elseif($bil1 == $bil2){
            echo"kedua nilai sama besar yaitu: " .max($array);
        }else{
        echo "Nilai yang diimput yaitu $bil1 dan $bil2 ";
        echo "<br>";
        echo "Nilai terbesar yaitu: " .max($array);
        }

    }else{
        echo "data masih kosong";
        }
}


?>


</body>
</html>