<?php

class Personage {

    protected $vie = 80;
    protected $atk = 20;
    protected $def = 80;
  
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
       $cible->vie = $this->atk;
       $cible->empecher_negatif();
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
    public function empecher_negatif(){
      if($this->vie<0){
        $this->vie =0;
      }

    }
}
