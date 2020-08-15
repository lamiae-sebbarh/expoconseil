  <title>Ajout facture</title>
    <div class="container-fluid">
  <?php if (!isset($_POST['ajouter'])) {
    ?>
  <h2>Ajouter une facture</h2>
    <form action="./?page=addfacture" method="post">

    <div class="form-group col-md-2 offset-md-5">
 			<label for="numero">Numéro</label>
 			<input class="form-control" type="number" placeholder="Numéro" name="numero" value="">
    </div>
 			<div class="form-group col-md-2 offset-md-5">
 			<label for="date_facture">Date</label>
 			<input class="form-control" type="date" name="date_facture" value="">
 		</div>

 		<div class="form-group col-md-2 offset-md-5">
 			<label for="motif_prestation">Prestation</label>
 			<input class="form-control" type="text" placeholder="Prestation" name="motif_prestation" value="">
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

    <div class="form-group col-md-2 offset-md-5">
      <label>Nom client</label>
      <select class="form-control" name="idannuaire">
      <?php foreach ($resultat as $key => $donnees) {
        ?>
        <option value="<?= $donnees['idannuaire']; ?>"><?= $donnees['nom']; ?></option>

      <?php
    } ?>

      </select>
    </div>

    <button class="btn btn-primary col-md-2 offset-md-5" type="submit" name="ajouter">Ajouter</button>

  </form>


  <?php
} else {
        echo $resultat;
        // echo $donnees;
    } ?>
    </div>
