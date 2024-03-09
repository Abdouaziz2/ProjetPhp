<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie des résultats électoraux</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .candidat-item {
            margin-bottom: 10px;
        }
        body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    font-family: 'lato' sans-serif;
    margin: 70px 0px;
   background: #0069d6;
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
span {
    color:red;
    font-weight: bold;
    font-size: 2 rem;


}
    </style>
    <script>
        //Fonction pour gérer l'ajout des candidats
        function ajouterCandidat() {
            const container = document.getElementById('candidatsContainer');
            const nombreCandidats = container.querySelectorAll('.candidat-item').length;
            const indexCandidat = nombreCandidats + 1;
            const html = `<div class="candidat-item">
                            <label for="nom-${indexCandidat}">Nom du candidat ${indexCandidat}: </label>
                            <input type="text" id="nom-${indexCandidat}" name="candidats[${indexCandidat}][nom]" required>
                            <label for="parti-${indexCandidat}"> Partie Politique: </label>
                            <input type="text" id="parti-${indexCandidat}" name="candidats[${indexCandidat}][parti]" required>
                            <label for="voix-${indexCandidat}"> Voix: </label>
                            <input type="number" id="voix-${indexCandidat}" name="candidats[${indexCandidat}][voix]" required>
                          </div>`;
            container.innerHTML += html;
        }
    </script>
</head>
<body>

<div class="container text-center">
    <h1 class="mb-4">Calcule des Résultats</h1>
    <p class="mb-4"> <strong>Calcule Electeur </strong>est une application Web qui vous permet de <br>
     calculer des resultats electoreaux <br> tout en grantissant la securité et l'efficacité <br>
     Veuillez cliquer sur le bouton pour Ajouter des Candidats <br>,
     ensuite vous cliquer calculer les scores 
     <h5><span>*</span>Nottez que vous pouvez Ajouter autant de candidat que vous voulez</h3><br>
    </p>
    <form action="process.php" method="post" class="text-left">
        <div id="candidatsContainer"></div>
        <button type="button" class="btn btn-primary mt-3" onclick="ajouterCandidat()">Ajouter candidat</button>
        <input type="submit" class="btn btn-success mt-3" value="Calculer les scores">
    </form>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.5/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
<footer>
        <p>&copy; STI2 IPD 2024</p>
    </footer>
</body>
</html>
