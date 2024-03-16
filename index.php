<?php

require_once 'Personage.php' ;
require_once 'Form.php' ; 
require_once 'Text.php';
$ayoub = new Personage("ayoub");

// var_dump($ayoub);

echo '<br>' ;
echo '<br>' ;
echo '<br>' ;

$anass = new Personage("anass");

$merlin = new Personage("merlin");
$merlin->regenerer();
var_dump($merlin->getVie());
// var_dump($anass);

// $anass->attack($ayoub); 

// $ayoub->setNom('ilyas') ; 
// var_dump($ayoub->getNom());

// exercice 

$form = new Form($_POST) ; 
$format=  Text::getWithZero(15) ;
 

var_dump($format);
?>

<form action="#" method="post">
   <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();

   ?>
</form>