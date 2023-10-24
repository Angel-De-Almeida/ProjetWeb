<div class="formulaire">
    <div class="titre">
        <h1 class="heading">Modification Moto</h1>
    </div>
    <br><br>
    <form method="post" action="index.php?action=modifmoto">
        <label for="modele">Modèle:</label>
        <input type="text" id="modele" name="modele"><br>

        <label for="constructeur">Constructeur:</label>
        <input type="text" id="constructeur" name="constructeur"><br>

        <label for="pays">Pays:</label>
        <select id="pays" name="pays">
            <?php
            $paysList = array("Japon", "Italie", "Allemagne", "France", "États-Unis", "Australie");
            foreach ($paysList as $pays) {
                echo "<option value='" . $pays . "'>" . $pays . "</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Modifier la Moto">
    </form>
</div>
