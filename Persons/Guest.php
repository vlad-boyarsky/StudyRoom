<?php

class Guest implements WritableInterface
{
    protected string $email;
    protected string $feedBack;
    protected int $phone;

    public function __construct(string $email, string $feedBack, int $phone)
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