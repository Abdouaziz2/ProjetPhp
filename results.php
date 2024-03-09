<?php
session_start();

if (!isset($_SESSION['resultats'])) {
    echo "Aucun résultat à afficher.";
    exit;
}

$candidats = $_SESSION['resultats'];
$lieuVote = isset($_SESSION['lieuVote']) ? $_SESSION['lieuVote'] : 'Informations non disponibles';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats électoraux</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        h2{
            font-weight: bold;
            text-transform: uppercase;
            font-size: 2 rem;
        }
        footer {
    margin-top: auto;
    background-color: #f1f1f1;
    text-align: center;
    padding: 20px 0;
}
        .header img {
            height: 50px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Republique du Sénégal<br><small>
            <p> Un peuple Un But Une Fois</p>
        </small></h1>
        <img src="drapeu.png" alt="Drapeau">
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="bg-white p-3 mb-3">
                    <h2>Lieux de vote</h2>
                    <p><strong>Commune:</strong> <?= htmlspecialchars($lieuVote['commune'] ?? 'Non spécifié') ?></p>
                    <p><strong>Centre:</strong> <?= htmlspecialchars($lieuVote['centre'] ?? 'Non spécifié') ?></p>
                    <p><strong>Bureau:</strong> <?= htmlspecialchars($lieuVote['bureau'] ?? 'Non spécifié') ?></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="bg-white p-3">
                    <h2>Voici le resultats des Candidats</h2>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nom du candidat</th>
                                <th>Partie Politique</th>
                                <th>Nombre de Voix</th>
                                <th>Voix en pourcentage(%)</th>
                                <th>Statut du candidat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($candidats as $candidat): ?>
                            <tr>
                                <td><?= htmlspecialchars($candidat['nom']) ?></td>
                                <td><?= htmlspecialchars($candidat['parti']) ?></td>
                                <td><?= htmlspecialchars($candidat['voix']) ?></td>
                                <td><?= htmlspecialchars($candidat['pourcentageVoix']) ?>%</td>
                                <td><?= htmlspecialchars($candidat['statut']) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <footer>
        <p>&copy; STI2 IPD 2024</p>
    </footer>
</body>
</html>
