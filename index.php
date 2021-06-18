<?php
    declare(strict_types = 1);
    /*  Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
        Bonus : Le faire en français.

        --> https://www.php.net/manual/en/function.date.php
            or
            https://www.php.net/manual/en/function.setlocale.php
            https://www.php.net/manual/en/function.strftime.php
    */
    setlocale( LC_TIME, 'fr-FR');
    $currentDate= strftime('%A %d %B %G');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 9.3 Date</title>
    </head>
    <body >
        <p>Date courrant formatée en français: <?= $currentDate ?></p>
    </body>
</html>