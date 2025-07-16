<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un emprunt</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
<link rel="stylesheet" href="./assets/style.css" />
</head>
<body>
    <!-- ICI VOTRE CODE -->
     <h1>Ajouter un emprunt</h1>
     <div class="parent">
        <a class="back" href="./index.php">← Retour</a>
    </div>
    <form action="requests/store.php" method="post">
        <section>
            <div>
                <label for="item">Materiel emprunté</label>
                <input type="text" name="item" id="item" required />
            </div>
            <div>
                <label for="employe">Nom de l'employé.e :</label>
                <input type="text" id="employe" name="employe" required />
            </div>
            <div>
                <label for="borrowDate">Date d’emprunt :</label>
                <input type="date" id="borrowDate" name="borrowDate" required />
            </div>
            <div>
                <label for="commentaire"></label>
                <textarea name="commentaire" id="commentaire">Commentaire</textarea>
            </div>
        </section>
            <div>
                <input type="submit" id="submit" value="Valider"/>
            </div>
    </form>
  </body>
</html>