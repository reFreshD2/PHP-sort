<?php

declare(strict_types=1);

namespace Classes;


class SelectionSort extends Sort
{

    public function sort()
    {
        $start = microtime(true);
        for ($i = 0; $i < count($this->arrayNotSorted) - 1; $i++) {
            $min = $this->arraySorted[$i];
            $index = $i;
            for ($j = $i+1; $j < count($this->arrayNotSorted); $j++) {
                if ($min > $this->arraySorted[$j]) {
                    $min = $this->arraySorted[$j];
                    $index = $j;
                }
            }
            if ($i != $index) {
                $this->swap($this->arraySorted[$i],$this->arraySorted[$index]);
            }
        }
        $this->time = microtime(true) - $start;
    }
}