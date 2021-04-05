<?php

require_once 'HighWay.php';

final class ResidentialWay extends Highway
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicle[] = $vehicle;
            echo 'véhicule autorisé <br/>';
        } else {
            echo 'véhicule non autorisé <br/>';
        }
    }
}
