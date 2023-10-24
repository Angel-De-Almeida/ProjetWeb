<div class="formulaire">
    <div class="titre">
        <h1 class="heading">Modification Circuit</h1>
    </div>
    <br><br>
    <form method="post" action="index.php?action=modifcircuit">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br>

        <label for="pays">Pays:</label>
        <select id="pays" name="pays">
            <?php
            $paysList = array("France", "Italie", "Espagne", "Allemagne", "Angleterre", "Belgique");
            foreach ($paysList as $pays) {
                echo "<option value='" . $pays . "'>" . $pays . "</option>";
            }
            ?>
        </select><br>

        <label for="annee">Année:</label>
        <input type="text" id="annee" name="annee"><br>

        <label for="longueur">Longueur:</label>
        <input type="text" id="longueur" name="longueur"><br>
        
        <input type="submit" value="Modifier le Circuit">
    </form>
</div>
