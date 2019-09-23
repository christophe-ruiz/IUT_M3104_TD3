<?php
    include 'utils.inc.php';

    start_page('Bienvenue');
    echo '<h1> Bienvenue ' . $_SESSION['id'] . '</h1>' . PHP_EOL;
    end_page();

