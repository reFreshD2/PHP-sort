<?php

declare(strict_types=1);

namespace Utils;

class Application
{
    public function run() {
        $array = $this->generateArray(25);
        $ins = new \Classes\InsertionSort($array);
        $ins->sort();
        $ins->print();
    }

    private function generateArray($count) {
        for ($i = 0; $i < $count; $i++)
            $array[$i] = rand($i, $i*$count);
        return $array;
    }
}