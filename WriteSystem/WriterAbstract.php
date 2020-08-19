<?php

abstract class WriterAbstract
{
    protected $persons = [];

    public function addPerson(WritableInterface $person)
    {
        $this->persons[] = $person;
    }

    abstract public function write();

}