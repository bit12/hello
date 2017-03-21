<?php


namespace DesignPattern\Behavioral\Mediator;

/**
 *  Mediator是中介者模式的具体实现类
 *
 * Class Mediator
 * @package DesignPattern\Behavioral\Mediator
 */
class Mediator implements IMediator
{

    /**
     * @var Server
     */
    protected $server;

    /**
     * @var Database
     */
    protected $database;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @param Database $db
     * @param Client   $cl
     * @param Server   $srv
     */
    public function setColleague(Database $db, Client $cl, Server $srv)
    {
        $this->database = $db;
        $this->server = $srv;
        $this->client = $cl;
    }

    /**
     * 发起请求
     */
    public function makeRequest()
    {
        $this->server->process();
    }

    /**
     * 查询数据库
     * @return mixed
     */
    public function queryDb()
    {
        return $this->database->getData();
    }

    /**
     * 发送响应
     *
     * @param string $content
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }

}