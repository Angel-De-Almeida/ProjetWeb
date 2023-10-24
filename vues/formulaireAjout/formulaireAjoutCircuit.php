<div class="formulaire">
    <div class="titre">
        <h1 class="heading">Ajout Circuit</h1>
    </div>
    <br><br>
    <form method="post" action="index.php?action=ajoutcircuit">
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>

        <label for="pays">Pays :</label>
        <select id="pays" name="pays">
            <?php
            $pays = array("Angleterre", "Australie", "Autriche", "Belgique", "Espagne", "France", "Italie", "Japon", "Malaisie", "Monaco", "Portugal");

            foreach ($pays as $pays) {
                echo "<option value='" . $pays . "'>" . $pays . "</option>";
            }
            ?>
        </select><br>

        <label for="annee">Année :</label>
        <input type="text" id="annee" name="annee"><br>

        <label for="longueur">Longueur :</label>
        <input type="text" id="longueur" name="longueur"><br>

        <input type="submit" value="Ajouter le circuit">
    </form>
</div>
