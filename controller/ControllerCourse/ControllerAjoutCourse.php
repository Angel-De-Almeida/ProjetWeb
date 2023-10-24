<?php
$libelleGP = $_POST['libelleGP'];
$dateCourse = $_POST['dateCourse'];

$requete_ajoutcourse = "INSERT INTO course (libelleGP, dateCourse) VALUES ('$libelleGP', '$dateCourse')";

try {
    $requeteSQL = $bdd->prepare($requete_ajoutcourse);
    $requeteSQL->execute();
    header('Location: index.php?action=courses');
} catch(PDOException $e) {
    echo "Erreur à l'ajout de la course : " . $e->getMessage();
}
?>
