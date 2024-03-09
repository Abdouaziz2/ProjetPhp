<?php

function calculerResultats($candidats) {
    $totalVoix = array_sum(array_column($candidats, 'voix'));
    usort($candidats, function($a, $b) {
        return $b['voix'] - $a['voix'];
    });
    foreach ($candidats as $index => &$candidat) {
        $pourcentageVoix = ($candidat['voix'] / $totalVoix) * 100;
        if ($index == 0 && $pourcentageVoix > 50) {
            $candidat['statut'] = 'Élu au premier tour';
        } elseif ($index < 2) {
            $candidat['statut'] = 'Au second tour';
        } else {
            $candidat['statut'] = 'Battu';
        }
        $candidat['pourcentageVoix'] = round($pourcentageVoix, 2);
    }
    return $candidats;
}
