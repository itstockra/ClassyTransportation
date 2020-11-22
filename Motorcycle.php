<?php

namespace ClassyTransport;
use Exception;

require_once __DIR__.'/Vehicle.php';

class Motorcycle extends Vehicle{
    private string $engineType;

    public function __construct(
        string $make,
        string $model,
        int $width,
        int $height,
        int $length,
        int $horsepower,
        int $numOfCylinders,
        string $fuelType,
        string $engineType
    ) {
        parent::__construct(
            $make,
            $model,
            $width,
            $height,
            $length,
            $horsepower,
            $numOfCylinders,
            $fuelType,
            $driveType = 'Rear Wheel',
            $doors = 'None',
            $windows = 'None',
            $tires = 'Standard'
        );
        $this->engineType = $engineType;

    }

    //to string method to display properties of Honda Class
    public function __toString():string {
        $str = "Make: " . $this->getMake() . "<br>" . 
                "Model: " . $this->getModel() . "<br>" .
                "Width: " . $this->getWidth() . "in<br>" .
                "Height: " . $this->getHeight() . "in<br>" .
                "Length: " . $this->getLength() . "in<br>";
        $str .= "Engine: " . "<br>";
        $keys = array_keys($this->engine);
        foreach($this->getEngine() as $key => $value) {
            $str .= $key . ": " . $value . "<br>"; 
        }
        foreach($this->getDriveType() as $key => $value) {
            if($value) {
                $str .= "Drive Type: " . $key . "<br>";
            }
        }
        $str .= "Doors: " . $this->getDoors() . "<br>" . 
                "Windows: " . $this->getWindows() . "<br>" . 
                "Tires: " . $this->getTires();
        return $str;
    }

    public function getEngineType() {
        return $this->$engineType;
    }
}


?>