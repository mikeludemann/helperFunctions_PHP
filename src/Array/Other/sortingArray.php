<?php
class sortingArray
{
    private $_input;

    public function __construct($_input)
    {
        $this->_input = $_input;
    }

    public function asc()
    {
        return sort($this->_input);
    }

    public function desc()
    {
        return rsort($this->_input);
    }

    public function ascValue()
    {
        return asort($this->_input);
    }

    public function ascKey()
    {
        return ksort($this->_input);
    }

    public function descValue()
    {
        return arsort($this->_input);
    }

    public function descKey()
    {
        return krsort($this->_input);
    }
}
?>