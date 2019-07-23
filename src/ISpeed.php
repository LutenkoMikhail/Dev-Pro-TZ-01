<?php


namespace src;


interface ISpeed
{
    public function up(): string;
    public function down(): string;
}