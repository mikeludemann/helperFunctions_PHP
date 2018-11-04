<?php
class Converter
{
    private $_input;
    private $_from;
    private $_to;

    public function __construct($input)
    {
        $this->_input = $input;
    }

    public function fromBinaryToDecimal()
    {
        return base_convert($this->_input, 2, 10);
    }

    public function fromBinaryToOctal()
    {
        return base_convert($this->_input, 2, 8);
    }

    public function fromBinaryToHexadecimal()
    {
        return base_convert($this->_input, 2, 16);
    }

    public function fromDecimalToBinary()
    {
        return base_convert($this->_input, 10, 2);
    }

    public function fromDecimalToOctal()
    {
        return base_convert($this->_input, 10, 8);
    }

    public function fromDecimalToHexadecimal()
    {
        return base_convert($this->_input, 10, 16);
    }

    public function fromOctalToBinary()
    {
        return base_convert($this->_input, 8, 2);
    }

    public function fromOctalToDecimal()
    {
        return base_convert($this->_input, 8, 10);
    }

    public function fromOctalToHexadecimal()
    {
        return base_convert($this->_input, 8, 16);
    }

    public function fromHexadecimalToBinary()
    {
        return base_convert($this->_input, 16, 2);
    }

    public function fromHexadecimalToOctal()
    {
        return base_convert($this->_input, 16, 8);
    }

    public function fromHexadecimalToDecimal()
    {
        return base_convert($this->_input, 16, 10);
    }

    public function custom($_from, $_to)
    {
        return base_convert($this->_input, $_from, $_to);
    }

}
?>