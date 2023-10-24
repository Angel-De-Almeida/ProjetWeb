<?php

$nom = $_POST['nom']; 
$prenom = $_POST['prenom']; 
$nationalite = $_POST['nationalite']; 
$dateNaiss = $_POST['dateNaiss']; 

$requete_ajoutpilote = "INSERT INTO pilote (nom, prenom, nationalite, dateNaiss, idTeam) VALUES ('$nom', '$prenom', '$nationalite', '$dateNaiss', 1)";

try {
    $requeteSQL = $bdd->prepare($requete_ajoutpilote);
    $requeteSQL->execute();
    header('Location: index.php?action=pilotes'); 
} catch(PDOException $e) {
    echo "Erreur à l'ajout du pilote : " . $e->getMessage();
}

    
?>