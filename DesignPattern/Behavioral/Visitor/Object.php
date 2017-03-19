<?php
namespace DesignPattern\Behavioral\Visitor;


class Object
{
    private $elements=array();


    public function add(Person $element)
    {
        array_push($this->elements, $element);
    }


    public function remove(Person $element)
    {
        foreach($this->elements as $k=>$v)
        {
            if($v==$element)
            {
                unset($this->elements[$k]);
            }
        }
    }


    public function display(Visitor $visitor)
    {
        foreach ($this->elements as $element)
        {
            $element->accept($visitor);
        }
    }

}