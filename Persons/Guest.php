<?php

class Guest implements WritableInterface
{
    protected $email;
    protected $feedBack;
    protected $phone;

    public function __construct($email, $feedBack, $phone)
    {
        $this->email = $email;
        $this->feedBack = $feedBack;
        $this->phone = $phone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSummaryLine(): string
    {
        return $this->phone . ' - ' . $this->feedBack;
    }
}