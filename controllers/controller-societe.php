<?php
require './models/model-societe.php';

function afficherSociete()
{
    $resultat = getSociete();
    require './views/view-societe.php';
}

function detailSociete()
{
    $donnees = getDetailSociete();

    require './views/view-detailsociete.php';
}

function updateSociete()
{
    $donnees = getUpdateSociete();
    require './views/view-updatesociete.php';
}

function addSociete()
{
    $resultat = getAddSociete();


    require './views/view-addsociete.php';
}

function deleteSociete()
{
    $resultat = getDeleteSociete();


    require './views/view-deletesociete.php';
}
