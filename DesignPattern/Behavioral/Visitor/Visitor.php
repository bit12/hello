<?php
namespace DesignPattern\Behavioral\Visitor;


abstract class Visitor
{
    protected $stateName;

    /**
     * 得到男人反应
     *
     * @param Man $man
     * @return mixed
     */
    public abstract function getManAction(Man $man);


    /**
     * 得到女人反应
     *
     * @param Woman $woman
     * @return mixed
     */
    public abstract function getWomanAction(Woman $woman);
}
