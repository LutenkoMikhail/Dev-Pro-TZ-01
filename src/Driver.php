<?php


namespace src;


class Driver extends Human implements IDriver
{


    public function __construct()
    {
        echo "Create Driver" . "<br>";
    }

    public function isDrivingLicense(): bool
    {
        return true;
    }
}