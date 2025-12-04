# PHP - Les paramètres d'URL

## Exercice 1

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?lastname=Nemare&firstname=Jean**

## Exercice 2

Faire une page index.php. Tester sur cette page que le paramètre **age** existe et si c'est le cas l'afficher sinon le signaler : **index.php?lastname=Nemare&firstname=Jean**

## Exercice 3

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?startDate=2/05/2016&endDate=27/11/2016**

## Exercice 4

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?language=PHP&server=LAMP**

## Exercice 5

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?week=12**

## Exercice 6

Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: **index.php?building=12&room=101**

<!-- Index.php -->

```php
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP partie 7 - Exercice 1</title>
</head>

<body>
    <div>
        <form action="process/user.php" method="GET">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" placeholder="Entrez votre nom"      minlength="3" maxlength="30" required>
            </div>
            <br>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" minlength="3" maxlength="30" required>
            </div>
            <br>
            <div>
                <button type="submit">Valider</button>
            </div>
        </form>
        <div>
            <?php
            if (isset($_GET['success'])) {
                echo "<p class='green'>Données récupérées avec succès</p>";
            } else if (isset($_GET['error'])) {
                switch (($_GET['error'])) {
                    case 'bad_method':
                        echo "<p class='red'>Méthode incorrecte</p>";
                        break;
                    case 'missing':
                        echo "<p class='red'>Tous les champs sont requis</p>";
                        break;
                    case 'empty':
                        echo "<p class='red'>Les champs ne peuvent être vides</p>";
                        break;
                    case 'min':
                        echo "<p class='red'>Les champs doivent avoir minimum 3 caractères</p>";
                        break;
                    case 'max':
                        echo "<p class='red'>Les champs doivent avoir maximum 30 caractères</p>";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
```

<!-- user.php -->

```php
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ../index.php?error=bad_method');
    exit();
}

if (!isset($_GET['nom']) || !isset($_GET['prenom'])) {
    header('location: ../index.php?error=missing');
    exit();
}

if (empty(trim($_GET['nom'])) || empty(trim($_GET['prenom']))) {
    header('location: ../index.php?error=empty');
    exit();
}

if (strlen($_GET['nom']) < 3 || strlen($_GET['prenom']) < 3) {
    header('location: ../index.php?error=min');
    exit();
}

if (strlen($_GET['nom']) > 30 || strlen($_GET['prenom']) > 30) {
    header('location: ../index.php?error=max');
    exit();
}

$nom = htmlspecialchars(strip_tags($_GET['nom']));
$prenom = htmlspecialchars(strip_tags($_GET['prenom']));

header("location: ../index.php?success=success_process");

```
