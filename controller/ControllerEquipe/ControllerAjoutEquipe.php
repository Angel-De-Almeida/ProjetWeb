<?php

$libelle = $_POST['libelle']; 
$pays = $_POST['pays']; 
$modeleMoto = $_POST['modeleMoto']; 

$requete_ajoutequipe = "INSERT INTO team (libelle, pays, modeleMoto, idPilote1, idPilote2) VALUES ('$libelle', '$pays', '$modeleMoto', 0, 0)";

try {
    $requeteSQL = $bdd->prepare($requete_ajoutequipe);
    $requeteSQL->execute();
    header('Location: index.php?action=equipes'); 
} catch(PDOException $e) {
    echo "Erreur à l'ajout de l'équipe : " . $e->getMessage();
}

    
?>