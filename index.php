<?php
include 'dao/Connexion.php';
include 'vues/header.php';
?>

<header>

<?php
$action = isset($_GET['action']) ? $_GET['action'] : '';

// LIEN

if($action == "accueil"){
    include "vues/Accueil.php";
}

if($action == "pilotes"){
    include "vues/listePilotes.php";
}

if($action == "equipes"){
    include "vues/listeEquipes.php";
}

if($action == "circuits"){
    include "vues/listeCircuits.php";
}

if($action == "courses"){
    include "vues/listeCourses.php";
}

if($action == "motos"){
    include "vues/listeMotos.php";
}

if($action == "infopilotes"){
    include "vues/infoPilotes.php";
}

/* MODIFICATION */

if($action == "modifpilote"){
    include "controller/ControllerPilote/ControllerModifPilote.php";
}

if($action == "formulairemodifpilote"){
    include "vues/formulaireModif/formulaireModifPilote.php";
}

if($action == "modifequipe"){
    include "controller/ControllerEquipe/ControllerModifEquipe.php";
}

if($action == "formulairemodifequipe"){
    include "vues/formulaireModif/formulaireModifEquipe.php";
}

if($action == "modifcircuit"){
    include "controller/ControllerCircuit/ControllerModifCircuit.php";
}

if($action == "formulairemodifcircuit"){
    include "vues/formulaireModif/formulaireModifCircuit.php";
}

if($action == "modifmoto"){
    include "controller/ControllerMoto/ControllerModifMoto.php";
}

if($action == "formulairemodifmoto"){
    include "vues/formulaireModif/formulaireModifMoto.php";
}

if($action == "modifcourse"){
    include "controller/ControllerCourse/ControllerModifCourse.php";
}

if($action == "formulairemodifcourse"){
    include "vues/formulaireModif/formulaireModifCourse.php";
}


/* SUPPRESSION */ 

if($action == "supprpilote"){
    include "controller/ControllerPilote/ControllerSupprPilote.php";
}

if($action == "supprequipe"){
    include "controller/ControllerEquipe/ControllerSupprEquipe.php";
}

if($action == "supprcircuit"){
    include "controller/ControllerCircuit/ControllerSupprCircuit.php";
}

if($action == "supprmoto"){
    include "controller/ControllerMoto/ControllerSupprMoto.php";
}

if($action == "supprcourse"){
    include "controller/ControllerCourse/ControllerSupprCourse.php";
}

/* CREATION */

if($action == "ajoutpilote"){
    include "controller/ControllerPilote/ControllerAjoutPilote.php";
}

if($action == "formulaireajoutpilote"){
    include "vues/formulaireAjout/formulaireAjoutPilote.php";
}

if($action == "ajoutequipe"){
    include "controller/ControllerEquipe/ControllerAjoutEquipe.php";
}

if($action == "formulaireajoutequipe"){
    include "vues/formulaireAjout/formulaireAjoutEquipe.php";
}

if($action == "ajoutcircuit"){
    include "controller/ControllerCircuit/ControllerAjoutCircuit.php";
}

if($action == "formulaireajoutcircuit"){
    include "vues/formulaireAjout/formulaireAjoutCircuit.php";
}

if($action == "ajoutmoto"){
    include "controller/ControllerMoto/ControllerAjoutMoto.php";
}

if($action == "formulaireajoutmoto"){
    include "vues/formulaireAjout/formulaireAjoutMoto.php";
}

if($action == "ajoutcourse"){
    include "controller/ControllerCourse/ControllerAjoutCourse.php";
}

if($action == "formulaireajoutcourse"){
    include "vues/formulaireAjout/formulaireAjoutCourse.php";
}

?>

</header>
