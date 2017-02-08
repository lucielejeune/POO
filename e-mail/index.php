<?php
require_once('view.php');
$html = view_mail::formulaire();

if(isset($_POST['btn_mail'])){
	require_once('model.php');
	$domaine= mail_model::getmail();
	$html .="<br />";
	$html .= view_mail::affichage($domaine);
}

echo $html;