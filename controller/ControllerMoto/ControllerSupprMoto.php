<?php

$requete_supprmoto = "DELETE FROM moto WHERE id = " . $_GET['id'];

try {
    $sth = $bdd->prepare($requete_supprmoto);
    $sth->execute();
    header('Location: index.php?action=motos'); 
} catch (PDOException $e) {
    echo "Erreur à la suppression de la moto : " . $e->getMessage();
}


?>