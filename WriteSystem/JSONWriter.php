<?php

class JSONWriter extends WriterAbstract
{
    public function write(): string
    {
        $result = [];

        foreach ($this->persons as $person) {
            $result[] = [
                'email' => $person->getEmail(),
                'info' => $person->getSummaryLine(),
            ];
        }

        return json_encode($result);
    }
}