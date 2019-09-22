<?php
    include 'utils.inc.php';
    start_page('Lire Enregistrements');

    $file = 'data.txt';
    if(!($file = fopen($file, 'r'))) {
        echo 'Erreur de lecture';
        exit();
    }
    echo 'Liste des utilisateurs : <br>';
    for ($cpt = 1; $line = fgets($file, 255); ++$cpt)
        echo 'Utilisateur n°' . $cpt . ' : ' . $line . '<br>';
    fclose($file);

    end_page();
