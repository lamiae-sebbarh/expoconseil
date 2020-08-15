<?php
require './views/partials/head.php';
require './views/partials/header.php';
require './DB/database.php';
require './controllers/controller-accueil.php';
require './controllers/controller-facture.php';
require './controllers/controller-client.php';
require './controllers/controller-societe.php';


if (isset($_GET['page'])) {
    if ($_GET['page'] == 'accueil') {
        afficherAccueil();
    } elseif ($_GET['page'] == 'facture') {
        afficherFacture();
    } elseif ($_GET['page'] == 'client') {
        afficherClient();
    } elseif ($_GET['page'] == 'societe') {
        afficherSociete();
    } elseif ($_GET['page'] == 'detailclient') {
        detailClient();
    } elseif ($_GET['page'] == 'detailfacture') {
        detailFacture();
    } elseif ($_GET['page'] == 'detailsociete') {
        detailSociete();
    } elseif ($_GET['page'] == 'updatefacture') {
        updateFacture();
    } elseif ($_GET['page'] == 'updateclient') {
        updateClient();
    } elseif ($_GET['page'] == 'updatesociete') {
        updateSociete();
    } elseif ($_GET['page'] == 'addfacture') {
        addFacture();
    } elseif ($_GET['page'] == 'addclient') {
        addClient();
    } elseif ($_GET['page'] == 'addsociete') {
        addSociete();
    } elseif ($_GET['page'] == 'deletefacture') {
        deleteFacture();
    } elseif ($_GET['page'] == 'deleteclient') {
        deleteClient();
    } elseif ($_GET['page'] == 'deletesociete') {
        deleteSociete();
    } elseif ($_GET['page'] == 'listeclient') {
        afficherListeClient();
    } elseif ($_GET['page'] == 'listefournisseur') {
        afficherListeFournisseur();
    } else {
        require './controllers/controller-404.php';
    }
} else {
    afficherAccueil();
}


require './views/partials/footer.php';
