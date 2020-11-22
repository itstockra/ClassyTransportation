<?php

namespace ClassyTransport;

require_once __DIR__.'/Honda.php';
require_once __DIR__.'/Motorcycle.php';

$car1 = new Honda(
    'Black',
    71,
    57,
    180,
    158,
    4,
    'Regular'
);

$motorcycle = new Motorcycle(
    'Harley-Davidson',
    'Roadster',
    24,
    40,
    86,
    77,
    2,
    'Regular',
    'V-twin'
);

echo $car1->__toString();
echo "<br><br>";
echo $motorcycle->__toString();

?>