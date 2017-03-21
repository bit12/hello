<?php


namespace DesignPattern\More\Delegation;


class TeamLead
{
    /** @var JuniorDeveloper */
    protected $slave;

    /**
     * 在构造函数中注入初级开发者JuniorDeveloper
     * @param JuniorDeveloper $junior
     */
    public function __construct(JuniorDeveloper $junior)
    {
        $this->slave = $junior;
    }

    /**
     * TeamLead 喝咖啡, JuniorDeveloper 工作
     * @return mixed
     */
    public function writeCode()
    {
        return $this->slave->writeBadCode();
    }
}