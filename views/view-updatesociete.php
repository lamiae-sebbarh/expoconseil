<title>Modification société</title>
  <div class="container-fluid">

  <?php if (!isset($_POST['button'])) {
    ?>
	<h2>Modifier les infos de la société</h2>
	<form action="./?page=updatesociete" method="post" id="forme">
		<div class="form-group col-md-2 offset-md-5">
			<label for="nom_societe">Nom</label>
			<input class="form-control" type="text" name="nom_societe" value="<?= $donnees['nom_societe']?>">
		</div>

			<div class="form-group col-md-2 offset-md-5">
			<label for="adresse">Adresse</label>
			<input class="form-control" type="text" name="adresse" value="<?= $donnees['adresse']; ?>">
		</div>
		<div class="form-group col-md-2 offset-md-5">
			<label for="pays">Pays</label>
			<input class="form-control" type="text" name="pays" value="<?= $donnees['pays']; ?>">
		</div>
    <div class="form-group col-md-2 offset-md-5">
      <label for="telephone_societe">Téléphone</label>
      <input class="form-control" type="number" name="telephone_societe" value="<?= $donnees['telephone_societe']; ?>">
    </div>
    <div class="form-group col-md-2 offset-md-5">
      <label for="num_tva">Numéro TVA</label>
      <input class="form-control" type="number" name="num_tva" value="<?= $donnees['num_tva']; ?>">
    </div>

		<input type="hidden" name="idsocietes" value="<?= $_GET['id']; ?>">
		<button class="btn btn-primary col-md-2 offset-md-5" type="submit" name="button">Modifier</button>
	</form>
</div>
<?php
} else {
        echo $donnees;
    } ?>
