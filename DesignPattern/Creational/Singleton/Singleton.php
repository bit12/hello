<?php
namespace DesignPattern\Creational\Singleton;


class Singleton
{
    /**
     * @var
     */
    private static $_instance ;

    /**
     *
     * Singleton constructor.
     */
    private function __construct()
    {

    }

    /**
     *
     * @return Singleton
     */
    public static function getInstance()
    {

        if (! self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * Not allow clone
     */
    public function __clone()
    {
        trigger_error('Not allow clone.', E_USER_ERROR);
    }

}