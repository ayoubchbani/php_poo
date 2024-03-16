<?php

require 'Personage.php';
require 'Archer.php';

$merlin = new Personage('Merlin');

$harry = new Personage('Harry');

$legolas = new Archer('legolas');

$legolas->attack($harry);
echo '<pre>' . var_dump($merlin) . '</pre>';
echo '<pre>' . var_dump($harry) . '</pre>';
echo '<pre>' . var_dump($legolas) . '</pre>';
