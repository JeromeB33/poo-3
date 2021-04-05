<?php

require_once 'HighWay.php';

final class Motorway extends Highway
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicle[] = $vehicle;
            echo 'véhicule autorisé <br/>';
        } else {
            echo 'véhicule non autorisé <br/>';
        }
    }
}
