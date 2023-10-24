<?php

$requete_supprpilote = "DELETE FROM pilote WHERE id = " . $_GET['id'];

try {
    $sth = $bdd->prepare($requete_supprpilote);
    $sth->execute();
    header('Location: index.php?action=pilotes'); 
} catch (PDOException $e) {
    echo "Erreur à la suppression du pilote : " . $e->getMessage();
}


?>