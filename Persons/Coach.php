<?php

class Coach extends PersonAbstract
{

    protected string $course;

    public function __construct(string $fullName, string $email, int $age, string $course)
    {
        parent::__construct($fullName, $email, $age);
        $this->course = $course;
    }

    public function getSummaryLine(): string
    {
        return $this->email . ' - ' . $this->course;
    }

}