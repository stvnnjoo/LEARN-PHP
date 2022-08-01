<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Mencari Bilangan Terbesar dari 100 bilangan</h3>
<form action="index1&2.php" method="POST">
    <?php
        for ($i = 1; $i < 101; $i++){
        $random = rand(1000,0);
        echo '
        <label for = "bil'.$i.'"> Bilangan '.$i.' </label>
        <input type="number" name="bil'.$i.'" value="'.$random.'"><br> ';
        }
    
        
    ?>
     <input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        for ($i = 1; $i < 101; $i++){
        $bilangan[$i] = $_POST['bil' . $i];
        $data[$i] = $_POST['bil' . $i];
        $hasil = max($data);
        
        }
        die("Bilangan terbesarnya: $hasil");
    }

?>