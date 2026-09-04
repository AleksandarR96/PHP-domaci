<?php

    $naslov = "Postani porgramer";
    $meni = ["Glanva", "O nama", "Kontakt"];
    $trenutnaGodina = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$naslov;?></title>
</head>
<body>
    <h1><?=$naslov;?></h1>
    <nav>
        <a href="home.php"><?=$meni[0]?></a>
        <a href="about_us.php"><?=$meni[1]?></a>
        <a href="contact.php"><?=$meni[2]?></a>
    </nav>
</body>

<footer>
    <p>Copyright © Sajt Oaza <?=$trenutnaGodina?></p>
</footer>
</html>