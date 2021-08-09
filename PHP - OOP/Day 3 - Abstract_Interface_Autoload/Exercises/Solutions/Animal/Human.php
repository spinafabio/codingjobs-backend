<?php

class Human extends Creature implements Workers
{
    public function work()
    {
        echo $this->_name . ' is currently working.<br>';
    }

    public function talk()
    {
        echo 'blablablablabla';
    }

    public function makeSound(): string
    {
        return 'blabla';
    }
}
