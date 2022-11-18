<p>
<?php
// déclaration des variables et affectations
$str="LaPlateforme";
$str2="Vive";
$str3="!";
$val=6;
$myBool=true;
//$myBool=false;
?>
</p>
<p>
<?php
// Affichez le contenu de la variable str.
echo "$str ";?>
</p>
<p>
<?php
// Affichez “Vive LaPlateforme !” en concaténant l’ensemble de ces variables.
echo $str2." ".$str." ".$str3;?>
</p>
<p>
<?php
// Affichez le contenu de la variable $val
echo $val;?>
</p>
<p>
<?php
// Ajoutez 4 à cette variable.
$val+=4;
// Affichez à nouveau le contenu.
echo $val;?>
</p>
<p>
<?php
// affichage du contenu de la variable $myBool 
/* quand la variable $myBool = false la valeur afficher en ecran est 0
   quand la variable $myBool = true la valeur afficher en ecran est 1 */
echo $myBool
?>
</p>