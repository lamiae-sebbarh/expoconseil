<title>Modification client</title>
<div class="container-fluid">

        <?php if (!isset($_POST['button'])) {
    ?>
	  <h2>Modifier les infos du client</h2>
        <form action="./?page=updateclient" method="post" id="forme">
        		<div class="form-group col-md-2 offset-md-5">
        		    <label for="nom">Nom</label>
        			  <input class="form-control" type="text" name="nom" value="<?= $donnees['nom']?>">
        		</div>

      			<div class="form-group col-md-2 offset-md-5">
          			<label for="prenom">Prénom</label>
          			<input class="form-control" type="text" name="prenom" value="<?= $donnees['prenom']; ?>">
      		  </div>

            <div class="form-group col-md-2 offset-md-5">
          			<label for="telephone">Téléphone</label>
          			<input class="form-control" type="number" name="telephone" value="<?= $donnees['telephone']; ?>">
        		</div>

            <div class="form-group col-md-2 offset-md-5">
          			<label for="email">E-mail</label>
          			<input class="form-control" type="text" name="email" value="<?= $donnees['email']; ?>">
        		</div>

        		<input type="hidden" name="idannuaire" value="<?= $_GET['id']; ?>">
        		<button class="btn btn-primary col-md-2 offset-md-5" type="submit" name="button">Modifier</button>
        </form>

<?php
} else {
        echo $donnees;
    } ?>
</div>
</div>
