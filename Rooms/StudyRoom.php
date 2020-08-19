<?php

class StudyRoom implements RoomInfoInterface
{
    protected string $name;
    protected int $number;

    public function __construct($name, $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNumber(): int
    {
        return $this->number;
    }
}