<?php
$x = 1;
$y = 9;
$res = array();

if ($x<$y){

for ($i=$x; $i<=$y ; $i++) { 
    for ($j=$x; $j<=$y; $j++) { 
        $res[$i][$j] = $i*$j;
    }
}
?>
<table style="border-collapse: collapse; border: 2px solid;">
<?php
foreach ($res as $k1 => $v1) {
?>
    <tr style="border: 1px solid;">
    <?php
    foreach ($v1 as $k2 => $v2) { 
        ?>
        <td style="border: 1px solid;"> <?php 
        echo $k1 . '*' . $k2 . '=' . $v2 ; 
        ?> </td>

     <?php   
    }
    ?>
    </tr>
    <?php
}
?>
</table>
<?php
}
else {
    echo '<p> x должно быть меньше чем y</p>' ;
}



//var_dump ($res);






?>