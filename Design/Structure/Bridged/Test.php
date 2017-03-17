<?php
namespace Design\Structure\Bridged;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    public function test()
    {
        $ali = new Ali(new Man());
        $ali->sell();


        $jd = new Jd(new Man());
        $jd->sell();


        $ali = new Ali(new Miss());
        $ali->sell();


        $jd = new Jd(new Miss());
        $jd->sell();
    }


}
