<?php
if (isset($_GET['building']) && !empty(trim($_GET['building']))) {
    $building = "Building : " . htmlspecialchars($_GET['building']);
} else {
    $building = "Error : building not found";
}

if (isset($_GET['room']) && !empty(trim($_GET['room']))) {
    $room = "room : " . htmlspecialchars($_GET['room']);
} else {
    $room = "Error : room not found";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 6 - Exercice 6</title>
</head>

<body>
    <div>
        <p class="<?php echo ($building === "Error : building not found") ? 'red' : 'green'; ?>">
            <?php echo $building ?>
        </p>

        <p class="<?php echo ($room === "Error : room not found") ? 'red' : 'green'; ?>">
            <?php echo $room ?>
        </p>
    </div>
</body>

</html>