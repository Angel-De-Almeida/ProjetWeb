<div class="formulaire">
    <div class="titre">
        <h1 class="heading">Ajout Equipe</h1>
    </div>
    <br><br>
    <form method="post" action="index.php?action=ajoutequipe">
        
        <label for="libelle">Libelle :</label>
        <input type="text" id="libelle" name="libelle"><br>

        <label for="pays">Pays :</label>
        <select id="pays" name="pays">
            
            <?php

            $pays = array("Angleterre", "Australie", "Autriche", "Belgique", "Espagne", "France", "Italie", "Japon", "Malaisie", "Monaco", "Portugal");

            foreach ($pays as $pays) {
                echo "<option value='" . $pays . "'>" . $pays . "</option>";
            }
            ?>

        </select><br>

        <label for="modeleMoto">modeleMoto :</label>
        <input type="text" id="modeleMoto" name="modeleMoto"><br>

        <input type="submit" value="Ajouter l'equipe'">
    </form>
</div>
