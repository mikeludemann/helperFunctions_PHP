<?php

class Formatter
{
    private $string;
    
    public function __construct($string){

        if(!is_string($string)){

            throw new InvalidArgumentException('Not a valid string or missing argument');
            
        }

        $this->_string = $string;

    }

    public function upperText(){

        return strtoupper($this->_string);

    }

    public function lowerText(){

        return strtolower($this->_string);

    }

    public function firstWordLetterLower(){

        return lcfirst($this->_string);

    }

    public function firstWordLetterUpper(){

        return ucfirst($this->_string);

    }

    public function firstLetterUpper(){

        return ucwords($this->_string);

    }

}

?>