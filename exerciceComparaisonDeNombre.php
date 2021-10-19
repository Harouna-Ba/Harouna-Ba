<?php

/**

* Ecrire un scripte qui genere trois nombres puis les trient dans l'ordre croissant et decroissant

*/

const MIN=1;

const MAX=1000;

$a=rand(MIN,MAX);

$b=rand(MIN,MAX);

$c=rand(MIN,MAX);

if ($a>$b && $a>$c){

if($b>$c){

echo "$a,$b,$c";

}else{

echo "$a,$c,$b";

}

}elseif ($b>$a && $b>$c){

if($a>$c){

echo "$b,$a,$c";

}else{

echo "$b,$c,$a";

}

}else{

if($b<$a){

echo "$c,$a,$b";

}else{

echo "$c,$b,$a";

}

}

echo "<br>";

if ($a<$b && $a<$c){

if($b<$c){

echo "$a,$b,$c";

}else{

echo "$a,$c,$b";

}

}elseif ($b<$a && $b<$c){

if($a<$c){

echo "$b,$a,$c";

}else{

echo "$b,$c,$a";

}

}else{

if($b>$a){

echo "$c,$a,$b";

}else{

echo "$c,$b,$a";

}

}

 

?>