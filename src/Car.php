<?php


namespace src;


class Car extends AbstractTransportWithPassenger
{

    public function __construct()
    {
        echo "Car" . "<br>";
    }
}