<?php
class view_mail{
	private function __construct(){
	}

    public static function formulaire(){
    	$html = "<form method='POST' action=''>";
    	$html .= "Liste des mails en csv : ";
    	$html .= "<input type='file' name='mail'><br />";
    	$html .= "<input type='submit' name='btn_mail'></from>";
    	return $html;
    }

    public static function affichage($domaine){
    	$html = "";
    	foreach($domaine as $key=>$data){
    		$html .= $key." : ".$data."<br />";
    	}
    	return $html;
    }
}