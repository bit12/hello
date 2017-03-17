<?php
namespace Design\Structure\Composite;


class SubCompany extends Company
{
    private $subCompanys=array();



    function __construct($name)
    {
        parent::__construct($name);
    }


    public function subCount()
    {
        return count($this->subCompanys);
    }


    function Add(Company $company)
    {
        $this->subCompanys[]=$company;
    }



    function Remove(Company $company)
    {
        $key=array_search($company,$this->subCompanys);
        if($key!==false)
        {
            unset($this->subCompanys[$key]);
        }
    }


    function Display($depth)
    {
        $pre="";
        for($i=0;$i<$depth;$i++)
        {
            $pre.="-";
        }
        $pre.=$this->name. PHP_EOL;

        print $pre;

        foreach($this->subCompanys as $v)
        {
            $v->Display($depth + 2);
        }
    }



}  