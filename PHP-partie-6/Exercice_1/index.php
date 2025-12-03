<?php
$lastname = "";
$firstname = "";

if (isset($_GET['lastname']) && !empty(trim($_GET['lastname']))) {
    $lastname = htmlspecialchars($_GET['lastname']);
}

if (isset($_GET['firstname']) && !empty(trim($_GET['firstname']))) {
    $firstname = htmlspecialchars($_GET['firstname']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 6 - Exercice 1</title>
</head>

<body>
    <p>
        <?php echo "Lastname : {$lastname}" ?>
    </p>
    <p>
        <?php echo "Firstname : {$firstname}" ?>
    </p>
</body>

</html>