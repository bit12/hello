<?php


namespace DesignPattern\Behavioral\Mediator;

/**
 * 中介者接口
 *
 * Interface IMediator
 * @package DesignPattern\Behavioral\Mediator
 */
interface IMediator
{

    /**
     * 发送响应
     *
     * @param string $content
     */
    public function sendResponse($content);

    /**
     * 发起请求
     */
    public function makeRequest();

    /**
     * 查询数据库
     */
    public function queryDb();

}