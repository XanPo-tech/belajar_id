<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>LARP_METER:</label><br>
        <input type="text" name="larp_meter"><br>
        <input type="submit" value="total">
    </form>
    <form action="index.php" method="post">
        <label>Nilai</label><br>
        <input type="text" name="nilai_satu"><br>
        <input type="text" name="nilai_dua"><br>
        <input type="text" name="nilai_tiga"><br>
        <input type="submit" value="total_nilai">
    </form>
    
</body>
</html>

<?php
    /*$_GET, $_POST
            variable spesial untuk nerima data dari file HTML
            dengan <form action="file.php" method="get">
    */

    /*echo "{$_POST["larp_meter"]}<br>";

    if($_POST["larp_meter"] >= 2 && $_POST["larp_meter"] <= 99){
        echo "NEW TO LARP<br>";
    }elseif($_POST["larp_meter"] >= 100 && $_POST["larp_meter"] <= 199){
        echo "KEEP LARPING<br>";
    }elseif($_POST["larp_meter"] >= 200 && $_POST["larp_meter"] <= 299){
        echo "HELLO LARPER<br>";
    }elseif($_POST["larp_meter"] >= 300){
        echo "THE WALKING LARP<br>";
    }else{
        echo "JUST QUIT GNG<br>";
    }
    */
     

    echo "{$_POST["nilai_satu"]}<br>";
    echo "{$_POST["nilai_dua"]}<br>";
    echo "{$_POST["nilai_tiga"]}<br>";

    $nilai_final = ($_POST["nilai_satu"] * 0.30) + ($_POST["nilai_dua"] * 0.30) + ($_POST["nilai_tiga"] * 0.40);
    echo $nilai_final;
    
   
    
    


?>
 