<?php


namespace src;


interface IAddDriver
{
    public function getDriver();

    public function setDriver(Human $driver): void;
}