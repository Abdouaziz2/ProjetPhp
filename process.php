<?php

require_once 'functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['candidats'])) {
    $candidats = $_POST['candidats'];
    $_SESSION['resultats'] = calculerResultats($candidats);
    header('Location: results.php');
    exit;
} else {
    echo "Aucune donnée soumise.";
}
?>