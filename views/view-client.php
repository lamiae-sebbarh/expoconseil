  <title>Annuaire</title>
<div class="container-fluid">
<h2>Clients</h2>
<div class="table-responsive col-md-10 offset-md-1">
 <table class="table table-bordered table-hover">
   <thead class="table-primary">
            <tr >
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>E-mail</th>
            </tr>
          </thead>
          <tbody>
<?php foreach ($resultat as $key => $donnees) {
    ?>
            <tr>
                <td> <a href="./?page=detailclient&id=<?= $donnees['idannuaire']; ?>" ><?= $donnees['nom']; ?></a></td>
                <td><?= $donnees['prenom']  ?></td>
                <td><?= $donnees['telephone']  ?></td>
                <td><?= $donnees['email']  ?></td>
            </tr>
<?php
}
?>
</tbody>
        </table>
</div>
</div>
