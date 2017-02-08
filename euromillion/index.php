<?php
require_once('view.class.php');
$html = affichage_view::affichage();

if(isset($_POST['choix'])){
	require_once('model.php');
	$tirage = tirage_model::getTirage();
	$aleatoire = tirage_model::aleaTirage();
	$tab = tirage_model::verif($tirage,$aleatoire);
	$html .= affichage_view::resultat($tirage,$aleatoire,$tab);
}

echo $html;

