  <title>Détail société</title>
<div class="container-fluid">
<h2>Détail société</h2>
<div class="table-responsive">
 <table class="table table-bordered table-hover">
   <thead class="table-primary">
            <tr>
                <th>Nom de société </th>
                <th>Adresse </th>
                <th>Pays </th>
                <th>N° de téléphone </th>
                <th>Numéro de TVA </th>
                <th>Type de clients </th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><?= $donnees['nom_societe']  ?></td>
                <td><?= $donnees['adresse']  ?></td>
                <td><?= $donnees['pays']  ?></td>
                <td><?= $donnees['telephone_societe']  ?></td>
                <td><?= $donnees['num_tva']  ?></td>
                <td><?= $donnees['type']  ?></td>



            </tr>
          </tbody>
        </table>
</div>
</div>
