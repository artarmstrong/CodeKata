<?php

namespace KarateChop;

class Chop
{

    public function chop1($int, $array_of_int)
    {
        // Use regular php functions, most common for production use
        if (in_array($int, $array_of_int)) {
            return array_search($int, $array_of_int);
        } else {
            return -1;
        }
    }

    public function chop2($int, $array_of_int)
    {
        // Go through items individually and check values
        $index = -1;
        for ($i=0;$i<count($array_of_int);$i++) {
            if ($array_of_int[$i] == $int) {
                $index = $i;
                break;
            }
        }
        return $index;
    }

    public function chop3($int, $array_of_int)
    {
        // Chop the array in half and recursively call the
        return -1;
    }

    public function chop4($int, $array_of_int)
    {
        return -1;
    }

    public function chop5($int, $array_of_int)
    {
        return -1;
    }
}
