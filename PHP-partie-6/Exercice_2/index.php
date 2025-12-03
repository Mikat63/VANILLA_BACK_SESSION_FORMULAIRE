<?php
    if(isset($_GET['age'])) {
        var_dump($_GET['age']);
    } else {
        echo("Le paramètre âge n'est pas reneigné dans l'url.");
    }