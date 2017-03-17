<?php
namespace Design\Structure\Bridged;

/**
 * 具体的
 *
 * Class Ali
 * @package Design\Structure\Bridged
 */
class Ali extends AbstractMarket
{
    function sell()
    {
        print PHP_EOL;

        print '淘宝: ';

        $this->iPeople->buy();

        print PHP_EOL;
    }

}