<?php
$dateNow = new DateTime();
$DateToCompare = new DateTime("2016-05-16");
$diffDays = $dateNow->diff($DateToCompare);
$numberDays = $diffDays->days;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 8 - Exercice 5</title>
</head>

<body>

    <header>
        <h1>PHP partie 9 - Exercice 5</h1>
    </header>

    <main>
        <div class="date_container">
            <?php echo "<p>Bonjour, il s'est écoulé depuis le 16 mai 2016, $numberDays jours.</p>"; ?>
        </div>
    </main>
</body>

</html>