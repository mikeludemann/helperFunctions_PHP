<?php
class elementRange
{
    private $_input;

    public function __construct($_input)
    {
        $this->_input = $_input;
    }

    public function alphanumeric()
    {
        preg_match_all("/([a-zA-Z]{1,})-?([a-zA-Z]{0,}) ?,?;?/", $this->_input, $tmp);

        $x = array();

        foreach ($tmp[1] as $key => $value) {

            $x = array_merge($x, range($value, (empty($tmp[2][$key]) ? $value : $tmp[2][$key])));

        }

        return ($x);
    }

    public function numeric()
    {
        preg_match_all("/([0-9]{1,})-?([0-9]{0,}) ?,?;?/", $this->_input, $tmp);

        $x = array();

        foreach ($tmp[1] as $key => $value) {

            $x = array_merge($x, range($value, (empty($tmp[2][$key]) ? $value : $tmp[2][$key])));

        }

        return ($x);
    }

}
?>