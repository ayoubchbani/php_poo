<?php

require_once 'Personage.php' ;
require_once 'Form.php' ; 
$ayoub = new Personage("ayoub");




// var_dump($ayoub);


echo '<br>' ;
echo '<br>' ;
echo '<br>' ;

$anass = new Personage("anass");
// var_dump($anass);




echo '<br>' ;
echo '<br>' ;
echo '<br>' ;


// $anass->attack($ayoub); 

// $ayoub->setNom('ilyas') ; 
// var_dump($ayoub->getNom());

// exercice 

$form = new Form($_POST) ; 


?>

<form action="#" method="post">
   <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();

   ?>
</form>