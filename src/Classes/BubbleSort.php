<?php


namespace Classes;


class BubbleSort extends Sort
{

    public function sort()
    {
        $start = microtime(true);
        for ($i = 1; $i < count($this->arrayNotSorted) - 1; $i++)
            for ($j = 0; $j < count($this->arrayNotSorted) - $i; $j++)
                if ($this->arraySorted[$j] > $this->arraySorted[$j + 1])
                    $this->swap($this->arraySorted[$j], $this->arraySorted[$j + 1]);
        $this->time = microtime(true) - $start;
    }
}