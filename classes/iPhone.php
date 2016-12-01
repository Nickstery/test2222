<?php

class iPhone extends MobilePhone
{
    public function __construct($m, $c, $st)
    {
        parent::__construct($m, $c, $st);
        $this->testData;
    }

    public function getGSM()
    {
        die("NOOOOO");
    }

    public function makeCall() {
        $rand = rand(1,100);
        if($rand > 95) {
            return false;
        }
        return true;
    }
}