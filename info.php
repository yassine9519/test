<?php
$age = 51;
 
if ($age <= 12) // SI l'�ge est inf�rieur ou �gal � 12
{
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
}
else // SINON
{
    echo "Ceci est un site pour enfants, vous �tes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}
 
echo "Avez-vous l'autorisation d'entrer ? La r�ponse est : $autorisation_entrer";
?>