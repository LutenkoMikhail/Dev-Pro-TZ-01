<?php


namespace src;


class Human implements IMotion
{
    private $name;

    public function __construct()
    {
        echo "Create Human" . "<br>";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function forward(): string
    {
        return "forward"."<br>";
    }

    public function backward(): string
    {
        return "backward"."<br>";
    }

    public function left(): string
    {
        return "left"."<br>";
    }

    public function right(): string
    {
        return "right"."<br>";
    }

}