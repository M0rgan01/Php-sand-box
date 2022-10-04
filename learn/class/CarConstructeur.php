<?php

abstract class CarConstructeur
{
    // force les classes qui hérite à redéfinir la fonction
    abstract protected function getFullName(): string;

    public function printOut()
    {
        print $this->getValue();
    }
}