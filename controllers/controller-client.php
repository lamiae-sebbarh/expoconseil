<?php
require './models/model-client.php';

function afficherClient()
{
    $resultat = getClient();
    require './views/view-client.php';
}

function detailClient()
{
    $donnees = getDetailClient();

    require './views/view-detailclient.php';
}

function updateClient()
{
    $donnees = getUpdateClient();
    require './views/view-updateclient.php';
}


function addClient()
{
    $resultat = getAddClient();


    require './views/view-addclient.php';
}

function deleteClient()
{
    $resultat = getDeleteClient();


    require './views/view-deleteclient.php';
}

function afficherListeClient()
{
    $resultat = getAfficherListeClient();


    require './views/view-listeclient.php';
}

function afficherListeFournisseur()
{
    $resultat = getAfficherListeFournisseur();


    require './views/view-listefournisseur.php';
}
