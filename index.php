<?php

require_once 'Personage.php' ;

$ayoub = new Personage("ayoub");



var_dump($ayoub);


echo '<br>' ;
echo '<br>' ;
echo '<br>' ;

$anass = new Personage("anass");
var_dump($anass);




echo '<br>' ;
echo '<br>' ;
echo '<br>' ;


$anass->attack($ayoub); 