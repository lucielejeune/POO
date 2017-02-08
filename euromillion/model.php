<?php
class tirage_model{
	private function __construct(){
	}

    public static function getTirage(){
    	$tirage[]=$_POST["num1"];
    	$tirage[]=$_POST["num2"];
    	$tirage[]=$_POST["num3"];
    	$tirage[]=$_POST["num4"];
    	$tirage[]=$_POST["num5"];
    	$etoilet[]=$_POST["etoile1"];
    	$etoilet[]=$_POST["etoile2"];
        $tab[0]=$tirage;
        $tab[1]=$etoilet;
    	return $tab;
    }
    public static function aleaTirage(){
    	$alean=array();
        $aleae=array();
    	for($i=0;$i<5;$i++){
    		do{
			$temp=rand(1,49);
    		}
    		while(in_array($temp, $alean));
    		$alean[$i]=$temp;
    	}	
    	
		$aleae[0]=rand(1,12);
		do{
			$temp=rand(1,12);
		}
    	while($temp==$aleae[0]);
    	$aleae[1]=$temp;
    	$alea[0]=$alean;
        $alea[1]=$aleae;
    	return $alea;
    }
    public static function verif($tirage,$alea){
        $validenum=array();
        $valideet=array();
        $tirnum=$tirage[0]; // liste numero choisi
        $tiret=$tirage[1]; // liste etoile choisi
        $aleanum=$alea[0]; // liste numero tiré
        $aleaet=$alea[1]; // liste etoile tiré
    	asort($tirnum);
        asort($tiret);
        asort($aleanum);
    	asort($aleaet);

        for ($i=0;$i<5;$i++){
            if(in_array($tirnum[$i],$aleanum)){
                $validenum[]=$tirnum[$i];
            }
        }
        for ($i=0;$i<2;$i++){
            if(in_array($tiret[$i],$aleaet)){
                $valideet[]=$tiret[$i];
            }
        }
    	$tab[0] = $validenum;
    	$tab[1] = $valideet;
        return $tab;    	
    }

}