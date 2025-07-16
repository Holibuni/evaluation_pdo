<?php
// Connexion a la base de donnees
$server = "localhost";
$dbname = "pdo_emprunts";
$user = "root";
$pwd = "10-Ch0up3!!3";

try {
    $bdd = new PDO("mysql:host=$server;dbname=$dbname", $user, $pwd);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}