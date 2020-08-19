<?php

class Student extends PersonAbstract
{
    protected $avarangeMark;

    public function __construct($fullName, $email, $age, $avarangeMark)
    {
        parent::__construct($fullName, $email, $age);
        $this->avarangeMark = $avarangeMark;
    }

    public function getSummaryLine(): string
    {
        return $this->fullName . ' - ' . $this->avarangeMark;
    }
}