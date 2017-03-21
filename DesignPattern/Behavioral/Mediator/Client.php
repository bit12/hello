<?php


namespace DesignPattern\Behavioral\Mediator;

/**
 * Client是发起请求&获取响应的客户端
 *
 * Class Client
 * @package DesignPattern\Behavioral\Mediator
 */
class Client extends Colleague

{
    /**
     * request
     */
    public function request()
    {
        $this->getMediator()->makeRequest();
    }

    /**
     * output content
     *
     * @param string $content
     */
    public function output($content)
    {
        print $content;
    }


}