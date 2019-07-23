<?php


namespace src;


class AbstractTransport implements IMotion, ISpeed, IAddDriver
{
    protected $driver = false;

    public function getDriver(): Human
    {
        return $this->driver;
    }

    public function setDriver(Human $driver): void
    {
        if ($this->driver !== false) {
            echo "ADD Driver" . "<br>";
            $this->driver = $driver;
        }

    }

    public function forward(): string
    {
        return "forward" . "<br>";
    }

    public function backward(): string
    {
        return "backward" . "<br>";
    }

    public function left(): string
    {
        return "left" . "<br>";
    }

    public function right(): string
    {
        return "right" . "<br>";
    }

    public function up(): string
    {
        return "up" . "<br>";
    }

    public function down(): string
    {
        return "down" . "<br>";
    }
}