<?php

namespace Design\AbstractFactory;


interface IProductFactory
{


    /**
     *
     * @param $size
     * @return mixed
     */
    public static function getInstanceOdd($size);

    /**
     *
     * @param $size
     * @return mixed
     */
    public static function getInstanceEven($size);




}