<?php
//**/
define("max",20);
define("min",-21);

$xa=rand(max,min);
$ya=rand(max,min);

$xb=rand(max,min);
$yb=rand(max,min);

echo("les coordonnees de A sont.$xa et $ya <br>");


echo("les coordonnees de B sont.$xb et $yb <br>");

$distance=sqrt(pow(($xa+$xb),2))+pow(($ya+$yb),2);

echo("la distance qui separe A et B est.$distance");

