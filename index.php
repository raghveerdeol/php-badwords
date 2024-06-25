<?php
    $var1 = "Tutti noi prima o poi moriamo. Questo significa forse che la vita è priva di significato? Significa che il fatto di essere venuti al mondo non ha alcun senso? Vale lo stesso per i nostri compagni caduti? Quei soldati non hanno avuto significato? No, non è così! A dare loro un significato siamo noi! Quei valorosi e sfortunati caduti gli unici a poterli ricordare siamo noi, i vivi! Noi moriremo qui! E affideremo il nostro significato a chi è rimasto in vita! Questo è l’unico modo che abbiamo per lottare contro questo mondo crudele!"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <p>
            <?php
                echo $var1;
            ?>
            <?php
                echo $_GET["censure"];
            ?>
        </p>
        <form action="./index.php" method="get">
            <label for="censure">Parola da censurare:</label>
            <input type="text" name="censure" id="censure">
            <input type="submit">
        </form>
    </main>
</body>
</html>