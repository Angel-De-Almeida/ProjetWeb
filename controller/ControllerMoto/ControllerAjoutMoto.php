<?php
$modele = $_POST['modele'];
$constructeur = $_POST['constructeur'];
$pays = $_POST['pays'];

$requete_ajoutmoto = "INSERT INTO moto (modele, constructeur, pays) VALUES ('$modele', '$constructeur', '$pays')";

try {
    $requeteSQL = $bdd->prepare($requete_ajoutmoto);
    $requeteSQL->execute();
    header('Location: index.php?action=motos'); 
} catch(PDOException $e) {
    echo "Erreur à l'ajout de la moto : " . $e->getMessage();
}
?>
