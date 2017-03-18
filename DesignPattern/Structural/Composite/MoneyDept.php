<?php
namespace DesignPattern\Structure\Composite;

/**
 * 叶子节点                    财务部
 *
 * Class DeptCompany
 */
class MoneyDept extends Company
{

    function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * 增加
     *
     * @param Company $company 子公司，部门
     * @return mixed
     */
    function Add(Company $company)
    {
        print  "叶子节点，不能继续添加节点。。。。。。。。。。" . PHP_EOL;
    }

    /**
     * 移除
     *
     * @param Company $company 子公司，部门
     * @return mixed
     */
    function Remove(Company $company)
    {
        print  "叶子节点，不能删除节点。。。。。。。。。。" . PHP_EOL;
    }

    /**
     * 显示公司及部门结构
     *
     * @param $depth
     * @return mixed
     */
    function Display($depth)
    {
        $pre = "";
        for($i=0; $i<$depth; $i++)
        {
            $pre .= "-";
        }
        $pre .=  $this->name . PHP_EOL;
        print  $pre;
    }

}