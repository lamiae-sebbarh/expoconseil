  <title>Ajout société</title>
<div class="container-fluid">
  <?php if (!isset($_POST['ajouter'])) {
    ?>
  <h2>Ajouter une société</h2>
  <form action="./?page=addsociete" method="post">
    <div class="form-group col-md-2 offset-md-5">
 			<label for="nom_societe">Nom de la société</label>
 			<input class="form-control" type="text" name="nom_societe" placeholder="Société" value="">
 		</div>

 			<div class="form-group col-md-2 offset-md-5">
 			<label for="adresse">Adresse</label>
 			<input class="form-control" type="text" name="adresse" placeholder="Adresse" value="">
 		</div>
 		<div class="form-group col-md-2 offset-md-5">
 			<label for="pays">Pays</label>
 			<input class="form-control" type="text" name="pays" placeholder="Pays" value="">
 		</div>

    <div class="form-group col-md-2 offset-md-5">
 			<label for="telephone_societe">Téléphone</label>
 			<input class="form-control" type="number" name="telephone_societe" placeholder="Téléphone" value="">
 		</div>
    <div class="form-group col-md-2 offset-md-5">
 			<label for="num_tva">Numéro de TVA</label>
 			<input class="form-control" type="number" name="num_tva" placeholder="TVA" value="">
 		</div>
    <div class="form-group col-md-2 offset-md-5">
      <label>Type</label>
      <select class="form-control" name="type_idtype">
      <?php foreach ($resultat as $key => $donnees) {
        ?>
        <option value="<?= $donnees['type_idtype']; ?>"><?= $donnees['type']; ?></option>
      <?php
    } ?>
      </select>
    </div>

    <button class="btn btn-primary col-md-2 offset-md-5" type="submit" name="ajouter">Ajouter</button>
  </form>
  <?php
} else {
        echo $resultat;
    } ?>
</div>
