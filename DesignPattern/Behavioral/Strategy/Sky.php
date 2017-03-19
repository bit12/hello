<?php
namespace DesignPattern\Behavioral\Strategy;


class Sky
{
    private $animal;


    public function fly()
    {
        if (empty($this->animal)) {
            throw  new \Exception('Empty animal, call setAnimal');
        }

       return $this->animal->fly();
    }

    public function setAnimal(IFly $fly)
    {
        $this->animal = $fly;
    }

}