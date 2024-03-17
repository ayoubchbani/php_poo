<?php

class BootstrapForm extends Form {

    public function surround($htmlContenu)
    {
        // pour ne pas repeter echo
        // <tag>htmlContenu</tag>
        return "<div class=\"form-group\">{$htmlContenu}</div>";
    }
    public function input($name)
    {
        return  $this->surround(
            '<label>'.$name.'</label>
            <input type="text" name="' . $name . '"  value="' . $this->getValue($name) . '" class="form-control">'
        );
    }

    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}