
<?php
function getClient()
{
    global $bd;
    $resultat =  $bd->query('SELECT * FROM annuaire ORDER BY nom ASC LIMIT 10');

    return $resultat->fetchAll();
}


function getDetailClient()
{
    global $bd;
    $id=$_GET['id'];

    $resultat =  $bd->query("SELECT *
      -- FROM annuaire_has_societes
      -- LEFT JOIN societes
      -- ON annuaire_has_societes.societes_idsocietes = societes.idsocietes
      -- LEFT JOIN annuaire
      -- ON annuaire.idannuaire = annuaire_has_societes.annuaire_idannuaire
      -- WHERE $id=idannuaire;

      FROM facture
      LEFT JOIN societes ON facture.societes_idsocietes = societes.idsocietes
      LEFT JOIN annuaire ON facture.annuaire_idannuaire = annuaire.idannuaire

      WHERE idannuaire=$id");
    return $resultat->fetch();
}

function getUpdateClient()
{
    global $bd;
    if (!isset($_POST['button'])) {
        $id = $_GET['id'];
        $resultat = $bd->query("SELECT * FROM annuaire WHERE idannuaire = $id");
        return $resultat->fetch();
    } else {
        $tab = array(
            ':idannuaire'=> $_POST['idannuaire'],
            ':nom'=> $_POST['nom'],
            ':prenom'=> $_POST['prenom'],
            ':telephone' => $_POST['telephone'],
            ':email'  => $_POST['email']
        );
        $sql = "UPDATE annuaire
                SET nom= :nom, prenom= :prenom, telephone= :telephone, email= :email
                WHERE idannuaire =:idannuaire";
        $req = $bd->prepare($sql);
        if ($req->execute($tab)) {
            return 'Les données du client ont été modifié avec succès !';
        } else {
            return 'Il y a une erreur dans le formulaire !';
        };
    }
}

function getAddClient()
{
    global $bd;
    if (!isset($_POST['ajouter'])) {
        $resultat = $bd->query('SELECT * FROM annuaire
        JOIN societes ON annuaire.idannuaire = societes.idsocietes');
        return $resultat->fetchAll();
    } else {
        $tab = array(
          ':nom'=> $_POST['nom'] = filter_var($_POST['nom'], FILTER_SANITIZE_STRING),
          ':prenom' => $_POST['prenom'] = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING),
          ':telephone'  => $_POST['telephone'],
          ':email'  => $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)
          );
        $sql = "INSERT INTO annuaire (nom, prenom, telephone, email)
                  VALUES (:nom, :prenom ,:telephone, :email)" ;
        $req = $bd->prepare($sql);

        if ($req->execute($tab)) {
            return 'Le client a été ajouté avec succès !';
        } else {
            return 'Il y a une erreur dans le formulaire !';
        };
    }
}

function getDeleteClient()
{
    global $bd;
    $id=$_GET['id'];
    $sql1 = "DELETE FROM annuaire_has_societes WHERE annuaire_idannuaire= $id";
    $sql2 = "DELETE FROM annuaire WHERE idannuaire= $id" ;

    $bd->exec($sql1);
    $bd->exec($sql2);
    $tab = array(
      ':annuaire_idannuaire'=> $id

      );

    $req = $bd->prepare($sql1);
    $req = $bd->prepare($sql2);

    if ($req->execute($tab)) {
        return 'Le client a été supprimé avec succès !';
    } else {
        return 'Il y a une erreur dans le formulaire !';
    }
}

function getAfficherListeClient()
{
    global $bd;
    $resultat = $bd->query('SELECT * FROM societes WHERE type_idtype=1');
    return $resultat->fetchAll();
}

function getAfficherListeFournisseur()
{
    global $bd;
    $resultat = $bd->query('SELECT * FROM societes WHERE type_idtype=2');
    return $resultat->fetchAll();
}
