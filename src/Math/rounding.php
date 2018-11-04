<?php
function rounding($number, $precision, $mode)
{
    $num = $number;
    $cutter = $precision;
    $art = $mode;

    if (gettype($num) === "double") {

        if (is_double($num) || is_float($num)) {

            if (gettype($cutter) === "integer" && ($cutter != "" || $cutter != null)) {

                if ($art != "" || $art != null) {

                    if (strtolower($art) == "up" || strtoupper($art) == "UP") {

                        echo round($num, $cutter, PHP_ROUND_HALF_UP);

                    } elseif (strtolower($art) == "down" || strtoupper($art) == "DOWN") {

                        echo round($num, $cutter, PHP_ROUND_HALF_DOWN);

                    } elseif (strtolower($art) == "even" || strtoupper($art) == "EVEN") {

                        echo round($num, $cutter, PHP_ROUND_HALF_EVEN);

                    } elseif (strtolower($art) == "odd" || strtoupper($art) == "ODD") {

                        echo round($num, $cutter, PHP_ROUND_HALF_ODD);

                    } else {

                        echo round($num, $cutter);

                    }
                    
                } else {

                    echo round($num, $cutter);
                }

            } else {

                echo round($num);
            }

        } else {

            throw new InvalidArgumentException('Not a valid float or double number');
            return 1;

        }

    } else {

        throw new InvalidArgumentException('Not a number available');
        return 0;
    }

}

?>