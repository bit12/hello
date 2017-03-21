<?php


namespace DesignPattern\Behavioral\Command;


class Receiver
{
    /**
     * @param string $str
     */
    public function write($str)
    {
        print $str;
    }
}