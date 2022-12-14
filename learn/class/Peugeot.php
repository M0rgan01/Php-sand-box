<?php

namespace testPHP\classes;

class Peugeot extends CarConstructeur
{

    public $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function getFullName(): string
    {
        return $this->name;
    }
}