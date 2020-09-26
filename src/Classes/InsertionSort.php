<?php

declare(strict_types=1);

namespace Classes;

class InsertionSort implements Sort
{
    private $arrayNotSorted;
    private $arraySorted;
    private $time;

    public function sort()
    {
        $this->arraySorted = $this->arrayNotSorted;
        $start = microtime(true);
        for ($i = 1; $i < count($this->arraySorted); $i++) {
            $index = $i;
            while ($this->arraySorted[$index] < $this->arraySorted[$index-1] && $index > 0) {
                $tmp = $this->arraySorted[$index-1];
                $this->arraySorted[$index-1] = $this->arraySorted[$index];
                $this->arraySorted[$index] = $tmp;
                $index--;
            }
        }
        $this->time = microtime(true) - $start;
    }

    public function __construct($array)
    {
        $this->arrayNotSorted = $array;
    }


    public function print()
    {
        echo PHP_EOL . "Not sorted array: ";
        for ($i = 0; $i < count($this->arrayNotSorted); $i++) {
            echo $this->arrayNotSorted[$i] . " ";
        }
        echo PHP_EOL . "Sorted array: ";
        for ($i = 0; $i < count($this->arraySorted); $i++) {
            echo $this->arraySorted[$i] . " ";
        }
        echo PHP_EOL . "Time: $this->time";
    }
}