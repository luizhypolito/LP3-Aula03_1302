<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 - Aula 03</title>
</head>
<body>
    <h1>LP3 - Aula 03</h1>

    <?php
    for($i=0;$i<10;$i+=2){
        echo "$i<br>";
        if($i==8){
            echo "<br><br>"; 
        }
    }


    $i=1;
    while($i<10){
        echo "$i<br>";
        $i+=2;
    }
    ?>
    <h1>Multiplos de 3 de 0 à 100</h1>

    <ul>
    <?php

    for($i=0;$i<100;$i+=3){ ?>

        <li>Número : <?= $i ?></li>

    <?php }
    ?>

    </ul>

    <h2>Questão 1 </h2>

    <?php
    for($i=100;$i>0;$i-=5){
        echo "$i<br>";
    }
    echo "Acabou!"
    ?>

    <h2>Questão 2</h2>

    <?php
    $soma = 0;
    $cont = 0;

    for($i=14;$i<73;$i++){
        $soma+=$i;
        $cont++;
    }
    $media = $soma/$cont;
    echo "A média é $media";
    ?>

    <h2>Questão 2</h2>

    <?php
    for($i=30;$i>0;$i--){
        if($i%4==0){
            echo "[$i] <br>";
        }
        else{
            echo "$i <br>";
        }
    }
    ?>

    
</body>
</html>