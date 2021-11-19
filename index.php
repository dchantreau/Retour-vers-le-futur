<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div class ="lesdates">
            <?php

            $presentTime = new DateTime;
            $destinationTime = new DateTime;
            $destinationTime->setTimestamp(300168678);?>

                <div class = "destinationtime">
                    <div class = "formatdate"><?php echo "Month ". "Day " . "Year " . "AM/PM " . "Hour " . "Min"?></div>
                    <div class = "date"><?php echo $destinationTime->format('M d Y A h i') . '<br>';?></div>
                        <h1>DESTINATION TIME</h1>
                </div>

                <div class = "presenttime">
                    <div class = "formatdate"><?php echo "Month ". "Day " . "Year " . "AM/PM " . "Hour " . "Min"?></div>
                    <div class = "date"><?php echo $presentTime->format('M d Y A h i').'<br>';?> </div>
                        <h1>PRESENT TIME</h1>   
                </div>
        </div>
        <div class="message">
            <?php
                // différences entre les deux dates
                $timeBetweenDate = $presentTime->diff($destinationTime);

                echo " Il y a " . $timeBetweenDate->y . " ans " . $timeBetweenDate->m . " mois " . $timeBetweenDate->d . " jours " .
                $timeBetweenDate->h . " heures " . $timeBetweenDate->i . " minutes entre les deux dates.";

                // M affiche le mois en abrégé
                // d jour du mois, sur deux chiffres (avec un zéro initial)
                // Y	Année sur 4 chiffres	Exemples : 1999 ou 2003
                // A	Ante meridiem et Post meridiem en majuscules	AM ou PM
                // h	Heure, au format 12h, avec les zéros initiaux	01 à 12
                // i = secondes sur deux chiffres également
            ?>
        </div>    
    </body>
</html>