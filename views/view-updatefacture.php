<title>Modification facture</title>
  <div class="container-fluid">

    <?php if (!isset($_POST['button'])) {
    ?>
	<h2>Modifier les infos de la facture</h2>
	<form action="./?page=updatefacture" method="post" id="forme">
		<div class="form-group col-md-2 offset-md-5">
			<label for="numero">Numéro</label>
			<input class="form-control" type="number" name="numero" value="<?= $donnees['numero']?>">
		</div>

			<div class="form-group col-md-2 offset-md-5">
			<label for="date_facture">Date</label>
			<input class="form-control" type="date" name="date_facture" value="<?= $donnees['date_facture']; ?>">
		</div>
		<div class="form-group col-md-2 offset-md-5">
			<label for="motif_prestation">Prestation</label>
			<input class="form-control" type="text" name="motif_prestation" value="<?= $donnees['motif_prestation']; ?>">

		</div>

		<input type="hidden" name="idfacture" value="<?= $_GET['id']; ?>">
		<button class="btn btn-primary col-md-2 offset-md-5" type="submit" name="button">Modifier</button>
	</form>

<?php
} else {
        echo $donnees;
        // var_dump($confirm);
    } ?>
</div>
</div>
