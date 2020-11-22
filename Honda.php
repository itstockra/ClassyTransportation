<?php

namespace ClassyTransport;
use Exception;

require_once __DIR__.'/Vehicle.php';

class Honda extends Vehicle{
    private $color;
    private $colors = array('Black','Silver','Blue','White','Red');


    public function __construct(
        string $color,
        int $width,
        int $height,
        int $length,
        int $horsepower,
        int $numOfCylinders,
        string $fuelType
    ) {
        parent::__construct(
            $make = 'Honda',
            $model = 'Civic',
            $width,
            $height,
            $length,
            $horsepower,
            $numOfCylinders,
            $fuelType,
            $driveType = 'Front Wheel',
            $doors = 'standard',
            $windows = 'standard',
            $tires = 'standard'
        );
        $this->color = $color;
        
        try {
            if(!$this->checkColor($this->color)) {//checks if color is okay
                throw new Exception('Not a valid color. Choose Black, Silver, Blue, White, or Red');
            }
        }
        catch(Exception $e) {
            echo $e->getMessage(); //catch exception and display message
        } 

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

    public function checkColor($color):bool {
        
        foreach($this->colors as $value) {
            if ($value == $color) {
                return true;
            }
        }
        $this->color = ''; //if color is not valid reset to no color
        return false;
    }
    public function getColor(){
        return $this->color;
    }
}

?>