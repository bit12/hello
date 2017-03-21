<?php


namespace DesignPattern\Behavioral\Mediator;

/**
 * Database提供数据库服务
 *
 * Class Database
 * @package DesignPattern\Behavioral\Mediator
 */
class Database extends Colleague
{

    /**
     * @return string
     */
    public function getData()
    {
        return "World";
    }
}