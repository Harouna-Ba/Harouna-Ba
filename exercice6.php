<?php
//**ecrire un scrypte qui permet de generer une annee et 1 mois puis determine et affiche le nombre de jour de ce mois dans cette annee */

define("maxa",2030);
define("mina",2000);
$annee=rand(maxa,mina);

define("maxm",12);
define("minm",1);
$mois=rand(maxm,minm);

define("maxj",31);
define("minj",1);
$jour=rand(maxj,minj);

$dateSuivante="";
$datePrecedente="";
$P=$jour+1;
$D=$jour-1;
$S="$mois+1";




if(is_int($annee/4) && !is_int($annee/100) || is_int($annee/400))
{
    if($mois==1){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
        
    }
    elseif($mois==2){
        
        if($jour<29){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==3){
       if($jour<31){
        $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
        $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
       
       }
       else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
       }
    }
    elseif($mois==4){
       
        if($jour<30){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==5){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
           }
        
            else{
                $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
               }
    }
    elseif($mois==6){
       
        if($jour<30){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==7){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==8){
        
        if($jour<30){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==9){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");

        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==10){
        
        if($jour<30){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==11){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");

        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==12){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
}
else{
    if($mois==1){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
        
    }
    elseif($mois==2){
        
        if($jour<28){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==3){
       if($jour<31){
        $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
        $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
       
       }
       else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
       }
    }
    elseif($mois==4){
       
        if($jour<30){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==5){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
           }
        
            else{
                $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
               }
    }
    elseif($mois==6){
       
        if($jour<30){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==7){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==8){
        
        if($jour<30){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==9){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");

        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==10){
        
        if($jour<30){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==11){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");

        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
    elseif($mois==12){
        if($jour<31){
            $datePrecedente=("le $D du $mois.ieme mois $annee<br>");
            $dateSuivante=("le $P du $mois.ieme mois $annee<br>");
        }
        else{
            $datePrecedente=("le jour est $D le mois est $mois en $annee<br>");
            $dateSuivante=("le jour est $jour le mois est $S en $annee");
        }
    }
}
echo("$datePrecedente est la date precedente<br>");
echo("$dateSuivante est la date suivante");
    
    
?>
