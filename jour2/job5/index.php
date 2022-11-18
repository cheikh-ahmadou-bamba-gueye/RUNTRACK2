<?php
$nb_premier;
$j=2;
$n=1000;
    for($i=2;$i<=$n;$i++){
        for($j=2;$j<=$i;$j++){
            if(($i%$j)==0 && $j!=$i){
                $nb_premier=0;
            }
        }
        if($nb_premier!=0){
            echo "$i<br>";
            $i++;
        }
        else
            $i++;
    }