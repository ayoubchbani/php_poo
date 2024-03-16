<?php

class Personage {

    private $vie = 80;
    private $atk = 20;
    private $def = 80;
  
    private $nom;
    const MAXVIE = 100 ;

    public function __construct($nom){
        $this->nom = $nom ;
    }
    public function regenerer($vie = null){

        if(is_null($vie)){
            $this->vie = self::MAXVIE ;
        }else{
           $this->vie += $vie; 
        }
     
    }

    public function mort(){
        return $this->vie <= 0 ;
    }
    public function attack($cible){
        var_dump($cible);
    }

    public function getNom(){
        return $this->nom;
    }
    public function getVie(){
        return $this->vie;
    }
    public function getAtk(){
        return $this->atk; 
    }
    public function getDef(){
        return $this->def; 
    }
    public function setNom($newNom){
        $this->nom = $newNom ;
    }
}
