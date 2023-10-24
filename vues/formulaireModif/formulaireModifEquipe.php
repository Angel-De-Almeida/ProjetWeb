<div class="formulaire">
    <div class="titre">
        <h1 class="heading">Modification Equipe</h1>
    </div>
    <br><br>
    <form method="post" action="index.php?action=modifequipe">
        <label for="libelle">Libelle:</label>
        <input type="text" id="libelle" name="libelle"><br>

        <label for="pays">Pays:</label>
        <select id="pays" name="pays">
            <?php
            $paysList = array("France", "Italie", "Espagne", "Allemagne", "Angleterre", "Belgique");
            foreach ($paysList as $pays) {
                echo "<option value='" . $pays . "'>" . $pays . "</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Modifier l'Equipe">
    </form>
</div>
