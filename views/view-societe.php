<title>Sociétés</title>
<div class="container-fluid">
  <h2>Sociétés</h2>
  <div class="table-responsive col-md-10 offset-md-1">
   <table class="table table-bordered table-hover">
     <thead class="table-primary">
       <tr>
      <th>Nom de la société</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($resultat as $key => $donnees) {
    ?>
        <tr>
          <td> <a href="./?page=detailsociete&id=<?= $donnees['idsocietes']; ?>" ><?= $donnees['nom_societe']; ?></a></td>
        </tr>

    <?php
} ?>
</tbody>
  </table>
</div>
</div>
