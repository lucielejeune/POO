<?php



class affichage_view{
	private function __construct(){
	}

    public static function affichage(){
    	$html="<form method='POST' action=''>";
    	$html .= "Numéro 1 : <input type='text' name='num1'/><br />";
    	$html .= "Numéro 2 : <input type='text' name='num2'/><br />";
    	$html .= "Numéro 3 : <input type='text' name='num3'/><br />";
    	$html .= "Numéro 4 : <input type='text' name='num4'/><br />";
    	$html .= "Numéro 5 : <input type='text' name='num5'/><br />";
    	$html .= "Etoile 1 : <input type='text' name='etoile1'/><br />";
    	$html .= "Etoile 2 : <input type='text' name='etoile2'/><br />";
    	$html .= "<input type='submit' name='choix'/><br />";
    	$html.="</from>";
    	return $html;
    }
    public static function resultat($tirage, $alea, $tab){
        $retourne = "";
        $tirnum = $tirage[0];
        $tiret = $tirage[1];
        $aleanum = $alea[0];
        $aleaet = $alea[1];
        $validnum = $tab[0];
        $validet = $tab[1];

        $retourne .= "Les numéros que vous avez choisis sont : ";
        $retourne .= implode(",", $tirnum)."<br />";
        $retourne .= "Les étoiles que vous avez choisis sont : ";
        $retourne .= implode(",", $tiret)."<br />";
        $retourne .= "Les numéros qui ont été tiré sont : ";
        $retourne .= implode(",", $aleanum)."<br />";
        $retourne .= "Les étoiles qui ont été tiré sont : ";
        $retourne .= implode(",", $aleaet)."<br />";
        $retourne .= "Vos numéros corrects sont : ";
        $retourne .= implode(",", $validnum)."<br />";
        $retourne .= "Vos étoiles corrects sont : ";
        $retourne .= implode(",", $validet)."<br />";
        return $retourne;
    }
}