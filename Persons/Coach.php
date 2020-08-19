<?php

class Coach extends PersonAbstract
{
    protected $course;

    public function __construct($fullName, $email, $age, $course)
    {
        parent::__construct($fullName, $email, $age);
        $this->course = $course;
    }

    public function getSummaryLine(): string
    {
        return $this->email . ' - ' . $this->course;
    }
}