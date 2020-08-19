<?php

abstract class PersonAbstract implements WritableInterface
{

    protected $fullName;
    protected $email;
    protected $age;

    public function __construct($fullName, $email, $age)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->age = $age;
    }


    public function getEmail(): string
    {
        return $this->email;
    }
}