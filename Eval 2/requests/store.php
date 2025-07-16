<?php 
// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die();
}

$item = htmlspecialchars($_POST["item"]);
$employe = htmlspecialchars($_POST["employe"]);
$borrowDate = htmlspecialchars($_POST["borrowDate"]);
$commentaire = htmlspecialchars($_POST["commentaire"]);

if (!$item || !$employe || !$borrowDate || !$commentaire) {
    die("Vous n'avez pas rempli correctement les champs requis.");
}
require_once "../config/db.inc.php";

$req = $bdd->prepare("INSERT INTO emprunts (materiel, nom_employe, date_emprunt, commentaire) VALUES (:materiel, :nom_employe, :date_emprunt, :commentaire)");
$req->bindParam(":materiel", $item);
$req->bindParam(":nom_employe", $employe);
$req->bindParam(":date_emprunt", $borrowDate);
$req->bindParam(":commentaire", $commentaire);
$req->execute();

$lastInsertId = $bdd->lastInsertId(); 
if ($lastInsertId) {
    header("Location: ../index.php?message=success&id=$lastInsertId");
} else {
    header("Location: ../index.php?message=failed");
}
?>