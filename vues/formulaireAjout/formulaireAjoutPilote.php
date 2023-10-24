<div class="formulaire">
    <div class="titre">
        <h1 class="heading">Ajout Pilote</h1>
    </div>
    <br><br>
    <form method="post" action="index.php?action=ajoutpilote">
        
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom"><br>

        <label for="nationalite">Nationalité:</label>
        <select id="nationalite" name="nationalite">
            
            <?php

            $nationalites = array("Français", "Espagnol", "Italien", "Australien", "Portugais", "Anglais");

            foreach ($nationalites as $nationalite) {
                echo "<option value='" . $nationalite . "'>" . $nationalite . "</option>";
            }
            ?>

        </select><br>

        <label for="dateNaiss">Date de naissance:</label>
        <input type="date" id="dateNaiss" name="dateNaiss"><br>

        <input type="submit" value="Ajouter le Pilote">
    </form>
</div>
