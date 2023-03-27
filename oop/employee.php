<?php

class Employee
{
    public $id;
    public $name;
    public $workingHoursPerDay = 8;
    public $hourlyRate = 15;
    public $totalLeaveTaken;
    public $workingDays;

    function __construct($id, $name, $totalLeaveTaken)
    {
        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTaken = $totalLeaveTaken;
    }

    function calculateSalary($totalDays): int
    {
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->hourlyRate * $this->workingHoursPerDay;
        return $salary;

    }

}

$employe = new Employee(101, 'Bablu Mia', 4);
$salary = $employe->calculateSalary(20);

echo "Employe $employe->name salary is $salary";