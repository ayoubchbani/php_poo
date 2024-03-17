<?php

/**
 * Class Form
 * Permet de genere un formulare rapidement et simplement 
 */
class Form
{

    /**
     * @var array Données utilisé par le formulaire 
     */
    protected $data = array();
    /**
     * @var string Tag utilisé pour entouré les champs
     */
    public $surroud = 'p';

    /**
     * @param array  $data
     * @param string $string 
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }


    public function surround($htmlContenu)
    {
        // pour ne pas repeter echo
        // <tag>htmlContenu</tag>
        return "<{$this->surroud}>{$htmlContenu}</{$this->surroud}>";
    }
    public function input($name)
    {
        return  $this->surround('<input type="text" name="' . $name . '"  value="' . $this->getValue($name) . '">  ');
    }
    protected function getValue($index)
    {

        return isset($this->data[$index]) ?  $this->data[$index] : null;
    }
    public function submit()
    {

        return $this->surround('<button type="submit" >Envoyer</button>');
    }
}

?>
