<?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    for($i=0; $i<strlen($str); $i++){
        if($str[$i]=='a' || $str[$i]=='o' || $str[$i]=='i' || $str[$i]=='u' || $str[$i]=='e' || $str[$i]=='y' || $str[$i]=='I'){
            echo "$str[$i]";
        }
    }