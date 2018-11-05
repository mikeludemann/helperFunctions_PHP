<?php
class insertItem
{
    private $_input;
    private $_position;
    private $_replace;
    private $_newItem;
    private $_separator;

    public function __construct($_input)
    {
        $this->_input = $_input;
    }

    public function setItem($_position, $_replace, $_newItem)
    {
        array_splice($this->_input, $_position, $_replace, $_newItem);
        return $this->_input;
    }

    public function getItems($_separator)
    {
        $output = "";

        foreach ($this->_input as $x) {
            if ($separator == "" || $separator == null) {
                $output .= $x . " ";
            } else {
                $output .= $x . $separator;
            }
        }

        return $output;

    }
}
?>