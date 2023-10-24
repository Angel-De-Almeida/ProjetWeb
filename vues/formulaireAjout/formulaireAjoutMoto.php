<div class="formulaire">
    <div class="titre">
        <h1 class="heading">Ajout Moto</h1>
    </div>
    <br><br>
    <form method="post" action="index.php?action=ajoutmoto">
        
        <label for="modele">Modele :</label>
        <input type="text" id="modele" name="modele"><br>

        <label for="constructeur">Constructeur :</label>
        <input type="text" id="constructeur" name="constructeur"><br>

        <label for="pays">Pays :</label>
        <select id="pays" name="pays">
            <?php
            $pays = array("Angleterre", "Australie", "Autriche", "Belgique", "Espagne", "France", "Italie", "Japon", "Malaisie", "Monaco", "Portugal");

            foreach ($pays as $pays) {
                echo "<option value='" . $pays . "'>" . $pays . "</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Ajouter la moto">
    </form>
</div>
