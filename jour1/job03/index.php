<?php 
/*Créez des variables de types primitifs
(boolean, entier, chaîne de caractères, nombre à virgule flottante) et affectez-y des
valeurs.*/
$var1=true;
$var2=10;
$var3="gueye";
$var4=2.4;
?>
<?php
    $info=array(
        "var1" => "true", 
        "var2" => "10", 
        "var3" => "gueye", 
        "var4" => "2.4"
    ) ;     
?>
<style>
    .cell{ 
        width: 50%;
        border: 1px solid black ;
        padding: 3px;
    }
</style>
<body>
    <header>
        <table>
            <tr>
                <td class="cell"><b>nom</b></td>
                <td class="cell"><b>valeur</b></td>
            </tr>
        </table>
    </header>

    <table>
    <?php foreach($info as $code => $char) : ?>
        <!-- ce code HTML est intégré à la boucle -->
        <tr>
            <td class="cell"><?php echo $code ?></td>
            <td class="cell" style="text-align: center"><?php echo $char ?></td>
        </tr>
    <?php endforeach ?>
    </table>
    </body>

