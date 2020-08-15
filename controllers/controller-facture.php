<?php
require './models/model-facture.php';

function afficherFacture()
{
    $resultat = getFacture();
    require './views/view-facture.php';
}

function detailFacture()
{
    $donnees = getDetailFacture();

    require './views/view-detailfacture.php';
}

function updateFacture()
{
    $donnees = getUpdateFacture();

    // echo $donnees;
    require './views/view-updatefacture.php';
}

function addFacture()
{
    $resultat = getAddFacture();
    
    require './views/view-addfacture.php';
}

function deleteFacture()
{
    $resultat = getDeleteFacture();


    require './views/view-deletefacture.php';
}
