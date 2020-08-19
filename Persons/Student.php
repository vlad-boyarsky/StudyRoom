<?php

class Student extends PersonAbstract
{
    protected int $averageMark;

    public function __construct(string $fullName, string $email, int $age, int $averageMark)
    {
        parent::__construct($fullName, $email, $age);
        $this->averageMark = $averageMark;
    }

    public function getSummaryLine(): string
    {
        return $this->fullName . ' - ' . $this->averageMark;
    }
}