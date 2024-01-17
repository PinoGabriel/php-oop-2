<?php

class User
{
    public $log;
    public int $discount;

    public function __construct($log, int $discount)
    {
        $this->log = $log;
        $this->discount = $discount;
    }
}
