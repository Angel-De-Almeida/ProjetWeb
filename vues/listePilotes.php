<div class="liste">
    <div class="titre">
        <h1 class="heading">Liste des pilotes</h1>
    </div>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th> Nom </th>
                <th> Prenom </th>
                <th> Nationalité </th>
                <th> Date de naissance </th>
                <th> Suppression </th>
                <th> Modification </th>
            </tr>
        </thead>

        <?php
        $reponse = $bdd->query('SELECT * FROM pilote');
        while ($donnees = $reponse->fetch()) {
            echo "<tbody>";
            echo "<td>" . $donnees['nom'] . "</td>";
            echo "<td>" . $donnees['prenom'] . "</td>";
            echo "<td>" . $donnees['nationalite'] . "</td>";
            echo "<td>" . $donnees['dateNaiss'] . "</td>";
            echo "<td><a href='javascript:void(0);' onclick='confirmDelete(" . $donnees['id'] . ");'>" . "<img src='./img/poubelle3.png' style='width: 30px; height: 30px;'></a></td>";
            echo "<td><a href='index.php?action=formulairemodifpilote&id=" . $donnees['id'] . "'><img src='./img/modif.png' style='width: 30px; height: 30px;'></a></td>";
            echo "</tbody>";
        }
        $reponse->closeCursor();
        ?>

    </table>
</div>

<br>

<a href="index.php?action=formulaireajoutpilote">
    <button class="ajout"> Ajouter un pilote </button>
</a>

<script>
function confirmDelete(id) {
    if (confirm("Êtes-vous sûr de vouloir supprimer ce pilote ?")) {
        window.location.href = "index.php?action=supprpilote&id=" + id;
    }
}
</script>
