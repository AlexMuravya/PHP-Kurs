<?php
function DoubleIt($int){
    $d_int=$int*2;
    return $d_int;
}

function JustSay($what){
    echo $what;
}
//orginal way to call func
$var='DoubleIt';

echo $var('2'); //4
echo '<BR>';

$newVar='JustSay';
echo $newVar('Terve!'); //Terve!

?>
