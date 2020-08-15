  <title>Ajout client</title>
<div class="container-fluid">
  <?php if (!isset($_POST['ajouter'])) {
    ?>
  <h2>Ajouter un client</h2>

  <form action="./?page=addclient" method="post">
    <div class="form-group col-md-2 offset-md-5">
 			<label for="nom">Nom</label>
 			<input class="form-control" type="text" name="nom" placeholder="Nom" value="">
 		</div>

 			<div class="form-group col-md-2 offset-md-5">
 			<label for="prenom">Prénom</label>
 			<input class="form-control" type="text" name="prenom" placeholder="Prénom" value="">
 		</div>
 		<div class="form-group col-md-2 offset-md-5">
 			<label for="telephone">Téléphone</label>
 			<input class="form-control" type="number" name="telephone" placeholder="Téléphone" value="">
 		</div>

    <div class="form-group col-md-2 offset-md-5">
 			<label for="email">E-mail</label>
 			<input class="form-control" type="text" name="email" placeholder="E-mail" value="">
 		</div>

    <div class="form-group col-md-2 offset-md-5">
      <label>Nom de la société</label>
      <select class="form-control" name="idsocietes">
      <?php foreach ($resultat as $key => $donnees) {
        ?>
          <option value="<?= $donnees['idsocietes']; ?>"><?= $donnees['nom_societe']; ?></option>
      <?php
    } ?>
      </select>
    </div>

    <button class="btn btn-primary col-md-2 offset-md-5" type="submit" name="ajouter">Ajouter</button>
  </form>

</div>

  <?php
} else {
        echo $resultat;
    } ?>
    </div>
