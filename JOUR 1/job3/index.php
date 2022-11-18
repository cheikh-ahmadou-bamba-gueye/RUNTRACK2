<?php
$boolean = true;
$entier = 5;
$caractere = "Hello";
$nb_virgule = 5.2;

 $array =array( $boolean ,
 $entier ,
 $caractere ,
 $nb_virgule,);

 var_dump($array);
 ?>

 <style>
        .cell{
            width: 50%;
            border: 1px solid black ;
            padding: 3px;

        }
 </style>
             <header>
                <table>
                    <tr>
                       <td class="cell"><b>nom</b></td>
                       <td class="cell"><b>valeur</b></td>
                    </tr>
                </table>
             </header>
<?php foreach($array as $code=>$char) : ?>
     <!-- ce code HTML est integre a la boucle -->
     <tr>
         <td class="cell"><?php echo $code ?></td>
         <td class="cell" style="text-align: center"><?php echo $char ?></td>
     </tr>
