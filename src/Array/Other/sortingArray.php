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
        sort($this->_input);

        return $this->_input;
    }

    public function desc()
    {
        rsort($this->_input);

        return $this->_input;
    }

    public function ascValue()
    {
        asort($this->_input);

        return $this->_input;
    }

    public function ascKey()
    {
        ksort($this->_input);

        return $this->_input;
    }

    public function descValue()
    {
        arsort($this->_input);

        return $this->_input;
    }

    public function descKey()
    {
        krsort($this->_input);

        return $this->_input;
    }
}
?>