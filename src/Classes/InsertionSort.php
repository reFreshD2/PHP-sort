<?php

declare(strict_types=1);

namespace Classes;

class InsertionSort extends Sort
{
    public function sort()
    {
        $start = microtime(true);
        for ($i = 1; $i < count($this->arraySorted); $i++) {
            $index = $i;
            while ($this->arraySorted[$index] < $this->arraySorted[$index-1] && $index > 0) {
                $this->swap($this->arraySorted[$index-1],$this->arraySorted[$index]);
                $index--;
            }
        }
        $this->time = microtime(true) - $start;
    }
}