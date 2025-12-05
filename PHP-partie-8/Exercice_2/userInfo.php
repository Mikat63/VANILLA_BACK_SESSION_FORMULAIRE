<?php
session_start();

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$age = $_SESSION['age'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 8 - Exercice 2 - utilisateur</title>
</head>

<body>
    <header>
        <h1>PHP partie 8 - Exercice 1</h1>
    </header>
    <main class="main_section">
        <div class="main_container_user-php">
            <div class="info_container">
                <div class="main_title">
                    <h2 class="main_user_title">vos informations </h2>
                </div>
                <div class="info_user_container">
                    <?php echo "<p><span>Nom :</span>" . " " .  htmlspecialchars($lastname) ?></p>
                    <?php echo "<p><span>Prénom :</span>" . " " .  htmlspecialchars($firstname) ?></p>
                    <?php echo "<p><span>Age :</span>" . " " .  htmlspecialchars($age) ?></p>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>