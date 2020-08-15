<?php
function getSociete()
{
    global $bd;
    $resultat = $bd->query('SELECT * FROM societes ORDER BY nom_societe ASC');

    return $resultat->fetchAll();
}


function getDetailSociete()
{
    global $bd;
    $id=$_GET['id'];
    $resultat =  $bd->query("SELECT *
        FROM societes
        JOIN facture ON facture.societes_idsocietes = societes.idsocietes
        JOIN annuaire ON facture.annuaire_idannuaire = annuaire.idannuaire
        JOIN type ON type.idtype = societes.type_idtype

        WHERE idsocietes = $id");


    return $resultat->fetch();
}

function getUpdateSociete()
{
    global $bd;
    if (!isset($_POST['button'])) {
        $id = $_GET['id'];
        $resultat = $bd->query("SELECT * FROM societes WHERE idsocietes = $id");

        return $resultat->fetch();
    } else {
        $tab = array(
                  ':idsocietes'=> $_POST['idsocietes'],
                  ':nom_societe'=> $_POST['nom_societe'],
                  ':adresse'=> $_POST['adresse'],
                  ':pays' => $_POST['pays'],
                  ':telephone_societe'  => $_POST['telephone_societe'],
                  ':num_tva'  => $_POST['num_tva']
        );
        $sql = "UPDATE societes SET nom_societe= :nom_societe, adresse= :adresse, pays= :pays, telephone_societe= :telephone_societe, num_tva= :num_tva   WHERE idsocietes =:idsocietes";
        $req = $bd->prepare($sql);
        if ($req->execute($tab)) {
            return 'La société a été modifiée avec succès !';
        } else {
            return 'Il y a une erreur dans le formulaire !';
        };
    }
}

function getAddSociete()
{
    global $bd;
    if (!isset($_POST['ajouter'])) {
        $resultat = $bd->query('SELECT * FROM societes
      JOIN type ON societes.idsocietes = type.idtype');
        return $resultat->fetchAll();
    } else {
        $tab = array(
            ':nom_societe'=> $_POST['nom_societe'] = filter_var($_POST['nom_societe'], FILTER_SANITIZE_STRING),
            ':adresse' => $_POST['adresse'] = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING),
            ':pays'  => $_POST['pays'] = filter_var($_POST['pays'], FILTER_SANITIZE_STRING),
            ':telephone_societe'  => $_POST['telephone_societe'],
            ':num_tva'  => $_POST['num_tva'],
            ':type_idtype'  => $_POST['type_idtype']
            );
        $sql = "INSERT INTO societes (nom_societe, adresse, pays, telephone_societe, num_tva, type_idtype)
                VALUES (:nom_societe, :adresse ,:pays, :telephone_societe, :num_tva, :type_idtype)" ;
        $req = $bd->prepare($sql);

        if ($req->execute($tab)) {
            return 'La société a été ajoutée avec succès !';
        } else {
            return 'Il y a une erreur dans le formulaire !';
        };
    }
}

function getDeleteSociete()
{
    global $bd;
    $id=$_GET['id'];
    $sql = "DELETE FROM societes WHERE idsocietes= $id" ;
    $bd->exec($sql);
    $tab = array(
      ':idsocietes'=> $id
      );
    $req = $bd->prepare($sql);
    if ($req->execute($tab)) {
        return 'Le client a été supprimé avec succès !';
    } else {
        return 'Il y a une erreur dans le formulaire !';
    }
}
