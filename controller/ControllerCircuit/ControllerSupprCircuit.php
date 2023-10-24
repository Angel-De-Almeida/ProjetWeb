<?php

$requete_supprcircuit = "DELETE FROM circuit WHERE id = " . $_GET['id'];

try {
    $sth = $bdd->prepare($requete_supprcircuit);
    $sth->execute();
    header('Location: index.php?action=circuits'); 
} catch (PDOException $e) {
    echo "Erreur à la suppression du circuit : " . $e->getMessage();
}


?>