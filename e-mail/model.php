<?php

class mail_model{
	private function __construct(){
	}

    public static function getmail(){
    	$lesmails=array();
    	$tab=array();
    	$domaine=array();
    	$mail = fopen($_POST['mail'],"a+");
    	while($tableau = fgetcsv($mail,';')){
            $lesmails[] = $tableau[0];
        }
  
        for($i=0;$i<sizeof($lesmails);$i++){
			$tab =explode("@", $lesmails[$i]);
			$domaine[]=$tab[1];
			$tab=array();
			//var_dump(explode("@", $lesmails[$i]));
        }	
       return array_count_values($domaine);
    }

}