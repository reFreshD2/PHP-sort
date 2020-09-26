<?php

declare(strict_types=1);

namespace Classes;

interface Sort
{
    public function __construct($array);
    public function sort();
    public function print();
}