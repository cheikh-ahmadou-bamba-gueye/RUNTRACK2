<?php 
    $str = "onnestpaslemeilleurquandonlecroitmaisquandonlesait";
    
    $cpt=0;
    $cpt1=0;
    for($i=0; $i<strlen($str); $i++){
        if($str[$i]=='a' || $str[$i]=='o' || $str[$i]=='i' || $str[$i]=='u' || $str[$i]=='e' || $str[$i]=='y'){
           $cpt+=1;
        } 
        else{
            $cpt1+=1;
        }
    }
    $voyelles=$cpt;
    $consonnes=$cpt1;
    $dic = array("consonnes"=>"$consonnes", "voyelles"=>"$voyelles");?>
    <style>
    .cell{ 
        width: 50%;
        border: 1px solid black ;
        padding: 3px;
    }
</style>
    <table>
    <?php foreach($dic as $code => $char) : ?>
        <!-- ce code HTML est intégré à la boucle -->
        <tr>
            <td class="cell"><?php echo $code ?></td>
            <td class="cell" style="text-align: center"><?php echo $char ?></td>
        </tr>
    <?php endforeach ?>
</table>
    

