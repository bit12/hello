<?php
namespace DesignPattern\Behavioral\Visitor;


abstract class Person
{
    public $type;


    public abstract function accept(Visitor $visitor);
}