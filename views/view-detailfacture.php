<title>Détail facture</title>
<div class="container-fluid">

<h2>Détail facture</h2>
<div class="table-responsive">
 <table class="table table-bordered table-hover">
   <thead class="table-primary">
<tr >
      <th>Numéro</th>
      <th>Date</th>
      <th>Société</th>
      <th>Type société</th>
      <th>Personne de contact</th>
</tr>
</thead>
<tbody>
      <tr>
        <td><?= $donnees['numero']; ?></td>
        <td><?= $donnees['date_facture']; ?></td>
        <td><?= $donnees['nom_societe']; ?></td>
        <td><?= $donnees['type']; ?></td>
        <td><?= $donnees['nom']; ?></td>
      </tr>
    </tbody>
</table>
</div>
</div>
