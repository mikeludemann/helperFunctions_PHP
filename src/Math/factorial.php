<?php
class factorial
{
    protected $_n;
    public function __construct($n)
    {
        if (!is_int($n)) {
            throw new InvalidArgumentException('Not a valid integer number or missing argument');
        }
        $this->_n = $n;
    }
    public function result()
    {
        $factorial = 1;
        for ($i = 1; $i <= $this->_n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}
?>