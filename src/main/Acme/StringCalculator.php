<?php

namespace Acme;

class StringCalculator
{
    private $number;

    public function add($string)
    {
        $this->number = array_sum(preg_split('/[\s,]+/', $string));
        return $this->number;
    }
}
