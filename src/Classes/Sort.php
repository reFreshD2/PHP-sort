<?php

declare(strict_types=1);

namespace Classes;

abstract class Sort
{
    protected $arrayNotSorted;
    protected $arraySorted;
    protected $time;

    public function __construct($array)
    {
        $this->arrayNotSorted = $array;
        $this->arraySorted = $array;
    }

    abstract public function sort();

    public function print()
    {
        echo "Not sorted array: " . PHP_EOL;
        for ($i = 0; $i < count($this->arrayNotSorted); $i++) {
            echo $this->arrayNotSorted[$i] . " ";
        }
        echo PHP_EOL . "Sorted array: " . PHP_EOL;
        for ($i = 0; $i < count($this->arraySorted); $i++) {
            echo $this->arraySorted[$i] . " ";
        }
        echo PHP_EOL . "Time: $this->time" . PHP_EOL;
    }

    protected function swap(&$left, &$right)
    {
        if ($left === $right) {
            return;
        }
        $tmp = $left;
        $left = $right;
        $right = $tmp;
    }
}