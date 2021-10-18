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

$date="";




if(is_int($annee/4) && !is_int($annee/100) || is_int($annee/400))
{
    if($mois==1){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==2){
        
        if($jour<=29){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==3){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
       echo("date valide");
    }
    elseif($mois==4){
       
        if($jour<=30){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==5){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==6){
       
        if($jour<=30){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==7){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==8){
        
        if($jour<=30){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==9){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==10){
        
        if($jour<=30){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==11){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==12){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    
}
else{
    if($mois==1){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==2){
        
        if($jour<=29){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==3){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
       echo("date valide");
    }
    elseif($mois==4){
       
        if($jour<=30){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==5){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==6){
       
        if($jour<=30){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
            echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==7){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==8){
        
        if($jour<=30){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==9){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==10){
        
        if($jour<=30){
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
            echo("date valide");
        }
        else{
            $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
            echo("date invalide");
        }
    }
    elseif($mois==11){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    elseif($mois==12){
        $date=("le jour est.$jour le mois est.$mois l'annee est.$annee");
        echo("$date<br>");
        echo("date valide");
    }
    
     
}
    
    
    
?>
