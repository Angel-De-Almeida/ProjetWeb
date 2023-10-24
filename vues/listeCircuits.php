<div class="liste">

    <div class="titre"> 
        <h1 class="heading">Liste des circuits</h1>  
    </div>

    <br><br>
    
    <table class="table">
        <thead>
            <tr>
                <th> ID </th>
                <th> Circuit </th>
                <th> Pays </th>
                <th> Année </th>
                <th> Longueur </th>
                <th> Suppression </th>
                <th> Modification </th>
                <th> Course </th>
            </tr>
        </thead>

        <?php
        $reponse = $bdd->query('SELECT * FROM circuit');
        while ($donnees = $reponse->fetch()) {
            echo "<tbody>";
            echo "<td>" . $donnees['id'] . "</td>";
            echo "<td>" . $donnees['nom'] . "</td>";
            echo "<td>" . $donnees['pays'] . "</td>";
            echo "<td>" . $donnees['annee'] . "</td>";
            echo "<td>" . $donnees['longueur'] . "</td>";
            echo "<td><a href='javascript:void(0);' onclick='confirmDelete(" . $donnees['id'] . ");'><img src='./img/poubelle3.png' style='width: 30px; height: 30px;'></a></td>";
            echo "<td><a href='index.php?action=formulairemodifpilote&id=" . $donnees['id'] . "'><img src='./img/modif.png' style='width: 30px; height: 30px;'></a></td>";
            echo "<td><a href='index.php?action=courses'><button class='courses'>Listes des courses " . $donnees['nom'] . "</button></a></td>";
            echo "</tbody>";
        }
        $reponse->closeCursor();
        ?>

</div>

</table>
    
<br>

<a href="index.php?action=formulaireajoutcircuit">
    <button class="ajout"> Ajouter un circuit </button>
</a>

<script>
function confirmDelete(id) {
    if (confirm("Êtes-vous sûr de vouloir supprimer ce circuit ?")) {
        window.location.href = "index.php?action=supprcircuit&id=" + id;
    }
}
</script>
