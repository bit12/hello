<?php
namespace DesignPattern\Structure\Composite;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function test()
    {
        print PHP_EOL;

        $root=new SubCompany("北京总公司");
        $root->Add(new MoneyDept("总公司财务部"));
        $root->Add(new TechnologyDept("总公司技术部"));

        $shanghai=new SubCompany("上海分公司");
        $shanghai->Add(new TechnologyDept("上海分公司技术部"));
        $shanghai->Add(new MoneyDept("上海分公司财务部"));

        $root->Add($shanghai);

        $this->assertEquals(3, $root->subCount());

        $root->Display(1);


        print PHP_EOL;

        $root->Remove($shanghai);

        $this->assertEquals(2, $root->subCount());

        $root->Display(3);
    }

}