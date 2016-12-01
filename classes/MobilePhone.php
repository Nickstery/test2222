<?php

class MobilePhone
{
    public $storage;
    public $model;
    public $cameraPixels;
    public $imei;

    protected $testData;

    private $wifiAdapter;
    private $modem;
    private $gsmModule;


    public function __construct($m, $c, $st)
    {
        $this->storage = $st;
        $this->cameraPixels = $c;
        $this->model = $m;
        $this->imei = rand(1000000,9999999);
        $this->setManufacturerData();
    }

    private function setManufacturerData()
    {
        $this->wifiAdapter = rand(1, 100);
        $this->modem = rand(1, 100);
        $this->gsmModule = rand(1, 100);
    }

    public function setGSM($newModule)
    {
        $this->gsmModule = $newModule;
    }

    public function getGSM()
    {
        return $this->gsmModule;
    }
}