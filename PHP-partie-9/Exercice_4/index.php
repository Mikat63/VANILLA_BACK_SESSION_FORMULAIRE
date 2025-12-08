<?php
$timeStamp = time();
$timeStampMkTime = mktime(15, 0, 0, 8, 2, 2016);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 8 - Exercice 4</title>
</head>

<body>

    <header>
        <h1>PHP partie 9 - Exercice 4</h1>
    </header>

    <main>
        <div class="date_container">
            <?php echo "<p>Bonjour, le timestamp du jour est de $timeStamp.</p>"; ?>
            <?php echo "<p>Le timestamp du mardi 2 août 2016 à 15h00 est de $timeStampMkTime.</p>";  ?>
        </div>
    </main>
</body>

</html>