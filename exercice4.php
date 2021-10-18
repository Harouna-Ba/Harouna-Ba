<?php
//**ecrire un scrypte qui permet de generer une annee et 1 mois puis determine et affiche le nombre de jour de ce mois dans cette annee */

define("maxa",2030);
define("mina",2000);
$annee=rand(maxa,mina);

define("maxm",12);
define("minm",1);
$mois=rand(maxm,minm);
$nombre_jour="";

if(is_int($annee/4) && !is_int($annee/100) || is_int($annee/400))
{
    if($mois==1){
        $nombre_jour=31;
    }
    elseif($mois==2){
        $nombre_jour=29;  
    }
    elseif($mois==3){
        $nombre_jour=31;
    }
    elseif($mois==4){
        $nombre_jour=30;
    }
    elseif($mois==5){
        $nombre_jour=31;
    }
    elseif($mois==6){
        $nombre_jour=30;
    }
    elseif($mois==7){
        $nombre_jour=31;
    }
    elseif($mois==8){
        $nombre_jour=30;
    }
    elseif($mois==9){
        $nombre_jour=31;
    }
    elseif($mois==10){
        $nombre_jour=30;
    }
    elseif($mois==11){
        $nombre_jour=31;
    }
    elseif($mois==12){
        $nombre_jour=31;
    }
}
else{
    if($mois==1){
        $nombre_jour=31;
    }
    elseif($mois==2){
        $nombre_jour=28;  
    }
    elseif($mois==3){
        $nombre_jour=31;
    }
    elseif($mois==4){
        $nombre_jour=30;
    }
    elseif($mois==5){
        $nombre_jour=31;
    }
    elseif($mois==6){
        $nombre_jour=30;
    }
    elseif($mois==7){
        $nombre_jour=31;
    }
    elseif($mois==8){
        $nombre_jour=30;
    }
    elseif($mois==9){
        $nombre_jour=31;
    }
    elseif($mois==10){
        $nombre_jour=30;
    }
    elseif($mois==11){
        $nombre_jour=31;
    }
    elseif($mois==12){
        $nombre_jour=31;
    }
}
echo(" Nous sommes au $mois ieme mois<br>");
echo("$nombre_jour est le nombre de jour de ce mois en $annee<br>");

    
    
    
?>
