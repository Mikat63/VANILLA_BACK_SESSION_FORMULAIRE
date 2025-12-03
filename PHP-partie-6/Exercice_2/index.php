<?php
$age = "";

if (isset($_GET['age']) && !empty(trim($_GET['age']))) {
    $age = "Age : " . htmlspecialchars($_GET['age']);
    
} else {
    $age = "Le paramètre âge n'est pas renseigné dans l'url.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 6 - Exercice 2</title>
</head>

<body>

    <p>
        <?php echo $age ?>
    </p>
</body>

</html>