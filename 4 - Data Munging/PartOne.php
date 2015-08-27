<?php

namespace DataMunging;

/**
*
*/
class PartOne
{

    public function readFile()
    {
        $handle = fopen("weather.dat", "r");
        if ($handle) {
            $values_array = array();
            while (($buffer = fgets($handle, 4096)) !== false) {
                //echo $buffer."<br />";
                $buffer_array = explode(" ", $buffer);
                $buffer_array = array_filter($buffer_array);
                $buffer_array = array_values($buffer_array);
                if (is_numeric($buffer_array[0]) && is_int((int)$buffer_array[0])) {
                    $values_array[$buffer_array[0]] = $buffer_array[1] - $buffer_array[2];
                }
            }
            if (!feof($handle)) {
                echo "Error: unexpected fgets() fail\n";
            }
            fclose($handle);

            if (count($values_array) > 0) {
                $index = array_keys($values_array, min($values_array));
                echo "Day: {$index[0]} at {$values_array[$index[0]]} degree difference";
            }
        }
    }
}

$PartOne = new PartOne();
$PartOne->readFile();
