<?php

namespace ClassyTransport;

abstract class Vehicle{
    protected $make;
    protected $model;
    protected $doors;
    protected $windows;
    protected $tires;
    protected $width;
    protected $height;
    protected $length;
    protected $engine = array('Horsepower' => int, 'NumOfCylinders' => int, 'FuelType' => string);
    protected $driveType = array('Front Wheel' => bool, 'Rear Wheel' => bool, 'All Wheel' => bool);
    
    public function __construct(
        string $make,
        string $model,
        int $width,
        int $height,
        int $length,
        int $horsepower,
        int $numOfCylinders,
        string $fuelType,
        string $driveType,
        string $doors = 'standard',
        string $windows = 'standard',
        string $tires = 'standard'
    ) {
        $this->make = $make;
        $this->model = $model;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        $this->engine['Horsepower'] = $horsepower;
        $this->engine['NumOfCylinders'] = $numOfCylinders;
        $this->engine['FuelType'] = $fuelType;
        $this->driveType['Front Wheel'] = $this->checkFW($driveType);
        $this->driveType['Rear Wheel'] = $this->checkRW($driveType);
        $this->driveType['All Wheel'] = $this->checkAW($driveType);
        $this->doors = $doors;
        $this->windows = $windows;
        $this->tires = $tires;
    }
    //Properties to get protected data members
    public function getMake(): string {
        return $this->make;
    }
    public function getModel(): string {
        return $this->model;
    }
    public function getWidth(): string {
        return $this->width;
    }
    public function getHeight(): string {
        return $this->height;
    }
    public function getLength(): string {
        return $this->length;
    }
    public function getDoors(): string {
        return $this->doors;
    }
    public function getWindows(): string {
        return $this->windows;
    }
    public function getTires(): string {
        return $this->tires;
    }
    public function getEngine(): array {
        return $this->engine;
    }
    public function getDriveType(): array {
        return $this->driveType;
    }
    public function setDriveType(): array {
        $this->driveType['Front Wheel'] = $driveType['Front Wheel'];
        $this->driveType['Rear Wheel'] = $driveType['Rear Wheel'];
        $this->driveType['All Wheel'] = $driveType['All Wheel'];
    }
    public function checkFW($driveType): bool {
        if($driveType == 'Front Wheel'){
            return true;
        } else {
            return false;
        }
    }
    public function checkRW($driveType): bool {
        if($driveType == 'Rear Wheel'){
            return true;
        } else {
            return false;
        }
    }
    public function checkAW($driveType): bool {
        if($driveType == 'All Wheel'){
            return true;
        } else {
            return false;
        }
    }
    

}


?>