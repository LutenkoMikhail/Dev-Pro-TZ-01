<?php


namespace src;


interface IMotion
{
    public function forward(): string;
    public function backward(): string;
    public function left(): string;
    public function right(): string;
}