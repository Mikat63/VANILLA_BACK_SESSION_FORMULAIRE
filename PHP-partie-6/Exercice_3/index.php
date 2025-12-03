<?php
$startDate = "";
$endDate = "";

if (isset($_GET['startDate']) && !empty(trim($_GET['startDate']))) {
    $startDate = "Date de début : " . htmlspecialchars($_GET['startDate']);
} else {
    $startDate = "Date de début : inconnue";
}

if (isset($_GET['endDate']) && !empty(trim($_GET['endDate']))) {
    $endDate = "Date de fin : " . htmlspecialchars($_GET['endDate']);
} else {
    $endDate = "Date de fin : inconnue";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 6 - Exercice 3</title>
</head>

<body>
    <p>
        <?php echo $startDate . "<br>" . $endDate ?>
    </p>
</body>

</html>