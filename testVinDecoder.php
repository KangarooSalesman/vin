<?php

use InvalidArgumentException;
use Sunrise\Vin\Vin;


try {
    $vin = new Vin('WVWZZZ1KZ6W612305');  // This is a sample VIN number

    echo "VIN: " . $vin->getVin() . PHP_EOL;
    echo "World Manufacturer Identifier (WMI): " . $vin->getWmi() . PHP_EOL;
    echo "Vehicle Descriptor Section (VDS): " . $vin->getVds() . PHP_EOL;
    echo "Vehicle Identifier Section (VIS): " . $vin->getVis() . PHP_EOL;
    echo "Region: " . $vin->getRegion() . PHP_EOL;
    echo "Country: " . $vin->getCountry() . PHP_EOL;
    echo "Manufacturer: " . $vin->getManufacturer() . PHP_EOL;
    echo "Model Year: " . $vin->getModelYear() . PHP_EOL;

} catch (InvalidArgumentException $e) {
    echo "It isn't a valid VIN..." . PHP_EOL;
}
