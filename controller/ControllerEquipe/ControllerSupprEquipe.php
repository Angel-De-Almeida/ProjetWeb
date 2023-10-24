<?php

$requete_supprequipe = "DELETE FROM team WHERE id = " . $_GET['id'];

try {
    $sth = $bdd->prepare($requete_supprequipe);
    $sth->execute();
    header('Location: index.php?action=equipes'); 
} catch (PDOException $e) {
    echo "Erreur à la suppression de l'équipe : " . $e->getMessage();
}


?>