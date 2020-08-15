<?php
require './models/model-accueil.php';

function afficherAccueil()
{
    $resultat1 = getAccueil1();
    $resultat2 = getAccueil2();
    $resultat3 = getAccueil3();

    require './views/view-accueil.php';
}
