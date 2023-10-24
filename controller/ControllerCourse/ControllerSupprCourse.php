<?php

$requete_supprcourse = "DELETE FROM course WHERE id = " . $_GET['id'];

try {
    $sth = $bdd->prepare($requete_supprcourse);
    $sth->execute();
    header('Location: index.php?action=courses'); 
} catch (PDOException $e) {
    echo "Erreur à la suppression de la course : " . $e->getMessage();
}


?>