<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les emprunts</title>
    <link rel="stylesheet" href="./assets/style.css" />
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    <!-- ICI VOTRE CODE -->
    <h1>Emprunts</h1>
     <?php
        require_once "./config/db.inc.php"; 
        $req = $bdd->prepare("SELECT * FROM emprunts");
        $req->execute();
        $emprunts = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($emprunts as $emprunt) {
            echo "<li>";
            echo $emprunt['nom_employe'];
            echo "</li>";
        }
     ?>
     <a class="entry" href="./add.php">→ Voir tous les emprunts</a>
</body>
</html>