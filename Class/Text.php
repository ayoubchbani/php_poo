<?php

class Text{
    private static $suffix = "$";

    const SUFIX = "$" ;

   public static function getWithZero($chiffre){
    return self::withZero($chiffre);
   } 
  private static function withZero($chiffre){

    if($chiffre<10) {
        return '0'.$chiffre .self::SUFIX;
        
    }else{
        return $chiffre .self::SUFIX;
    }

  }


}