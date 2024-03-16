<?php 

class Archer extends Personage {

    protected $vie = 42;
   
    public function attack($cible){
        $cible->vie -=  $this->atk;
        parent::attack($cible);
     }

}