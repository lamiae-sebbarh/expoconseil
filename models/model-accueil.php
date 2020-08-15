<?php

function getAccueil1()
{
    global $bd;
    $resultat1 = $bd->query('SELECT *
         FROM facture
         JOIN societes ON facture.societes_idsocietes = societes.idsocietes
         ORDER BY date_facture DESC LIMIT 0,5');

    return $resultat1->fetchAll();
}

function getAccueil2()
{
    global $bd;

    $resultat2 = $bd->query('SELECT *
         FROM annuaire
         JOIN societes ON annuaire.idannuaire = societes.idsocietes
         -- LEFT JOIN societes ON annuaire_has_societes.societes_idsocietes = societes.idsocietes
         -- LEFT JOIN annuaire ON annuaire.idannuaire = annuaire_has_societes.annuaire_idannuaire
         ORDER BY idannuaire DESC LIMIT 0,5');

    return $resultat2->fetchAll();
}

function getAccueil3()
{
    global $bd;

    $resultat3 = $bd->query('SELECT *
         FROM societes JOIN type ON societes.type_idtype = type.idtype
         ORDER BY idsocietes DESC LIMIT 0,5');

    return $resultat3->fetchAll();
}
