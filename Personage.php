<?php

class Personage {

    public $vie = 80;
    public $atk = 20;
    public $def = 80;

    public function regenerer($add){

       return $this->vie += $add;
    }
}
