<?php

declare(strict_types=1);

namespace Utils;

use Classes\InsertionSort;
use Classes\SelectionSort;
use Classes\BubbleSort;

class Application
{
    public function run() {
        $array = $this->generateArray(25);
        $ins = new InsertionSort($array);
        $sel = new SelectionSort($array);
        $bubl = new BubbleSort($array);
        $ins->sort();
        $sel->sort();
        $bubl->sort();
        echo "Insertion Sort :" . PHP_EOL;
        $ins->print();
        echo "Selection Sort :" . PHP_EOL;
        $sel->print();
        echo "Bubble Sort :" . PHP_EOL;
        $bubl->print();
    }

    private function generateArray($count) {
        for ($i = 0; $i < $count; $i++)
            $array[$i] = rand($i-$count, $i*$count);
        return $array;
    }
}