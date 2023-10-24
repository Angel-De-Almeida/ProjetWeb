<?php
$nom = $_POST['nom'];
$pays = $_POST['pays'];
$annee = $_POST['annee'];
$longueur = $_POST['longueur'];

$requete_ajoutcircuit = "INSERT INTO circuit (nom, pays, annee, longueur) VALUES ('$nom', '$pays', '$annee', '$longueur')";

try {
    $requeteSQL = $bdd->prepare($requete_ajoutcircuit);
    $requeteSQL->execute();
    header('Location: index.php?action=circuits');
} catch(PDOException $e) {
    echo "Erreur à l'ajout du circuit : " . $e->getMessage();
}
?>
