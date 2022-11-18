<?php 
$cpt="";
    $str = "Certaines choses changent, et d'autres ne changeront jamais";
    for($i=0; $i<strlen($str); $i++){
        $str[$i]=$str[$i+1];
        $str[$i+1]=$cpt;
        $cpt=$str[$i];
    }
    echo $str;