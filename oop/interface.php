<?php

interface Car
{
    public function applyBreak();
    public function increaseSpeed();
    public function decreseSpeed();
}


class SportsCar implements Car
{
    public function applyBreak()
    {
        echo "Apply break\n";
    }
    public function increaseSpeed()
    {
        echo "Increase speed\n";
    }
    public function decreseSpeed()
    {
        echo "Decrease speed\n";
    }
}

$car = new SportsCar();
$car->applyBreak();
$car->increaseSpeed();
$car->decreseSpeed();