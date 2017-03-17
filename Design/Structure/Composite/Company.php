<?php
namespace Design\Structure\Composite;

/** 抽象结构角色          公司
 *
 * Class Company
 */
abstract class Company
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     *
     *
     * @param Company $company    子公司，部门
     * @return mixed
     */
    abstract function Add(Company $company);

    /**
     * 移除
     *
     * @param Company $company   子公司，部门
     * @return mixed
     */
    abstract function Remove(Company $company);

    /**
     * 显示公司及部门结构
     *
     * @param $depth
     * @return mixed
     */
    abstract function Display($depth);

}