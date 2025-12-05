<?php
session_start();
$firstnameUser = "Mickael";
$lastnameUser = "TOTO";
$age = 36;

$_SESSION['firstname'] = $firstnameUser;
$_SESSION['lastname'] = $lastnameUser;
$_SESSION['age'] = $age;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 8 - Exercice 2 - Accueil</title>
</head>

<body>
    <header>
        <h1>PHP partie 8 - Exercice 1</h1>
    </header>

    <main>
        <div class="main_container">
            <h2>Cliquer pour voir vos informations</h2>
            <a class=button_user href="userInfo.php">Voir</a>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>