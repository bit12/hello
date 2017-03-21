<?php


namespace DesignPattern\Behavioral\Responsibility;

/**
 * 抽象处理者
 *
 * Class Manager
 * @package DesignPattern\Behavioral\Responsibility
 */
abstract class Manager
{
    protected $name;

    /**
     * 管理者上级
     *
     * @var
     */
    protected $manager;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 设置管理者上级
     *
     * @param Manager $manager
     */
    public function setManager(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * 申请请求
     *
     * @param Request $request
     * @return mixed
     */
    abstract public function apply(Request $request);


}