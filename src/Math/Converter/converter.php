<?php
class Converter
{
    private $_input;
    private $_from;
    private $_to;
    private $_caseSensitive;

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

    public function romeToArabic()
    {
        $conv = array(
            array("letter" => 'I', "number" => 1),
            array("letter" => 'V', "number" => 5),
            array("letter" => 'X', "number" => 10),
            array("letter" => 'L', "number" => 50),
            array("letter" => 'C', "number" => 100),
            array("letter" => 'D', "number" => 500),
            array("letter" => 'M', "number" => 1000),
            array("letter" => 0, "number" => 0),
        );
        $arabic = 0;
        $state = 0;
        $sidx = 0;
        $len = strlen($this->_input);

        while ($len >= 0) {
            $i = 0;
            $sidx = $len;

            while ($conv[$i]['number'] > 0) {
                if (strtoupper(@$this->_input[$sidx]) == $conv[$i]['letter']) {
                    if ($state > $conv[$i]['number']) {
                        $arabic -= $conv[$i]['number'];
                    } else {
                        $arabic += $conv[$i]['number'];
                        $state = $conv[$i]['number'];
                    }
                }
                $i++;
            }

            $len--;
        }

        return ($arabic);
    }

    public function number2roman($_caseSensitive = true)
    {

        $n = intval($num);
        $res = '';

        $romanNumerals = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        );

        foreach ($romanNumerals as $rome => $number) {
            $matches = intval($n / $number);

            $res .= str_repeat($rome, $matches);

            $n = $n % $number;
        }

        if ($_caseSensitive) {
            return $res;
        } else {
            return strtolower($res);
        }
    }
}
?>