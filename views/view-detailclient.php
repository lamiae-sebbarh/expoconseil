<title>Détail client</title>
<div class="container-fluid">
<h2>Détail client</h2>
<div class="table-responsive">
 <table class="table table-bordered table-hover">
   <thead class="table-primary">
            <tr >
                <th>Nom </th>
                <th>Prénom </th>
                <th>Téléphone </th>
                <th>E-mail </th>
                <th>Nom de la société où travaille la personne </th>
                <th>Adresse de la société </th>
                <th>La liste des factures liées à la personne </th>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?= $donnees['nom']  ?></td>
                <td><?= $donnees['prenom']  ?></td>
                <td><?= $donnees['telephone']  ?></td>
                <td><?= $donnees['email']  ?></td>
                <td><?= $donnees['nom_societe']  ?></td>
                <td><?= $donnees['adresse']  ?></td>
                <td><?= $donnees['motif_prestation']  ?></td>
            </tr>
   </tbody>
        </table>
</div>
</div>
