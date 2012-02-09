<?php
$a[]='Haba';
$a[]=1234;
$a[]=NULL;
$a[]=TRUE;
echo '<pre>';
var_dump($a);
echo '<pre>';
echo '<br>';

$b = array(12=>'sdsdsdsd',
            'sdsdsd',
            1000=>123,
              true);
echo '<pre>';
var_dump($b);
echo '<pre>';
echo '<br>';
?>

<?php
$users = array (
    0 => array(
                "login" => "Admin",
                "room" => "715"
               ),
    1 => array (
                "login" => "user1",
                "room" => "234"
               ),
    );

    //in which room sits Admin
    echo $users[0]["room"]; //715
?>

<?php
foreach ($users as $k=>$v){
    echo $k. ' = '. $v. '<br>';
}
?>

<?php

echo current($users);echo '<br>';//current value
echo next($users);echo '<br>';//next value
echo prev($users);echo '<br>';//prev value
echo end($users);echo '<br>';//last value
echo reset($users);echo '<br>';//reset value to first
echo key($users);echo '<br>';//key
?>