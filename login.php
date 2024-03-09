<?php
session_start();
//Recuperation des donnee du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Stockage des info 
    $_SESSION['lieuVote'] = [
        'centre' => $_POST['centre'],
        'commune' => $_POST['commune'],
        'bureau' => $_POST['bureau']
    ];

    // Redirection vers la page d'ajout des candidats
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Centre</title>
    <!--  CDN de Bootstrap -->
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    input type[text]
    {
        width: 50%;
    }
    label{
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
</style>
<body>
    <div class="container mt-5">
        <h1 class="mb-3">Authentification Du centre</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="commune">Commune:</label>
                <input type="text" class="form-control" name="commune" required>
            </div>
            <div class="form-group">
                <label for="centre">Centre de vote:</label>
                <input type="text" class="form-control" name="centre" required>
            </div>
            <div class="form-group">
                <label for="bureau">Bureau de vote:</label>
                <input type="text" class="form-control" name="bureau" required>
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>
    <!-- Scripts JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.5/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <footer>
        <p>&copy; STI2 IPD 2024</p>
    </footer>
</body>
</html>
