<title>Facture</title>
<div class="container-fluid">
    <h2>Factures</h2>
    <div class="table-responsive col-md-10 offset-md-1">
     <table class="table table-bordered table-hover">
       <thead class="table-primary">
    <tr>

          <th>Numéro</th>
          <th>Date</th>
          <th>Prestation</th>
</tr>
</thead>
 <tbody>
        <?php foreach ($resultat as $key => $donnees) {
    ?>
          <tr>
            <td> <a href="./?page=detailfacture&id=<?= $donnees['idfacture']; ?>" ><?= $donnees['numero']; ?></a></td>
            <td><?= $donnees['date_facture']; ?></td>
            <td><?= $donnees['motif_prestation']; ?></td>
          </tr>

      <?php
} ?>
</tbody>
    </table>
</div>
</div>
