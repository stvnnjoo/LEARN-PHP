<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1</title>
</head>
<body>
 <h1> Level 1 (Part 2)</h1>
 
<form method="post" action="index2.php">
        <label> Bilangan 1 </label>
        <input type="number" name="bilangan1">

    <p>
        <label> Bilangan 2 </label>
        <input type="number" name="bilangan2">
    </p>
    <p>
        <label> Bilangan 3 </label>
        <input type="number" name="bilangan3"> <br>
    </p>
        <input type="submit" name="daftar" value= "Input">
</form>

<?php
    
    echo "<br>";

    @$bil1 = $_POST["bilangan1"];
    @$bil2 = $_POST["bilangan2"];
    @$bil3 = $_POST["bilangan3"];
   
    $array = array($bil1, $bil2, $bil3);
    

if(isset($_POST['daftar'])){
    if(!empty($bil1) && !empty($bil2) && !empty($bil3)){

        if($bil1 == $bil2 and $bil2 == $bil3){
            echo "nilai yang di imput sama <br> nilai terbesar adalah: " .max($array);
        }elseif($bil1 > $bil2 and $bil1 > $bil3){
            echo"nilai yang di input adalah $bil1, $bil2, dan $bil3";
            echo "<br>";
            echo " bilangan yang terbesar adalah $bil1";
        }elseif($bil2 > $bil1 and $bil2 > $bil3){
            echo"nilai yang di input adalah $bil1, $bil2, dan $bil3";
            echo "<br>"; 
            echo " bilangan yang terbesar adalah $bil2 ";
        }elseif($bil3 > $bil1 and $bil3 > $bil2){
            echo"nilai yang di input adalah $bil1, $bil2, dan $bil3";
            echo "<br>";  
            echo "nilai yang terbesar adalah $bil3";
        }
    }else{
        echo "data belum terisi lengkap";
    }
}

?>


</body>
</html>