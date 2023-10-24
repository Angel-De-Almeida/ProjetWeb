<div class="liste">

    <div class="titre"> 
        <h1 class="heading">Liste des équipes</h1>  
    </div>

    <br><br>
    
    <table class="table">
        <thead>
            <tr>
                <th> ID </th>
                <th> Equipe </th>
                <th> Pays </th>
                <th> Modele Moto </th>
                <th> ID-P1 </th>
                <th> ID-P2 </th>
                <th> Suppression </th>
                <th> Modification </th>
            </tr>
        </thead>

        <?php
        $reponse = $bdd->query('SELECT * FROM team');
        while ($donnees = $reponse->fetch()) {
            echo "<tbody>";
            echo "<td>" . $donnees['id'] . "</td>";
            echo "<td>" . $donnees['libelle'] . "</td>";
            echo "<td>" . $donnees['pays'] . "</td>";
            echo "<td>" . $donnees['modeleMoto'] . "</td>";
            echo "<td>" . $donnees['idPilote1'] . "</td>";
            echo "<td>" . $donnees['idPilote2'] . "</td>";
            echo "<td><a href='javascript:void(0);' onclick='confirmDelete(" . $donnees['id'] . ");'><img src='./img/poubelle3.png' style='width: 30px; height: 30px;'></a></td>";
            echo "<td><a href='index.php?action=formulairemodifpilote&id=" . $donnees['id'] . "'><img src='./img/modif.png' style='width: 30px; height: 30px;'></a></td>";
            echo "</tbody>";
        }
        $reponse->closeCursor();
        ?>


    </table>

</div>
    
<br>

<a href="index.php?action=formulaireajoutequipe">
    <button class="ajout"> Ajouter une équipe </button>
</a>

<script>
function confirmDelete(id) {
    if (confirm("Êtes-vous sûr de vouloir supprimer cette équipe ?")) {
        window.location.href = "index.php?action=supprequipe&id=" + id;
    }
}
</script>
    

