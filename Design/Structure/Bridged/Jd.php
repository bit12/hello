<?php
namespace Design\Structure\Bridged;


class Jd extends AbstractMarket
{

    function sell()
    {
        print PHP_EOL;

        print '京东: ';

        $this->iPeople->buy();

        print PHP_EOL;
    }
}