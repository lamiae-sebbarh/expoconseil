<?php
function getFacture()
{
    global $bd;
    $resultat = $bd->query('SELECT * FROM facture ORDER BY date_facture DESC');

    return $resultat->fetchAll();
}

function getDetailFacture()
{
    global $bd;
    $id = $_GET['id'];
    $resultat = $bd->query("SELECT * FROM facture
        JOIN annuaire ON facture.annuaire_idannuaire = annuaire.idannuaire
        JOIN societes ON facture.societes_idsocietes = societes.idsocietes
        JOIN type ON societes.type_idtype = type.idtype
        WHERE idfacture=$id");

    return $resultat->fetch();
}


function getUpdateFacture()
{
    global $bd;
    if (!isset($_POST['button'])) {
        $id = $_GET['id'];
        $resultat = $bd->query("SELECT * FROM facture WHERE idfacture = $id");
        return $resultat->fetch();
    } else {
        $tab = array(
              ':idfacture'=> $_POST['idfacture'],
              ':numero'=> $_POST['numero'],
              ':date_facture' => $_POST['date_facture'],
              ':motif_prestation'  => $_POST['motif_prestation']
      );
        $sql = "UPDATE facture SET numero= :numero, date_facture= :date_facture, motif_prestation= :motif_prestation  WHERE idfacture =:idfacture";
        $req = $bd->prepare($sql);
        if ($req->execute($tab)) {
            return  'La facture a été modifiée avec succès !';
        } else {
            return  'Il y a une erreur dans le formulaire !';
        };
    }
}


function getAddFacture()
{
    global $bd;
    if (!isset($_POST['ajouter'])) {
        $resultat = $bd->query('SELECT * FROM facture
        JOIN societes ON facture.societes_idsocietes = societes.idsocietes
        JOIN annuaire ON facture.annuaire_idannuaire = annuaire.idannuaire');
        return $resultat->fetchAll();
    } else {
        $sql = "INSERT INTO facture (numero, date_facture, motif_prestation,  societes_idsocietes, annuaire_idannuaire)
              VALUES (:numero, :date_facture ,:motif_prestation, :societes_idsocietes, :annuaire_idannuaire)" ;
        $tab = array(
              ':numero'=> $_POST['numero'],
              ':date_facture' => $_POST['date_facture'],
              ':motif_prestation'  => $_POST['motif_prestation'] = filter_var($_POST['motif_prestation'], FILTER_SANITIZE_STRING),
              ':societes_idsocietes' => $_POST['idsocietes'],
              ':annuaire_idannuaire'  => $_POST['idannuaire']
              );
        $req = $bd->prepare($sql);

        if ($req->execute($tab)) {
            return 'La facture a été ajoutée avec succès !';
        } else {
            return 'Il y a une erreur dans le formulaire !';
        };
    }
}



function getDeleteFacture()
{
    global $bd;
    $id=$_GET['id'];
    $sql = "DELETE FROM facture WHERE idfacture= $id" ;
    $bd->exec($sql);
    $tab = array(
      ':idfacture'=> $id
      );
    $req = $bd->prepare($sql);
    if ($req->execute($tab)) {
        return 'Le client a été supprimé avec succès !';
    } else {
        return 'Il y a une erreur dans le formulaire !';
    }
}
