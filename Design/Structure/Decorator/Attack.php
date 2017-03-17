<?php
namespace Design\Structure\Decorator;


class Attack implements IComponent
{
    public $component;

    public function decorate(IComponent $component)
    {
        $this->component = $component;
    }

    public function warning()
    {
        $this->component->warning();
    }
}